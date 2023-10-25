<?php

namespace App\Http\Controllers;

use App\Models\Attachments;
use App\Models\LotMakes;
use App\Models\LotModels;
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
        $date_now = date("Y-m-d H:i:s");
        return view("page.auto_pop")
            ->with("date_now", $date_now)
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
