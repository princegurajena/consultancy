<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Begin Head -->
<head>
    <!-- Basic -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SOP Consultation | </title>
    <meta name="keywords" content="HTML5 Theme" />
    <meta name="description" content="Megakit - HTML5 Theme">
    <meta name="author" content="keenthemes.com">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

    <!-- Vendor Styles -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/animate.css" rel="stylesheet" type="text/css"/>

    @include('partials.css')

    <link href="vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
    <link href="vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
    <link href="vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>

    <!-- Theme Styles -->
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/global/global.css" rel="stylesheet" type="text/css"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
</head>
<!-- End Head -->

<!-- Body -->
<body>

@include('partials.navbar')

<!--========== SWIPER SLIDER ==========-->
<div class="s-swiper">
    <!-- Swiper Wrapper -->
    <div class="swiper-wrapper">
        <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/1920x1080/02.jpg');">
            <div class="container g-text-center--xs g-ver-center--xs">
                <div class="g-margin-b-30--xs">
                    <h1 class="g-font-weight--700 g-font-size-30--xs g-font-size-50--sm g-font-size-60--md g-color--white">
                        Strategy | Organisation | People
                    </h1>
                    <h6 class="g-font-size-15--xs g-font-size-25--sm g-font-size-30--md g-color--white g-margin-t-50--lg g-margin-t-30--xs g-margin-t-50--md g-margin-t-40--sm">
                        Management Consulting Expertise
                    </h6>
                </div>
            </div>
        </div>

    </div>

    <a href="{{ url('/services') }}" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
        <span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
        <p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs">Learn More</p>
    </a>
</div>

<script type="text/javascript" src="vendor/jquery.min.js"></script>
<script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/global.min.js"></script>

</body>
<!-- End Body -->
</html>

