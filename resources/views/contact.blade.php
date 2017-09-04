@extends('layouts.app')

@section('title', 'Contacto')

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
    <section class="well well-sm">
        <div class="container">
            <div class="row flow-offset-1">
                <div class="col-md-4 text-center text-md-left">
                    <address class="contact-block inset-sm-min-2">
                        <dl>
                            <dt class="h6">DIRECCIÓN</dt>
                            <dd>Lima, Perú</dd>
                            <dt class="h6">HORARIOS</dt>
                            <dd>Lunes - Domingo / 9:00 - 20:00</dd>
                            <dt class="h6">TELÉFONOS</dt>
                            <dd><a href="callto:#">999999999, &nbsp;</a><a href="callto:#">99999999</a></dd>
                            <dt class="h6">E-MAIL</dt>
                            <dd><a href="mailto:#">info@conferenciadepastorestbjoshuaperu.com</a></dd>
                        </dl>
                        <ul class="list-inline list-inline-3">
                            <li><a href="#" class="fa-facebook-square"></a></li>
                            <li><a href="#" class="fa-twitter-square"></a></li>
                            <li><a href="#" class="fa-google-plus-square"></a></li>
                        </ul>
                    </address>
                </div>
                <div class="col-md-8 btn-shadow inset-sm-min">
                    <h5 class="text-center">CONTÁCTENOS</h5>
                    <form method="post" action="bat/rd-mailform.php" class="row label-insets rd-mailform">
                        <!--RD Mailform Type-->
                        <input type="hidden" name="form-type" value="contact">
                        <!--END RD Mailform Type-->
                        <div class="form-group col-sm-6">
                            <label for="exampleInputText1" class="text-uppercase font-secondary form-label">Nombres</label>
                            <input type="text" placeholder="Tus Nombres" name="name" data-constraints="@NotEmpty @LettersOnly" id="exampleInputText1" class="form-control">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="exampleInputText2" class="text-uppercase font-secondary">Apellidos</label>
                            <input type="text" placeholder="Tus Apellidos" name="name2" data-constraints="@NotEmpty @LettersOnly" id="exampleInputText2" class="form-control">
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="exampleTextarea" class="text-uppercase font-secondary">Mensaje</label>
                            <textarea id="exampleTextarea" rows="3" placeholder="Escribe tu mensaje aquí" name="message" data-constraints="@NotEmpty" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="exampleInputEmail1" class="text-uppercase font-secondary">E-mail</label>
                            <input placeholder="E-mail" type="text" name="email" data-constraints="@NotEmpty @Email" id="exampleInputEmail1" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary btn-xs round-xl btn-block form-el-offset-1">Enviar</button>
                            <div class="mfInfo"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--End section-->
    <section class="map">
        <div id="google-map" class="map_model"></div>
        <ul class="map_locations">
            <li data-x="-73.9874068" data-y="40.643180" data-basic="images/gmap_marker.png" data-active="images/gmap_marker_active.png">
                <p>9870 St Vincent Place, Glasgow, DC 45 Fr 45. <span>800 2345-6789</span></p>
            </li>
        </ul>
    </section>
@endsection