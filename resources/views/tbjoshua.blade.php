@extends('layouts.app')

@section('title', 'TB Joshua')

@section('class-header', 'subpage_header')

@section('slider')
    <div data-autoplay="5000" data-slide-effect="fade" data-loop="false" class="swiper-container swiper-slider">
        <div class="swiper-wrapper">
            <div data-slide-bg="images/header-1.jpg" class="swiper-slide">
                <div class="swiper-slide-caption"></div>
            </div>
            <div data-slide-bg="images/header-3.jpg" class="swiper-slide">
                <div class="swiper-slide-caption"></div>
            </div>
            <div data-slide-bg="images/header-4.jpg" class="swiper-slide">
                <div class="swiper-slide-caption"></div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="text-center text-md-left well well-sm">
        <div class="container">
            <article class="team-member row flow-offset-1">
                <div class="col-sm-12 col-md-6 pull-md-right"><img src="images/tbjoshua-3.png" alt="" class="img-rounded"></div>
                <div class="col-sm-12 col-md-6">
                    <h1>TB Joshua</h1>
                    <p class="small text-light-clr text-uppercase">Profeta</p>
                    <p>
                        T.B. Joshua es el Supervisor General de La Sinagoga, Iglesia De Todas Las Naciones (SCOAN). ¡El fundador es Jesucristo! Él es sólo uno de los que se han sometido humildemente a la voluntad de Dios (Isaías 6:8).
                    <br><br>
                        Nacido el 12 de junio de 1963 en el Estado de Ondo, Nigeria, el viaje de TB Joshua es una humilde historia acerca de cómo Dios levantó a un joven de un hogar pobre para dirigir un ministerio internacional que atrae a miles de personas de todo el mundo para presenciar la realidad del poder de Dios.
                    <br><br>
                        De abandonar la escuela secundaria en su primer año hasta llegar a trabajar en una granja de aves de corral; de enseñarle a niños pequeños mientras asistía a clases nocturnas hasta lavar los pies de la gente en las calles lodosas de Lagos; de ayunar cuarenta días para recibir un llamado divino y empezar un ministerio con sólo ocho miembros, la vida de T.B. Joshua es una historia de una asombrosa gracia y un enfoque inquebrantable. Hoy, él es el mentor de presidentes, amigo de las viudas y los menos privilegiados, un ejemplo para su generación como también un hombre humilde y trabajador, esforzándose incansablemente por el avance del Reino de Dios. Su historia es una motivación de que hay esperanza para-el debíl.

                    </p>
                    <ul class="list-inline list-inline-3">
                        <li><a href="#" class="fa-facebook-square"></a></li>
                        <li><a href="#" class="fa-twitter-square"></a></li>
                        <li><a href="#" class="fa-google-plus-square"></a></li>
                    </ul>
                </div>
            </article>
        </div>
    </section>
@endsection