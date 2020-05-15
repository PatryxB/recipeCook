<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>
        @extends('layouts.app')
        @section('content')

        <div class="banner">
            <img src="{{asset('/img/cakebanner.jpg')}}" alt="">
            <div class="info">
                <div>
                    <h1>Welcome!</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia <br>
                    error deleniti, expedita quos facere modi odio corporis accusamus quo <br>
                    esse perspiciatis enim loe wem leo da we kunga roleum cessa oqo <br>
                    ,architecto illo ipsam quisquam maiores totam unde accusantium?</p>
                </div>
            </div>
        </div>

        @endsection
    </body>
</html>
