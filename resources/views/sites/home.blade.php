<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ asset('styles/vendor/bootstrap.css')  }}">
    <link rel="stylesheet" href="{{ asset('styles/vendor/font-awesome.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('styles/vendor/superslides.css')  }}">
    <link rel="stylesheet" href="{{ asset('styles/vendor/owl.carousel.css')  }}">
    <link rel="stylesheet" href="{{ asset('styles/vendor/owl.transitions.css')  }}">
    <link rel="stylesheet" href="{{ asset('styles/vendor/flickity.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('styles/vendor/swipebox.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('styles/vendor/TimeCircles.css')  }}">

    <link rel="stylesheet" href="{{ asset('styles/main.css')  }}">
    <link rel="stylesheet" href="{{ asset('styles/demo.css')  }}">

    <link rel="stylesheet" href="{{ asset('styles/colors/color-yellow.css')  }}">
    <link rel="stylesheet" href="{{ asset('styles/colors/color-lightblue.css')  }}">
    <link rel="stylesheet" href="{{ asset('styles/colors/color-purple.css')  }}">
    <link rel="stylesheet" href="{{ asset('styles/colors/color-green.css')  }}">
    <link rel="stylesheet" href="{{ asset('styles/colors/color-militar.css')  }}">
    <link rel="stylesheet" href="{{ asset('styles/colors/color-caqui.css')  }}">
    <link rel="stylesheet" href="{{ asset('styles/colors/color-red.css')  }}">

    <script src="scripts/vendor/modernizr.js"></script>
</head>
<body data-spy="scroll" data-target="#navbar-muziq" data-offset="80">

<!-- LOADER -->
<div id="mask">
    <div class="loader">
        <!-- <img src="images/loading.gif" alt='loading'> -->
        <div class="cssload-container">
            <div class="cssload-shaft1"></div>
            <div class="cssload-shaft2"></div>
            <div class="cssload-shaft3"></div>
            <div class="cssload-shaft4"></div>
            <div class="cssload-shaft5"></div>
            <div class="cssload-shaft6"></div>
            <div class="cssload-shaft7"></div>
            <div class="cssload-shaft8"></div>
            <div class="cssload-shaft9"></div>
            <div class="cssload-shaft10"></div>
        </div>
    </div>
</div>

<!-- INTRO -->
<section class="intro full-width full-height jIntro comingsoon" id="anchor00">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slider-intro">
                    <div id="slides">
                        <div class="slides-container">
                            <img src="images/slides/slide01.jpg">
                            <img src="images/slides/slide02.jpg">
                            <img src="images/slides/slide03.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="vcenter text-center text-overlay">
            {{--<div class="logo-intro"><img src="images/demo/logo-small.png" alt=""></div>--}}
            <h1 class="coming-title">Lançamento do Single Êxodo</h1>

            <!-- time circles -->
            <div id="DateCountdown" data-date="2016-07-15 00:00:00"></div>

            <!-- emaill address -->
            <form action="mail.php" method="post" id="newsletterform" class="newsletter-form">
                <div class="form-group">
                    <input type="email" placeholder="Entre com o seu e-mail para receber novidades." name="email" id="email" class="text email required">
                </div>
                <input type="submit" value="Sim" class="btn rounded">
            </form>
            <div class="voffset60"></div>
            <h3 class="text-preplayer">Ouça The Black MC nas principais plataformas de stream de música</h3>
            <!-- PLAYER -->
            <div class="player horizontal">
                <div class="container">
                    <div class="info-album-player">
                        <div class="album-cover" id="bg-image3">
                            <img src="images/capas/single_exodo.jpg">
                        </div>
                        <p class="album-title">Êxodo</p>
                        <p class="artist-name">The Black MC</p>
                    </div>
                    <div class="player-content">
                        <audio preload></audio>
                        <ol class="playlist">
                            <li><a href="#" data-src="mp3/singles/exodo_Instrumental.mp3">Êxodo Instrumental</a></li>
                        </ol>
                        <div class="nextprev">
                            <span class="prev">prev</span>
                            <span class="next">next</span>
                        </div>
                        <span class="btnloop">loop</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script>

<script src="scripts/vendor/jquery.js"></script>
<script src="scripts/vendor/jquery.superslides.min.js"></script>
<script src="scripts/vendor/flickity.pkgd.js"></script>
<script src="scripts/vendor/audio.min.js"></script>
<script src="scripts/vendor/twitterFetcher_min.js"></script>
<script src="scripts/vendor/isotope.pkgd.min.js"></script>
<script src="scripts/vendor/jquery.swipebox.min.js"></script>
<script src="scripts/vendor/TimeCircles.js"></script>
<script src="scripts/vendor/owl.carousel.min.js"></script>
<script src="scripts/vendor/jquery.parallax.min.js"></script>

<script src="scripts/discography.js"></script>
<script src="scripts/news.js"></script>
<script src="scripts/main.js"></script>

<script src="scripts/vendor/bootstrap.js"></script>

</body>
</html>