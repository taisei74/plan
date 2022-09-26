<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

       
    </head>
    <body>
    <div>
        <h1>検索条件を入力してください</h1>
        <form action='/serch' method="POST">
        @csrf
        @method('GET')
        <label for="title">予算</label>
        <input type='serch' class="form-control" name='money'>
         
         <button type="submit" class="btn btn-primary col-md-5">検索</button>
         </form>
     
    </div>
    </body>
</html>
