<!DOCTYPE html>
<html lang="en">
<?php
$gs = \App\Website::find(1);
?>
<head>
    <title>{{$gs->sitename}}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Clean Beauty Spa with predefined web elements which helps you to build your own site. These template is suitable for spa, beauty, care, girly, hair, health, beauty parlour, massage, skincare, saloon, make up, physiotherapy, salon, wellness, yoga website. Yoga & Meditation centers, Barbershop, Health & Wellness Centers, Medical, Physiotherapy, Cosmetic Treatment centers, ayurvedic treatments, pedicure, manicure procedures.">
    <meta name="keywords" content="spa, beauty, care, girly, hair, health, beauty parlour, massage, skincare, saloon, make up, physiotherapy, salon, wellness, yoga website. Yoga & Meditation centers, Barbershop, Health & Wellness Centers, Medical, Physiotherapy, Cosmetic Treatment centers, ayurvedic treatments, pedicure, manicure procedures">
    <meta name="author" content="ThemeWar">

    <!-- Start Include All CSS -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/icofont.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/nounicon.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/makeover-icon.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/nice-select.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/jquery.datetimepicker.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/slick.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/lightcase.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/lightslider.css')}}"/>

    <!-- Revolution Slider Setting CSS -->
    <link rel="stylesheet" href="{{asset('front/css/settings.css')}}">

    <link rel="stylesheet" href="{{asset('front/css/preset.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/ignore_for_wp.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}"/>
    <!-- End Include All CSS -->

    <!-- Favicon Icon -->
    <link rel="icon"  type="image/png" href="{{asset('front/images/favicon.png')}}">
    <!-- Favicon Icon -->
    <style>
        .actionBox{
            position: relative;
            background: url({{asset($gs->mimage1)}}) no-repeat right bottom #f0f0f1;
            min-height: 274px;
            padding: 54px 0 65px 55px;

            transition: all ease 400ms;
            -moz-transition: all ease 400ms;
            -webkit-transition: all ease 400ms;
        }
        .abBg2{
            background: url({{asset($gs->mimage2)}}) no-repeat right bottom #e9f9fd;
        }
    </style>
</head>
<body>


<!-- Begin:: Header Section -->
<header class="header_01 isSticky">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 cusLogo">
                <div class="logo">
                    <a href="{{route('front.index')}}">
                        <img src="{{asset($gs->logo)}}" alt="Makeover"/>
                    </a>
                </div>
            </div>
            <div class="col-lg-8 menu-col">
                <a href="javascript:void(0)" class="menu_btn"><i class="icofont-navigation-menu"></i></a>
                <nav class="mainMenu">
                    <ul>
                        <li><a href="{{route('front.index')}}">Accueil</a></li>
                        <li><a href="{{route('front.index')}}#mission">Notre Mission</a></li>
                        <li><a href="{{route('front.index')}}#offers">Nos Offres</a></li>
                        <li><a href="{{route('front.index')}}#about">À propos</a></li>
                        <li><a href="{{route('front.index')}}#blog">Blog</a></li>
                        <li><a href="{{route('front.contact')}}">Contacts</a></li>
                        <li><a href="{{route('front.index')}}#espace">Espace Praticien</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-2 navCus">
                <div class="navAccess">
                    <a href="javascript:void(0);" class="humBurger"><span></span></a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End:: Header Section -->

<!-- popup sidebar widget -->
<section class="popup_sidebar_sec">
    <div class="popup_sidebar_overlay"></div>
    <div class="widget_area">
        <a href="javascript:void(0);" class="widget_closer"><i class="icofont-close-line"></i></a>
        <div class="center_align">
            <div class="about_widget_area">
                <div class="wd_logo">
                    <a href="{{route('front.index')}}"><img src="{{asset($gs->logo)}}" alt="makeover"/></a>
                </div>
                <p>
                   {{$gs->footer_text}}
                </p>
                <div class="icon_box_04">
                    <i class="noun-noun_call_1624888"></i>
                    <h4>Telephone</h4>
                    <p>{{$gs->phone}}</p>
                </div>
                <div class="icon_box_04">
                    <i class="noun-noun_Email_485891"></i>
                    <h4>Email</h4>
                    <p>{{$gs->email}}</p>
                </div>
                <div class="icon_box_04">
                    <i class="noun-noun_Address_1271842"></i>
                    <h4>Adresse</h4>
                    <p>{{$gs->address}}</p>
                </div>
                <div class="social_item">
                    <a href="{{$gs->facebook}}"><i class="icofont-facebook"></i></a>
                    <a href="{{$gs->instagram}}"><i class="icofont-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- popup sidebar widget -->
@yield('content')


<!-- Begin:: Footer Section -->
<footer class="footer_01">
    <div class="layer_img move_anim_two">
        <img src="{{asset($gs->footer_logo)}}" alt=""/>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-xl-4">
                <aside class="widget about_widget">
                    <h3 class="widget_title">À propos de nous</h3>
                    <p>
                        {{$gs->footer_text}}
                    </p>
                    <a href="#" class="mo_btn mob_lg"><i class="icofont-long-arrow-right"></i>Lire la suite</a>
                </aside>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4">
                <aside class="widget">
                    <h3 class="widget_title">Bulletin</h3>
                    <p>
                        Entrez votre adresse e-mail pour obtenir les dernières mises à jour et offres de notre part.
                    </p>
                    <form action="#" method="post">
                        <div class="mc4wp-form-fields">
                            <input type="email" name="EMAIL" placeholder="Entrer votre Email">
                            <button type="submit"><i class="icofont-long-arrow-right"></i></button>
                        </div>
                    </form>
                </aside>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-3 offset-xl-1">
                <aside class="widget">
                    <h3 class="widget_title">Nous contacter</h3>
                    <div class="info_box">
                        <i class="icofont-location-pin"></i>
                        <p>{{$gs->address}}</p>
                    </div>
                    <div class="info_box">
                        <i class="icofont-phone"></i>
                        <p>Ligne d'assistance 24/7<br>{{$gs->phone}}</p>
                    </div>
                    <div class="info_box">
                        <i class="icofont-clock-time"></i>
                        <p>{{$gs->time}}</p>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</footer>
<section class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>© 2021 <a href="http://ikaedigital.com" target="_blank" rel="noopener">Ikae Digital</a> . All Rights Reserved.</p>
            </div>
            <div class="col-md-6">
                <div class="copy_social">
                    <a target="_blank" href="https://www.facebook.com/"><i class="icofont-facebook"></i></a>
                    <a target="_blank" href="https://twitter.com/"><i class="icofont-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End:: Footer Section -->

<!-- Bact To Top -->
<a href="javascript:void(0);" id="backtotop"><i class="icofont-bubble-up"></i></a>
<!-- Bact To Top -->

<!-- Start Include All JS -->
<script src="{{asset('front/js/jquery.js')}}"></script>
<script src="{{asset('front/js/jquery-ui.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/jquery.appear.js')}}"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBJtPMZ_LWZKuHTLq5o08KSncQufIhPU3o"></script>
<script src="{{asset('front/js/gmaps.js')}}"></script>
<script src="{{asset('front/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('front/js/jquery.datetimepicker.full.min.js')}}"></script>
<script src="{{asset('front/js/slick.js')}}"></script>
<script src="{{asset('front/js/lightcase.js')}}"></script>
<script src="{{asset('front/js/lightslider.js')}}"></script>
<script src="{{asset('front/js/tweenmax.min.js')}}"></script>
<script src="{{asset('front/js/theia-sticky-sidebar.min.js')}}"></script>
<script src="{{asset('front/js/ResizeSensor.min.js')}}"></script>

<!-- Slider Revolution Main Files -->
<script src="{{asset('front/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('front/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- Slider Revolution Extension -->
<script src="{{asset('front/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('front/js/extensions/revolution.extension.video.min.js')}}"></script>

<script src="{{asset('front/js/theme.js')}}"></script>
<!-- End Include All JS -->
</body>
</html>
