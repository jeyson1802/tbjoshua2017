@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    <section id="banner">
        <div class="banner-item" style="background-image:url(images/hero-area/bg1.jpg)">
            <div class="container">
                <div class="banner-content text-center">
                    <div class="countdown classic-style">
                        <div class="counter-day">
                            <span class="days">00</span>
                            <div class="smalltext">Días</div>
                        </div>
                        <div class="counter-hour">
                            <span class="hours">00</span>
                            <div class="smalltext">Horas</div>
                        </div>
                        <div class="counter-minute">
                            <span class="minutes">00</span>
                            <div class="smalltext">Minutos</div>
                        </div>
                        <div class="counter-second">
                            <span class="seconds">00</span>
                            <div class="smalltext">Segundos</div>
                        </div>
                    </div><!-- Countdown end -->

                    <h1 class="banner-title">Conferencia de Pastores <br> profeta Tb. Joshua</h1>
                    <h2 class="banner-desc">Lima - Perú, 10-12 Diciembre, 2017</h2>
                    <p class="banner-btn">
                        <a href="#" class="btn btn-primary">Registrate Ahora</a>
                        <a href="{{ url('conferenciadepastorestbjoshuaperu') }}" class="btn btn-border">Leer Más</a>
                    </p>
                </div><!-- Banner content end -->
            </div><!-- Container end -->
        </div><!-- Banner item end -->
    </section><!-- Section banner end -->

    <section id="ts-intro" class="ts-intro">
        <div class="container">

            <div class="row text-center">
                <h2 class="section-title">About the Event</h2>
                <p class="section-sub-title">Design, Development, UX and Products</p>
            </div><!--/ Title row end -->

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="intro-video">
                        <img class="img-responsive" src="images/intro-video.jpg" alt="" />
                        <a class="popup" href="https://www.youtube.com/embed/XhveHKJWnOQ?autoplay=1&amp;loop=1">
                            <div class="video-icon">
                                <i class="fa fa-play"></i>
                            </div>
                        </a>
                    </div>
                </div><!-- Col end -->

                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="featured-tab">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a class="animated fadeIn" href="#tab_a" data-toggle="tab">
                                    Hands-on Experiences
                                </a>
                            </li>
                            <li>
                                <a class="animated fadeIn" href="#tab_b" data-toggle="tab">
							  		<span class="tab-head">
										<span class="tab-text-title">Networking</span>
									</span>
                                </a>
                            </li>
                            <li>
                                <a class="animated fadeIn" href="#tab_c" data-toggle="tab">
							  		<span class="tab-head">
										<span class="tab-text-title">Fun &amp; Foods</span>
									</span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active animated fadeInRight" id="tab_a">
                                <h3 class="tab-content-title">Workshops - Project Sessions - Industry Leaders</h3>
                                <p class="sppb-cta-text">	We are rethoric question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.
                                </p>
                                <blockquote>Throw myself down teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees. Anna has collated all their findings for this talk on the different kinds.</blockquote>
                                <p>Few stray gleams steal into the inner sanctuary grow familiar with the countless indescribable forms, then I feel the presence of the Almighty.</p>
                            </div><!-- Tab pane 1 end -->

                            <div class="tab-pane animated fadeInRight" id="tab_b">
                                <h3 class="tab-content-title">Meet the Right People</h3>
                                <p>A great opportunity to network with your peers from the web industry. Throw myself down teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees. Anna has collated all their findings for this talk on the different kinds.
                                </p>
                                <ul class="list-arrow">
                                    <li>Maecenas nibh dolor</li>
                                    <li>Aliquettiabser libero</li>
                                    <li>Consectetur ut vestibulum</li>
                                    <li>Skateboard dolor brunch</li>
                                </ul>
                            </div><!-- Tab pane 2 end -->

                            <div class="tab-pane animated fadeInRight" id="tab_c">
                                <h3 class="tab-content-title">After Party, Fun and Food is Unlimited</h3>
                                <p>Aenean et dolor pretium, feugiat leom nongial, aliquettiabser libero. Consectetur ut vestibulum vivamus. Throw myself down teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees. Anna has collated all their findings for this talk on the different kinds.</p>
                                <ul class="list-arrow">
                                    <li>Maecenas nibh dolor</li>
                                    <li>Aliquettiabser libero</li>
                                    <li>Consectetur ut vestibulum</li>
                                    <li>Skateboard dolor brunch</li>
                                </ul>
                            </div><!-- Tab pane 3 end -->
                        </div><!-- tab content -->
                    </div><!-- Featured tab end -->
                </div><!-- Col end -->

            </div><!-- Content Row end -->
        </div><!-- Container end -->
    </section><!-- Intro area end -->
@endsection

@push('scripts')

    <!-- Counter -->
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
    <!-- Countdown -->
    <script type="text/javascript" src="js/jquery.jCounter.js"></script>

    <!-- Google Map -->
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
    <!-- Doc https://developers.google.com/maps/documentation/javascript/get-api-key -->
    <!-- For latitude and longitude use http://www.latlong.net/ -->

    <script type="text/javascript" src="js/gmap3.min.js"></script>

    <script type="text/javascript">

        /* Event counter */

        $(".countdown").jCounter({
            date: '10 December 2017 12:00:00',
            fallback: function() { console.log("count finished!") }
        });


        /* Event map */

        var eventmap = {lat: 40.742964, lng: -73.992277};

        $('.map')
            .gmap3({
                zoom: 13,
                center: eventmap,
                mapTypeId : google.maps.MapTypeId.ROADMAP,
                scrollwheel: false
            })

            .marker({
                position: eventmap
            })

            .infowindow({
                position: eventmap,
                content: "NYC Seminar and Conference Center, New York"
            })

            .then(function (infowindow) {
                var map = this.get(0);
                var marker = this.get(1);
                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
            });


    </script>
@endpush