<?php

namespace App\Repositories;

use App\Models\LotsItemCopart;
use App\Models\LotsItemIaai;
use App\Models\LotsItemImpact;
use App\Repositories\Interfaces\CatalogRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class CatalogRepository implements CatalogRepositoryInterface
{
    public function all()
    {
        return LotsItemCopart::get();
    }

    public function findFilters($request)
    {
        $daata = [
            [
                'name' => 'copart',
                'data' => LotsItemCopart::query(),
            ], [
                'name' => 'iaai',
                'data' => LotsItemIaai::query(),
            ], [
                'name' => 'impact',
                'data' => LotsItemImpact::query(),
            ],
        ];
        $new_data = $daata;
        if ($request->has('auctions')){
            $new_data = [];
            foreach ($request->input('auctions') as $item) {
                $new_data[] = $daata[$item];
            }
        }
        $data_card = null;
        foreach ($new_data as $key => $item) {
            $query = $this->findfilter_new($request, $item['data'], 'lots_item_' . $item['name']);
            $query = $this->joinTable($query, 'lots_item_' . $item['name']);

            if ($key === 0) {
                $data_card = $query;
            } else {
                $data_card->union($query);
            }
        }
        return $data_card->orderBy('created_at', 'desc');
    }

    public function findfilter_new($request, $data_card, $table_name)
    {
        if ($request->has('max-year')) {
            $data_card = $data_card->where('year', "<", $request->input('max-year'));
        }

        if ($request->has('min-year')) {
            $data_card = $data_card->where('year', ">", $request->input('min-year'));
        }

        if ($request->has('make_id')) {
            $data_card = $this->is_array_input($request, $data_card, 'make_id');
        }

        if ($request->has('model_id')) {
            $data_card = $this->is_array_input($request, $data_card, 'model_id');
        }
        if ($request->has('conditions')) {
            $this->joinFilters($request, $data_card, 'conditions', 'lot_runs_drive', 'runs_drive_id', $table_name);
        }
        if ($request->has('fuel')) {
            $this->joinFilters($request, $data_card, 'fuel', 'lot_fuel', 'fuel_id', $table_name);
        }
        if ($request->has('damage')) {
            $this->joinFilters($request, $data_card, 'damage', 'lot_damage', 'damage_id', $table_name);
        }

//        if ($request->has('damage')) {
//            $damageInput = $request->input('damage');
//            $data_card->join('lot_damage as lr_damage', function ($join) use ($damageInput) {
//                $join->on('lots_item_copart.damage_id', '=', 'lr_damage.id')
//                    ->where('lr_damage.alias', $damageInput)
//                    ->orWhere(function ($query) use ($damageInput) {
//                        $query->where('lots_item_copart.damage2_id', '=', 'lr_damage.id')
//                            ->where('lr_damage.alias', $damageInput);
//                    });
//            });
//        }

        if ($request->has('auction_status')) {
            $data_now = date('Y-m-d H:i:s');
            switch ($request->input('auction_status')) {
                case 1:
                    $data_card = $data_card->where('date_sale', ">", $data_now);
                    break;
                case 2:
                    $data_card = $data_card->where('date_sale', "<", $data_now);
                    break;
            }
        }


        return $data_card;
    }

    public function joinTable($data_card, $table_name)
    {
        $data_card->leftJoin('lot_runs_drive', 'lot_runs_drive.id', '=', $table_name . '.runs_drive_id');
        $data_card->leftJoin('lot_damage', 'lot_damage.id', '=', $table_name . '.damage_id');
        $data_card->leftJoin('attachments', 'attachments.id', '=', $table_name . '.id');
        $data_card->leftJoin('lot_models', 'lot_models.id', '=', $table_name . '.model_id');
        $data_card->leftJoin('lot_fuel', 'lot_fuel.id', '=', $table_name . '.fuel_id');
        $data_card->select(
            $table_name . '.id',
            $table_name . '.vin',
            $table_name . '.year',
            $table_name . '.lot_id',
            $table_name . '.runs_drive_id',
//            $table_name . '.final_bid',
            $table_name . '.price_bid',
            $table_name . '.price_buy',
            $table_name . '.price_repair',
            $table_name . '.created_at',
            'lot_runs_drive.name as lot_runs_drive_name',
            'lot_damage.name as lot_damage_name',
            'attachments.url as attachments_url',
            'lot_models.name as model_name',
            'lot_fuel.name as fuel_name',
            DB::raw("'$table_name' as " . 'base_name'),
        );
        return $data_card;
    }


    private function joinFilters($request, $data_card, $input_column, $lot_column, $where_column, $table_name)
    {
        $input = is_array($request) ? $request : $request->input($input_column);


        if ($input) {
            $input = is_array($input) ? $input : [$input];

            $data_card->join($lot_column . ' as lr_' . $input_column, function ($join) use ($input, $where_column, $input_column, $table_name) {
                $join->on($table_name . '.' . $where_column, '=', 'lr_' . $input_column . '.id');
                $join->whereIn('lr_' . $input_column . '.alias', $input);
            })->select($table_name.'.*');
        }
    }
//    private function joinFilters($request, $data_card, $input_column, $where_column)
//    {
//        $input = is_array($request) ? $request : $request->input($input_column);
//
//        if ($input) {
//            $input = is_array($input) ? $input : [$input];
//
//            $data_card->leftJoin('lot_runs_drive as lr_' . $input_column, function ($join) use ($input, $where_column, $input_column) {
//                $join->on('lots_item_copart.' . $where_column, '=', 'lr_' . $input_column . '.id');
//                $join->whereIn('lr_' . $input_column . '.alias', $input);
//            })->select('lots_item_copart.*');
//        }
//    }
    private function is_array_input($request, $data_card, $input_column, $where_column = null, $debug = false)
    {
        $input = is_array($request) ? $request : $request->input($input_column) ?? null;

        if ($input) {
            if (is_array($input)) {
                $data_card = $data_card->whereIn($where_column ?? $input_column, $input);
            } else {
                $data_card = $data_card->where($where_column ?? $input_column, $input);

            }
        }

        return $data_card;
    }

    /**
     * Получение данных для фильтров
     *
     * @param $table
     * @param $name
     * @param $joinColumn
     * @param null $joinColumn2
     * @return array
     */
    public function getFilterData($table, $name, $joinColumn, $joinColumn2 = null)
    {

        $query = DB::table($table)
            ->whereNotNull($table . '.alias')
            ->leftJoin('lots_item_copart', function ($join) use ($table, $joinColumn, $joinColumn2) {
                $join->on($table . '.id', '=', 'lots_item_copart.' . $joinColumn);
                if ($joinColumn2) {
                    $join->orOn($table . '.id', '=', 'lots_item_copart.' . $joinColumn2);
                }
            })
            ->select($table . '.alias', DB::raw('COUNT(lots_item_copart.vin) as count_of_cars'))
            ->groupBy($table . '.alias');

        $data = $query->orderBy('count_of_cars', 'desc')->get();
        $all_count = $data->sum('count_of_cars');

        return compact('name', 'data', 'all_count');
    }

    public function getBreadcrumbs($request)
    {
        $breadcrumbs = [];
        $temp_id = [];
        if ($request->has('model_id')) {

            $breadcrumbs['model'] = DB::table("lot_models")
                ->leftJoin("lot_makes", "lot_makes.id", "lot_models.make_id");
            $breadcrumbs['model'] = $this->is_array_input($request, $breadcrumbs['model'], 'model_id', 'lot_models.id');
            $breadcrumbs['model'] = $breadcrumbs['model']
                ->select("lot_models.id", "lot_makes.id as make_id", "lot_models.alias", "lot_makes.name as lot_makes_name")
                ->get();
            foreach ($breadcrumbs['model'] as $item) {
                $temp_id[$item->make_id] = $item->make_id;
            }
        }
        if ($request->has('make_id') || $request->has('model_id')) {
            $breadcrumbs['make'] = DB::table("lot_models");
            if (!$request->has('make_id')) {
                $temp_id[] = $request->make_id;
            } else if (is_array($request->input("make_id"))) {
                $temp_id = array_merge($request->make_id, $temp_id);
            } else {
                $temp_id[] = $request->make_id;
            }
            $breadcrumbs['make'] = $this->is_array_input($temp_id, $breadcrumbs['make'], 'make_id', 'id', true);
            $breadcrumbs['make'] = $breadcrumbs['make']
                ->get();
        }


        return $breadcrumbs;
    }
}
