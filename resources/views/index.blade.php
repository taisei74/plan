@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
    <body>
    <div>
        <h1>検索条件を入力してください</h1>
        <form action='/serch' method="POST">
        @csrf
        @method('GET')
        <label for="title">予算</label>
     <input type='serch' class="form-control" name='money'>
         
         <input type="submit" value="送信"/>
         </form>
         <h2><a href='/serch/create'>登録画面</a></h2>
       
     
    </div>
    </body>
@endsection
