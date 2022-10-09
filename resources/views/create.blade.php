@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
    <body>
    <div>
        <h1>登録画面</h1>
        <form action='/serch/create' method='POSt'>
            @csrf
         
        <div>
        <label>建物登録</label>
        <input type='text' name='shop[name]' placeholer="例:錦糸公園"/>
        </div>
        <div>
        <label>金額登録</label>
        <input type="text" name="shop[money]" placeholer="例:2000円"/>
        </div>
        <div>
        <label>時間登録</label>
        <input type="text" name="shop[time]" placeholer="例: 60分"/>
        </div>
        <button type='submit'>送信</button>
        </form>
    </div>
    </body>
@endsection
