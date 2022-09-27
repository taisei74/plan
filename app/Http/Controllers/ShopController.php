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
        
        $integer = intval($keyword_money);
        $check = 0;
        
        while( $check == 0) {
        
         if($keyword_money) {
             $query = Shop::query();
             $shops = $query->where('money','<=', $keyword_money)->get();
             if($shops->count() >= 3) {
                 $shops = $shops->random(3);
             }else{
                 $shops = null;
             }
            
           
            
            $sho = ($shops)->toArray();
            $shops_total = array_sum(array_column($sho, 'money'));
         
              if( $shops_total <= $integer){
                  $check = 1;
                 
              }else{
                  $check = 0;
              }
            
             dump($check);
             
             $message = $keyword_money."円以下の検索が完了しました。";
             return view('/serch')->with([
                 'shops' => $shops,
                 'total' => $shops_total,
                 'message' => $message,
                 ]);
         }

        //  else {
        //      $message = "検索結果はありません。";
        //      return view('/serch')->with(['message' => $message]);
        //  }
    }
}
}