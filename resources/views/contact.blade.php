@extends('layouts.app')

@section('title', 'Contacto')

@section('content')

    <div id="page-banner-area" class="page-banner-area" style="background-image:url(images/banner/banner1.jpg)">
        <!-- Subpage title start -->
        <div class="page-banner-title">
            <div class="text-center">
                <h2>Contact</h2>
            </div>
        </div><!-- Subpage title end -->
    </div><!-- Banner end -->

    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                    <div class="sidebar sidebar-left">
                        <div class="widget contact-info">
                            <div class="contact-info-box">
                                <i class="fa fa-map-marker">&nbsp;</i>
                                <div class="contact-info-box-content">
                                    <h4>Office Address: </h4>
                                    <p>Eventime HQ, 1638 North Street Charlottesville, NY 22903</p>
                                </div>
                            </div>

                            <div class="contact-info-box">
                                <i class="fa fa-envelope-o">&nbsp;</i>
                                <div class="contact-info-box-content">
                                    <h4>Email Address: </h4>
                                    <p>example@example.com</p>
                                </div>
                            </div>

                            <div class="contact-info-box">
                                <i class="fa fa-phone">&nbsp;</i>
                                <div class="contact-info-box-content">
                                    <h4>Phone Number: </h4>
                                    <p>+1(0231) 3421 453</p>
                                </div>
                            </div>

                        </div><!-- Widget end -->
                    </div><!-- Sidebar left end -->
                </div><!-- Sidebar col end -->

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h3 class="title-classic left">Send Message</h3>
                    <form id="contact-form" action="contact-form.php" method="post" role="form">
                        <div class="error-container"></div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control form-control-email" name="email" id="email"
                                           placeholder="" type="email" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input class="form-control form-control-subject" name="subject" id="subject"
                                           placeholder="" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
                        </div>
                        <div class="text-right"><br>
                            <button class="btn btn-primary solid blank" type="submit">Send Message</button>
                        </div>
                    </form>
                </div><!-- Col end -->

            </div><!-- Content row -->

            <div class="gap-60"></div>

            <div id="map" class="map"></div>

        </div><!-- Conatiner end -->
    </section><!-- Main container end -->
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