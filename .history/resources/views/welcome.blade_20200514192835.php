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
            <div class="right-block">
                <img src="{{asset('/img/cakebanner.jpg')}}" alt="">
                <div class="text-banner">
                    <h1>Cook Your</h1>
                    <h1>Self</h1>
                </div>
            </div>
            <div class="info">
                <div class="text">
                    <h1 style="text-align: center">Welcome!</h1>
                    <p style="margin-left:20px;">Lorem ipsum dolor sit amet, consectetur adipisicing <br>
                    error deleniti, expedita quos facere modi odi <br>
                    esse perspiciatis enim loe wem leo da we kunga<br>
                    ,architecto illo ipsam quisquam maiores totam </p>
                </div>
            </div>
        </div>
        <br style="clear: both">
        <section>
            <div>
                <div class="recipe">
                    <img src="" alt="">
                </div>
                <div class="recipe">
                    <img src="" alt="">
                </div>
                <div class="recipe">
                    <img src="" alt="">
                </div>
                <div class="recipe">
                    <img src="" alt="">
                </div>
            </div>
        </section>
        @endsection
    </body>
</html>
