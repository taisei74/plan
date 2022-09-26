<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function serch(Request $request)
    {
        $keyword_money = $request->money;
        
        
         if($keyword_money) {
             $query = Shop::query();
             $total = $query->where('money','<=', $keyword_money);
             $shops = ($total)->get() ;
             $message = $keyword_money."円以下の検索が完了しました。";
             return view('/serch')->with([
                 'shops' => $shops,
                 'message' => $message,
                 ]);
         }

         else {
             $message = "検索結果はありません。";
             return view('/serch')->with(['message' => $message]);
         }
    }
}