<?php

namespace App\Http\Controllers;

use App\Models\LotsItemCopart;
use Illuminate\Http\Request;
use DB;

class CatalogController extends Controller
{
    /**
     * Метод для отображения каталога
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function catalog(Request $request)
    {
        $date_now = date("Y-m-d H:i:s"); // Получение текущей даты и времени
        $data_models = []; // Инициализация переменной для данных моделей
        $time_line = $this->getTimeLine(); // Получение временной линии

        // Получение данных для фильтров по состоянию, повреждению и топливу
        $list_filters = [
            'runs_drive' => $this->getFilterData('lot_runs_drive', 'conditions', 'runs_drive_id'),
            'damage' => $this->getFilterData('lot_damage', 'damage', 'damage_id', 'damage2_id'),
            'fuel' => $this->getFilterData('lot_fuel', 'fuel', 'fuel_id'),
        ];

        // Поиск автомобилей, учитывая фильтры
        $data_card = $this->findFilters($request);
        $breadcrumbs = $this->getBreadcrumbs($request); // Получение данных для хлебных крошек

        $page_active = $request->input("page") ?? 1; // Получение активной страницы
        $page_count = $data_card->lastPage(); // Получение общего количества страниц

        // Отображение представления каталога с данными
        return view("page.catalog", compact('breadcrumbs', 'date_now', 'data_models', 'list_filters', 'data_card', 'page_active', 'time_line', 'page_count'));
    }

    /**
     * Метод для фильтрации и обновления каталога
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function catalog_filter(Request $request)
    {
        $data_card = $this->findFilters($request); // Поиск автомобилей, учитывая фильтры
        $date_now = date("Y-m-d H:i:s"); // Получение текущей даты и времени
        return view('components.catalog.car_card_list', compact('data_card', 'date_now'))->render(); // Отображение обновленного списка автомобилей
    }

    /**
     * Получение временной линии
     *
     * @return array
     */
    private function getTimeLine()
    {
        return [
            "min" => LotsItemCopart::min("year"),
            "max" => LotsItemCopart::max("year")
        ];
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
    private function getFilterData($table, $name, $joinColumn, $joinColumn2 = null)
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

    /**
     * Поиск автомобилей, учитывая фильтры
     *
     * @param Request $request
     * @return mixed
     */
    private function findFilters(Request $request)
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
            $this->joinFilters($request, $data_card, 'conditions', 'runs_drive_id');
        }

        return $data_card->select('lots_item_copart.*')->paginate(12);
    }

    /**
     * Применение фильтров для данных
     *
     * @param Request $request
     * @param $data_card
     * @param $input_column
     * @param $where_column
     */
    private function joinFilters(Request $request, $data_card, $input_column, $where_column)
    {
        $input = is_array($request) ? $request : $request->input($input_column) ?? null;

        if ($input) {
            $data_card->join('lot_runs_drive as lr1', function ($join) use ($input, $where_column) {
                $join->on('lots_item_copart.' . $where_column, '=', 'lr1.id');
                if (is_array($input)) {
                    $join->whereIn('lr1.alias', $input);
                } else {
                    $join->where('lr1.alias', $input);
                }
            })->select('lots_item_copart.*');
        }
    }

    /**
     * Применение фильтра для данных в зависимости от типа ввода
     *
     * @param Request $request
     * @param $data_card
     * @param $input_column
     * @param null $where_column
     * @return mixed
     */
    private function is_array_input($request, $data_card, $input_column, $where_column = null)
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
     * Получение данных для хлебных крошек
     *
     * @param Request $request
     * @return array
     */
    private function getBreadcrumbs(Request $request)
    {
        $breadcrumbs = [];
        $temp_id = [];

        if ($request->has('model_id')) {
            $query = DB::table("lot_models")
                ->leftJoin("lot_makes", "lot_makes.id", "lot_models.make_id");

            $temp_id = $this->is_array_input($request, $temp_id, 'model_id', 'lot_models.id');

            $breadcrumbs['model'] = $query
                ->select("lot_models.id", "lot_makes.id as make_id", "lot_models.alias", "lot_makes.name as lot_makes_name")
                ->get();

            foreach ($breadcrumbs['model'] as $item) {
                $temp_id[$item->make_id] = $item->make_id;
            }
        }

        if ($request->has('make_id') || $request->has('model_id')) {
            $query = DB::table("lot_models");

            if (!$request->has('make_id')) {
                $temp_id[] = $request->make_id;
            } elseif (is_array($request->input("make_id"))) {
                $temp_id = array_merge($request->make_id, $temp_id);
            } else {
                $temp_id[] = $request->make_id;
            }

            $query = $this->is_array_input($temp_id, $query, 'make_id', 'id', true);

            $breadcrumbs['make'] = $query->get();
        }

        return $breadcrumbs;
    }
}
