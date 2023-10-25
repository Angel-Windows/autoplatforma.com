<?php

namespace App\Http\Controllers;

use App\Models\LotsItemCopart;
use Illuminate\Http\Request;
use DB;

class CatalogController extends Controller
{
    public function catalog(Request $request)
    {
        $breadcrumbs = null;
        $date_now = date("Y-m-d H:i:s");
        $data_models = [];
        // year scroll_bar
        $time_line = [
            "min" => LotsItemCopart::orderBy("year", 'asc')->first()->year,
            "max" => LotsItemCopart::orderBy("year", 'desc')->first()->year
        ];

        $list_filters["runs_drive"] = [
            'name' => "conditions",
            'data' => DB::table('lot_runs_drive')
                ->whereNotNull('lot_runs_drive.alias')
                ->leftJoin('lots_item_copart', 'lot_runs_drive.id', '=', 'lots_item_copart.runs_drive_id')
                ->select('lot_runs_drive.alias', DB::raw('COUNT(lots_item_copart.id) as count_of_cars'))
                ->groupBy('lot_runs_drive.alias')
                ->get(),
            'all_count' => 0
        ];
        foreach ($list_filters['runs_drive']['data'] as $item) {
            $list_filters["runs_drive"]['all_count'] += $item->count_of_cars;

        }
        $list_filters["damage"] = [
            'name' => "damage",
            'data' => DB::table('lot_damage')
                ->whereNotNull('lot_damage.alias')
                ->leftJoin('lots_item_copart', function ($join) {
                    $join->on('lot_damage.id', '=', 'lots_item_copart.damage_id')
                        ->orOn('lot_damage.id', '=', 'lots_item_copart.damage2_id');
                })
                ->select('lot_damage.alias', DB::raw('COUNT(lots_item_copart.vin) as count_of_cars'))
                ->groupBy('lot_damage.alias')
                ->orderBy('count_of_cars', 'desc')
                ->get(),
            'all_count' => 0

        ];
        foreach ($list_filters['damage']['data'] as $item) {
            $list_filters["damage"]['all_count'] += $item->count_of_cars;

        }
        $list_filters["fuel"] = [
            'name' => "fuel",
            'data' => DB::table('lot_fuel')
                ->leftJoin('lots_item_copart', 'lot_fuel.id', '=', 'lots_item_copart.fuel_id')
                ->select('lot_fuel.alias', DB::raw('COUNT(lots_item_copart.vin) as count_of_cars'))
                ->groupBy('lot_fuel.alias')
                ->orderBy('count_of_cars', 'desc')
                ->get(),
            'all_count' => 0
        ];
        foreach ($list_filters['fuel']['data'] as $item) {
            $list_filters["fuel"]['all_count'] += $item->count_of_cars;

        }
        $data_card = $this->find_filters($request);

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
        $page_active = $request->input("page") ?? 1;
        $page_count = $data_card->lastPage();
        return view("page.catalog")
            ->with("breadcrumbs", $breadcrumbs)
            ->with("date_now", $date_now)
            ->with("data_models", $data_models)
            ->with("list_filters", $list_filters)
            ->with("data_card", $data_card)
            ->with("page_active", $page_active)
            ->with("time_line", $time_line)
            ->with("page_count", $page_count);
    }

    public function catalog_filter(Request $request)
    {
        $data_card = $this->find_filters($request);
        $date_now = date("Y-m-d H:i:s");
        return view('components.catalog.car_card_list')
            ->with('data_card', $data_card)
            ->with('date_now', $date_now)
            ->render();
    }

    private function sort_result($request)
    {
        $sort_type = $request ?? 0;
        $sort = [
            "table" => "id",
            "sort_by" => 'ASC'
        ];

        switch ($sort_type) {
            case 1:
                $sort["table"] = "year";
                break;
            case 2:
                $sort["table"] = "price_bid";
                break;
            case 3:
                $sort["table"] = "price_bid";
                $sort["sort_by"] = "desc";
                break;
        }
        return $sort;
    }

    private function is_array_input($request, $data_card, $input_column, $where_column = null, $debug = false)
    {
        if (is_array($request)) {
            $input = $request;
        } else {
            $input = $request->input($input_column) ?? null;
        }


        if ($input) {
            if (is_array($input)) {
                return $data_card->whereIn($where_column ?? $input_column, $input);
            } else {
                return $data_card->where($where_column ?? $input_column, $input);
            }
        } else {
            return $data_card;
        }
    }

    private function find_filters($request)
    {
        $data_card = LotsItemCopart::orderBy('id');

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
            $this->join_filters($request, $data_card, 'conditions', "runs_drive_id", true);
        }
        return $data_card->select('lots_item_copart.*')->paginate(12);
    }

    private function join_filters($request, $data_card, $input_column, $where_column = null, $debug = false)
    {
        if (is_array($request)) {
            $input = $request;
        } else {
            $input = $request->input($input_column) ?? null;
        }
        if ($input)
            return $data_card
                ->join('lot_runs_drive as lr1', function ($join) use ($input, $where_column) {
                    $join->on('lots_item_copart.' . $where_column, '=', 'lr1.id');
                    if (is_array($input))
                        $join->whereIn('lr1.alias', $input);
                    else
                        $join->where('lr1.alias', $input);
                })
                ->select('lots_item_copart.*');
        else
            return $data_card;

    }
}
