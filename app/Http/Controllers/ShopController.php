<?php

namespace App\Http\Controllers;

use App\Shop;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
       $shops = DB::table('shops')->inRandomOrder()->take(2)->get();
       
        return view('index')->with(['shops'=>$shops]);
    }
}
