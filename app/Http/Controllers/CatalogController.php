<?php

namespace App\Http\Controllers;

use App\Models\LotsItemCopart;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalog_filter(Request $request)
    {
//        return json_encode($request->input());
        $data_card = $this->find_filters($request);
        $date_now = date("Y-m-d H:i:s");
        return view('components.catalog.car_card_list')
            ->with('data_card', $data_card)
            ->with('date_now', $date_now)
            ->render();
    }
    private function sort_result($request){
        $sort_type = $request ?? 1;
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
    private function find_filters($request){

//        $sort = $this->sort_result($request->input("sort"));
        $data_card = LotsItemCopart::orderBy('id');

        if ($request->has('max-year')) {
            $data_card = $data_card->where('year',"<", $request->input('max-year'));
        }
        if ($request->has('min-year')) {
            $data_card = $data_card->where('year',">", $request->input('min-year'));
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
        return $data_card->paginate(12);
    }
}
