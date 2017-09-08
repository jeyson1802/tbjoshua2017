@extends('layouts.app')

@section('title', 'Home')

@section('class-header', 'page-header')

@section('slider')
    <div data-autoplay="5000" data-slide-effect="fade" data-loop="false" class="swiper-container swiper-slider">
        <div class="swiper-wrapper">
            <div data-slide-bg="images/profeta-1.jpg" class="swiper-slide">
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