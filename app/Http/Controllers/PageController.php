<?php

namespace App\Http\Controllers;

use App\Models\Attachments;
use App\Models\LotDamage;
use App\Models\LotFuel;
use App\Models\LotMakes;
use App\Models\LotModels;
use App\Models\LotRunsDrive;
use App\Models\LotsItemCopart;
use Illuminate\Http\Request;
use DB;

class PageController extends Controller
{

    public function index()
    {
        return view("page.index");
    }

    public function home()
    {
        $data_card = LotsItemCopart::limit(12)
            ->get();

        return view("page.home")
            ->with("data_card", $data_card);
    }

    public function catalog(Request $request)
    {

        $date_now = date("Y-m-d H:i:s");
        $runs_drive_id_list = LotsItemCopart::select('runs_drive_id')->distinct()->get();
        $damage_id_list = LotsItemCopart::select('damage_id', 'damage2_id')->distinct('damage_id', 'damage2_id')->get();
        $fuel_id_list = LotsItemCopart::select('fuel_id')->distinct('fuel_id')->get();

        $data_models_db = DB::table("lot_models")->leftJoin("lot_makes", "lot_makes.id", "lot_models.make_id")
            ->select("lot_models.name", "lot_makes.name as lot_makes_name")
            ->get();
        $data_models = [];
        foreach ($data_models_db as $item) {
            $data_models[$item->lot_makes_name][] = $item->name;
        }

        $all_damage = LotDamage::all();
        $all_fuel_type = LotFuel::all();
        $time_line = [
            "min" => LotsItemCopart::orderBy("year", 'asc')->first()->year,
            "max" => LotsItemCopart::orderBy("year", 'desc')->first()->year
        ];

        $list_filters_id = [];
        foreach ($damage_id_list as $item) {
            $list_filters_id['damage'][] = $item->damage_id;
            $list_filters_id['damage'][] = $item->damage2_id;
        }
        foreach ($fuel_id_list as $item) {
            $list_filters_id['fuel'][] = $item->fuel_id;
        }
        foreach ($runs_drive_id_list as $item) {
            $list_filters_id['runs_drive'][] = $item->runs_drive_id;
        }


        $list_filters = [];
        $list_filters["damage"] = LotDamage::whereIn("id", $list_filters_id['damage'])->select("name", 'id')->get();
        $list_filters["fuel"] = LotFuel::whereIn("id", $list_filters_id['fuel'])->select("name", 'id')->get();
        $list_filters["runs_drive"] = LotRunsDrive::whereIn("id", $list_filters_id['runs_drive'])->select("name", 'id')->get();

        $lotDrive = LotRunsDrive::all();
        foreach ($lotDrive as $item) {
            $data_filter[] = $item->id;
        }

        $data_card = $this->find_filters($request);

        $breadcrumbs = null;

        if ($request->has('model_id')) {
            $breadcrumbs = LotModels::
                leftJoin("lot_makes", "lot_makes.id", "lot_models.make_id");
            $breadcrumbs = $this->is_array_input($request, $breadcrumbs, 'model_id', 'lot_models.id');
            $breadcrumbs = $breadcrumbs
                ->select("lot_models.*", 'lot_makes.name as make_name')
                ->limit(10)
                ->get();

        }
//        dd($breadcrumbs);
        $page_active = $request->input("page") ?? 1;
        $page_count = $data_card->lastPage();

        return view("page.catalog")
            ->with("breadcrumbs", $breadcrumbs)
            ->with("date_now", $date_now)
            ->with("data_models", $data_models)
            ->with("list_filters", $list_filters)
            ->with("data_card", $data_card)
            ->with("page_active", $page_active)
            ->with("all_damage", $all_damage)
            ->with("all_fuel_type", $all_fuel_type)
            ->with("time_line", $time_line)
            ->with("runs_drive_id_list", $runs_drive_id_list)
            ->with("page_count", $page_count);
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

    private function is_array_input($request, $data_card, $input_column, $where_column = null)
    {
        $input = $request->input($input_column) ?? null;
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

//        $sort = $this->sort_result($request->input("sort"));
        $data_card = LotsItemCopart::orderBy('id');

        if ($request->has('max-year')) {
            $data_card = $data_card->where('year', "<", $request->input('max-year'));
        }
        if ($request->has('min-year')) {
            $data_card = $data_card->where('year', ">", $request->input('min-year'));
        }
        if ($request->has('runs_drive_id')) {
            $data_card = $data_card->whereIn('runs_drive_id', $request->input('runs_drive_id'));
        }
        if ($request->has('damage_id')) {
            $data_card = $data_card->whereIn('damage_id', $request->input('damage_id'));
        }
        if ($request->has('fuel_id')) {
            $data_card = $data_card->whereIn('fuel_id', $request->input('fuel_id'));
        }
        if ($request->has('make_id')) {
//            if (!is_array($request->input('make_id'))) {
//                $data_make = [$request->input('make_id')];
//            } else {
//                $data_make = $request->input('make_id');
//
//            }
//            $data_card = $data_card->whereIn('make_id', $data_make);
            $data_card = $this->is_array_input($request, $data_card, 'make_id');
        }
        if ($request->has('model_id')) {
            $data_card = $this->is_array_input($request, $data_card, 'model_id');
        }

        return $data_card->paginate(12);
    }

    public function blog()
    {
        return view("page.blog");
    }

    public function auto_pop(Request $request)
    {

        $car_id = $request->input("car_id") ?? 22;
        $car = LotsItemCopart::where('id', $car_id)->first();

        $price_buys = LotsItemCopart::where('model_id', $car->model_id)
            ->whereNotNull('final_bid')
            ->orderBy('date_sale')
            ->select("final_bid")
            ->get();
        $price_buys_last = $price_buys[0]->final_bid ?? 0;
        $price_buys_average = 0;
        foreach ($price_buys as $item) {
            $price_buys_average += $item->final_bid;
        }
        $price_buys_average = $price_buys_average / (count($price_buys) ? count($price_buys) : 1);
        $car_price_res = [
            'price_buys_last' => $price_buys_last,
            'price_buys_average' => $price_buys_average,
        ];
        $data_detailed_information = [
            'Lot number' => $car->lot_id ?? "",
            'vin' => $car->vin ?? "",
            'Date update' => date("m.d.Y", strtotime($car->updated_at)) ?? "",
            'Status' => 0,
            'Transmission' => $car->transsmision->name,
            'Keys Present' => 0,
            'Color' => $car->color->name ?? "",
            'Drive' => $car->drive->name ?? "",
            'Fuel' => $car->fuel->name ?? "",
            'Sale type' => $car->saleStatus->name ?? "",
            'Documents' => $car->title_state,
            'Cylinders' => 0,
            'Grid/Row' => 0,
            'Retail price' => ($car->price_repair ?? 0) . " $",
        ];
        $data_detailed_information_one = [];
        $data_detailed_information_two = [];
        $count_index = 0;
        foreach ($data_detailed_information as $key => $item) {
            if (count($data_detailed_information) / 2 > $count_index) {
                $data_detailed_information_one[$key] = $item;
            } else {
                $data_detailed_information_two[$key] = $item;
            }
            $count_index++;
        }

        $auto_info = [
            'Condition' => [
                'text' => $car->runDrive->name ?? "",
                'type' => 1
            ],
            'Mileage' => [
                'text' => $car->odometer . " km",
                'type' => ($car->odometer ?? 0) > 100000 ? 2 : 1,
            ],
            'Primary Damage' => [
                'text' => $car->damage->name ?? "",
                'type' => 0
            ],
            'Secondary Damage' => [
                'text' => $car->damage2->name ?? "",
                'type' => 0
            ],
        ];
        $time_buy = "11 Sep, 2023 / 16:00 CET";
        $auction_name_id = 1;
        $photo_slider = Attachments::limit(10)->get();
        $data_recommended_cars = [];
        $recommended_cars = LotsItemCopart::orderBy("created_at")
            ->where("model_id", $car->model_id)
            ->where("make_id", $car->make_id)
            ->where("year", $car->year)
            ->where('id', "!=", $car->id)
            ->limit(4)->get();
        foreach ($recommended_cars as $item) {
            $data_recommended_cars[] = $item;
        }
        if (count($data_recommended_cars) < 4) {
            $recommended_cars = LotsItemCopart::orderBy("created_at")
                ->where("model_id", $car->model_id)
                ->where("make_id", $car->make_id)
                ->where('id', "!=", $car->id)
                ->limit(4 - count($data_recommended_cars))->get();
            foreach ($recommended_cars as $item) {
                $data_recommended_cars[] = $item;
            }
        }

        if (count($data_recommended_cars) < 4) {
            $recommended_cars = LotsItemCopart::orderBy("created_at")
                ->where("model_id", $car->model_id)
                ->where('id', "!=", $car->id)
                ->limit(4 - count($data_recommended_cars))->get();
            foreach ($recommended_cars as $item) {
                $data_recommended_cars[] = $item;
            }

        }
        if (count($data_recommended_cars) < 4) {
            $recommended_cars = LotsItemCopart::orderBy("created_at")
                ->where('id', "!=", $car->id)
                ->limit(4 - count($data_recommended_cars))->get();
            foreach ($recommended_cars as $item) {
                $data_recommended_cars[] = $item;
            }
        }

        return view("page.auto_pop")
            ->with('car', $car)
            ->with('data_detailed_information_one', $data_detailed_information_one)
            ->with('data_detailed_information_two', $data_detailed_information_two)
            ->with('time_buy', $time_buy)
            ->with('auction_name_id', $auction_name_id)
            ->with('photo_slider', $photo_slider)
            ->with('recommended_cars', $data_recommended_cars)
            ->with('car_price_res', $car_price_res)
            ->with('price_buys_average', $price_buys_average)
            ->with('price_buys_last', $price_buys_last)
            ->with('auto_info', $auto_info);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $results['makes'] = [
            'row_name' => "make_id",
            'result_row' => "name",
            'data' => LotMakes::where('name', 'like', '%' . $query . '%')->get()
        ];
        $results['vin'] = [
            'row_name' => "vin",
            'result_row' => "vin",
            'data' => LotsItemCopart::where('vin', 'like', '%' . $query . '%')->get()
        ];
        $results['models'] = [
            'row_name' => "make_id",

            'result_row' => "name",
            'data' => LotModels::where('name', 'like', '%' . $query . '%')->get()
        ];

        return view('search.results', compact('results'));
    }

    public function test(Request $request)
    {
        $data_models_db = DB::table("lot_models")->leftJoin("lot_makes", "lot_makes.id", "lot_models.make_id")
            ->select("lot_models.name", "lot_makes.name as lot_makes_name")
            ->get();
        $data_models = [];
        foreach ($data_models_db as $item) {
            $data_models[$item->lot_makes_name][] = $item->name;
        }

        return view("page.test")
            ->with("data_models", $data_models);

    }
}
