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
            <div style="margin-top: 100px; width:100%;">
                <div class="recipe">
                    <img src="https://cdn.apartmenttherapy.info/image/upload/f_auto,q_auto:eco,c_fit,w_1060,h_1590/k%2Farchive%2F3f608f71b00084e58762bacef5d7c012b205677c" alt="">
                    <h3>Shaky</h3>
                    <p style="font-size: 12px;">Lorem ipsum dolor sitff fdseeed <br>
                       amet consectetur adipis etur adipis <br>
                       icing elit. Exercitation etur adipis <br>
                       em expedita repellat culrepellat c <br>
                       sit laboriosam exceptrepellat c <br>
                       uri libero necessitatibus sertawe</p>
                </div>
                <div class="recipe">
                    <img src="https://s3-eu-west-1.amazonaws.com/www.przepisy.pl/przepisy3ii/img/variants/1070x0/69591-2.jpg" alt="">
                    <h3>Shaky</h3>
                    <p style="font-size: 12px;">Lorem ipsum dolor sitff fdseeed <br>
                        amet consectetur adipis etur adipis <br>
                        icing elit. Exercitation etur adipis <br>
                        em expedita repellat culrepellat c <br>
                        sit laboriosam exceptrepellat c <br>
                        uri libero necessitatibus sertawe</p>
                </div>
                <div class="recipe">
                    <img src="https://polki.pl/foto/4_3_LARGE/potrawy-wielkanocne-20-pomyslow-wyjatkowy-na-wielkanocny-obiad-2452334.jpg" alt="">
                    <h3>Shaky</h3>
                    <p style="font-size: 12px;">Lorem ipsum dolor sitff fdseeed <br>
                        amet consectetur adipis etur adipis <br>
                        icing elit. Exercitation etur adipis <br>
                        em expedita repellat culrepellat c <br>
                        sit laboriosam exceptrepellat c <br>
                        uri libero necessitatibus sertawe</p>
                </div>
                <div class="recipe">
                    <img src="https://d-art.ppstatic.pl/kadry/k/r/1/b8/c2/5de4c985786e3_o_large.jpg" alt="">
                    <h3>Shaky</h3>
                    <p style="font-size: 12px;">Lorem ipsum dolor sitff fdseeed <br>
                        amet consectetur adipis etur adipis <br>
                        icing elit. Exercitation etur adipis <br>
                        em expedita repellat culrepellat c <br>
                        sit laboriosam exceptrepellat c <br>
                        uri libero necessitatibus sertawe</p>
                </div>
            </div>
        </section>
        @endsection
    </body>
</html>
