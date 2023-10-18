<?php

namespace App\Http\Controllers;

use App\Models\LotDamage;
use App\Models\LotFuel;
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
        $all_conditions = LotRunsDrive::all();
        $all_damage = LotDamage::all();
        $all_fuel_type = LotFuel::all();
        $time_line = [
            "min" => LotsItemCopart::orderBy("year", 'asc')->first()->year,
            "max" => LotsItemCopart::orderBy("year", 'desc')->first()->year
        ];
        $sort_type = $request->input("sort") ?? 0;
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
        $models = LotModels::where("make_id", 6)->get();
        $test_models = [];
        foreach ($models as $item) {
            $test_models[$item->alias_slug] = $item;
        }
//        dd($test_models);
        $data_card = LotsItemCopart::orderBy($sort['table'], $sort['sort_by'])->paginate(12);
        $page_active = $request->input("page") ?? 1;
        $page_count = $data_card->lastPage();

        return view("page.catalog")
            ->with("data_card", $data_card)
            ->with("page_active", $page_active)
            ->with("all_conditions", $all_conditions)
            ->with("all_damage", $all_damage)
            ->with("all_fuel_type", $all_fuel_type)
            ->with("time_line", $time_line)
            ->with("page_count", $page_count);
    }

    public function blog()
    {
        return view("page.blog");
    }

    public function auto_pop()
    {
        return view("page.auto_pop");
    }
}
