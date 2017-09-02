<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
<head>
    <!--Site Title-->
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--Stylesheets-->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!--Bootstrap-->
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 10]>
        <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/.."><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
        <script src="js/html5shiv.min.js"></script><[endif]-->
</head>

<body>
<!--The Main Wrapper-->
<div class="page">
    <!--
    ========================================================
                            HEADER
    ========================================================
    -->
    <header class=@yield('class-header')>

        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar bg-white minimal top-panel-none toggles-none " data-layout="rd-navbar-fixed" data-hover-on="false" data-stick-up="false" data-sm-layout="rd-navbar-fullwidth" data-sm-device-layout="rd-navbar-fullwidth" data-md-layout="rd-navbar-static" data-md-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static">

                <div class="rd-navbar-inner">

                    <!--RD Navbar Panel-->
                    <div class="rd-navbar-panel">

                        <!--RD Navbar Toggle-->
                        <button data-rd-navbar-toggle=".rd-navbar" class="rd-navbar-toggle"><span></span></button>
                        <!--END RD Navbar Toggle-->

                        <!--RD Navbar Brand-->
                        <div class="rd-navbar-brand"><a href="index.html" class="brand-name">Tb Joshua 2017</a></div>
                        <!--END RD Navbar Brand-->
                    </div>
                    <!--END RD Navbar Panel-->

                    <div class="rd-navbar-nav-wrap">

                        <!--RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li class="active"><a href="./">Inicio</a></li>
                            <li><a href="#">Evento</a>
                                <ul class="rd-navbar-dropdown">
                                    <li><a href="index-parallax.html">Congreso</a></li>
                                    <li><a href="index.html">Hoteles</a></li>
                                    <li><a href="index-cent.html">Transporte</a></li>
                                </ul>
                            </li>
                            <li><a href="#">TB Joshua</a></li>
                            <li><a href="#">Registro</a>
                            <li><a href="#">Preguntas Frecuentes</a></li>
                            <li><a href="{{ url('contact') }}">Contacto</a></li>
                        </ul>
                        <!--END RD Navbar Nav-->
                    </div>
                </div>
            </nav>
        </div>
        <!--END RD Navbar-->
        <section>
            @yield('slider')
        </section>
    </header>
    <!--
    ========================================================
                            CONTENT
    ========================================================
    -->
    <main class="page-content">
        @yield('content')
    </main>
    <!--
    ========================================================
                            FOOTER
    ========================================================
    -->
    <footer class="page-footer footer-minimal dark text-center">
        <section class="footer-content">
            <div class="container">
                <div class="navbar-brand pull-lg-left"><a href="index.html">Tb Joshua 2017</a></div>
                <ul class="list-inline-2 pull-lg-right">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Congreso</a></li>
                    <li><a href="#">Hoteles</a></li>
                    <li><a href="#">Tb Joshua</a></li>
                    <li><a href="#">Preguntas Frecuentes</a></li>
                    <li><a href="{{ url('contact') }}">Contacto</a></li>
                </ul>
            </div>
        </section>
        <section class="copyright">
            <div class="container">
                <p class="pull-md-left">&#169; <span id="copyright-year"></span> All Rights Reserved <a href="terms.html">Terms of Use and Privacy Policy</a>

                </p>
                <ul class="list-inline pull-md-right">
                    <li><a href="#" class="fa-facebook"></a></li>
                    <li><a href="#" class="fa-pinterest-p"></a></li>
                    <li><a href="#" class="fa-twitter"></a></li>
                    <li><a href="#" class="fa-google-plus"></a></li>
                    <li><a href="#" class="fa-instagram"></a></li>
                </ul>
            </div>
        </section>
    </footer>
</div>
<!--Core Scripts-->
<script src="js/core.min.js"></script>
<!--jQuery (necessary for Bootstrap's JavaScript plugins)-->
<!--Include all compiled plugins (below), or include individual files as needed-->
<script src="js/bootstrap.min.js"></script>
<!--Additional Functionality Scripts-->
<script src="js/script.js"></script>

@stack('scripts')
</body>
</html>