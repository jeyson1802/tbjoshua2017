@extends('layouts.app')

@section('title', 'Home')

@section('class-header', 'page-header')

@section('slider')
    <div data-autoplay="5000" data-slide-effect="fade" data-loop="false" class="swiper-container swiper-slider">
        <div class="jumbotron text-center">
            <h1><small>With 120 Carts In 12 Categories</small>You Can Create Landing Pages</h1>
            <p class="big">We create quality products <br> tailored to your needs and requirements.</p><div class='btn-group-variant'> <a class='btn btn-default round-xl btn-sm' href='#'>Buy A Theme</a> <a class='btn btn-default round-xl btn-sm' href='#'>View Features</a></div>
        </div>
        <div class="swiper-wrapper">
            <div data-slide-bg="images/header-4.jpg" class="swiper-slide">n
                <div class="swiper-slide-caption"></div>
            </div>
            <div data-slide-bg="images/header-5.jpg" class="swiper-slide">
                <div class="swiper-slide-caption"></div>
            </div>
            <div data-slide-bg="images/header-3.jpg" class="swiper-slide">
                <div class="swiper-slide-caption"></div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="text-center well well-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <h1 class="text-bold">Creative Multiuse   Theme</h1>
                </div>
            </div>
        </div>
    </section>
@endsection