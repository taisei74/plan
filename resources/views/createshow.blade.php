@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
    <body>
    <div>
    <h1>登録詳細</h1>
    登録：施設
    <h2>{{ $shop->name }}</h2>
    登録：金額
    <h2>{{ $shop->money }}</h2>
    登録：時間
    <h2>{{ $shop->time }}</h2>
    </div>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
    </body>
@endsection
