<!doctype html>
{{-- <html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <title>Welcome to NaWa's Portofolio</title>
        <!-- Styles -->
    </head> --}}
@extends('layout.base')

@section('content')
        {{$title}}
        <div class="position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="home-container">
                <div class="title m-b-md">
                    <img class="homeLogo" src="{{URL::asset('img/nawa.png')}}" draggable="false">
                </div>

                <div class="links">
                    <a href="home">Home</a>
                    <a href="">Projects</a>
                    <a href="">About me</a>
                    <a href="">Contact</a>
                </div>
            </div>
            </div>

            <div class="home-info-container">
                <div class="top-image">
                    <img class="homeBanner noselect" src="{{URL::asset('img/homebanner.jpg')}} " draggable="false">
                    <p class="infotitle noselect">What do I do?</p>
                    <p class="infotext noselect">I'm currently a senior student at ROC TERAA in The Netherlands. I'm studying Application and Media-development. 
                    I plan on studying graphics design because I've decided my will to design goes further than web-development.
                    
                    </p>
                </div>
            </div>
        </div>
@endsection