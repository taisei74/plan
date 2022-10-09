@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
    <body>
    <div>
     <div style="margin-top:50px;">
        <h1>検索結果</h1>
        @if(isset($shops))
        <table class="table">
          <tr>
            <th>店名</th><th>金額</th><th>時間</th>
          </tr>
          @foreach($shops as $shop)
            <tr>
              <td>{{$shop->name}}</td><td>{{$shop->money}}円</td>
            </tr>
          @endforeach
          <h1>合計{{ $total }}円です</h1>
        @endif
        @if(!empty($message))
        <div class="alert alert-primary" role="alert">{{ $message}}</div>
        @endif
        </div>
      <h4>[<a href='/'>ホームに戻る</a>]</h4>
    </body>
@endsection