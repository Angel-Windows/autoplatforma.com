<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PageController extends Controller
{
   public function index(){
       $users = DB::table('lots_item_copart')->get();
//       dd($users);
       return view("page.index");
   } public function home(){
       return view("page.home");
   }
   public function catalog(){
       return view("page.catalog");
   }
   public function blog(){
       return view("page.blog");
   }
   public function auto_pop(){
       return view("page.auto_pop");
   }
}
