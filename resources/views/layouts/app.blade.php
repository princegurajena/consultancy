<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Begin Head -->
<head>
    <!-- Basic -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SOP Consulting | </title>
    <meta name="keywords" content="HTML5 Theme" />
    <meta name="description" content="Megakit - HTML5 Theme">
    <meta name="author" content="keenthemes.com">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

    <!-- Vendor Styles -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendor/themify/themify.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendor/scrollbar/scrollbar.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendor/swiper/swiper.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendor/cubeportfolio/css/cubeportfolio.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Theme Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/global/global.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
</head>
<!-- End Head -->

<!-- Body -->
<body>

@if (session()->has('message'))
    <div style="position: fixed;bottom: 0;right: 0;left: 0;padding: 30px;background-color: #0b0b0b;color: #FFFFFF;width: 100%;text-align: center;z-index: 999">
        {{ session()->get('message') }}
    </div>
@endif


@if (isset($mode))
        @include('partials.navbar' , [ 'mode' => $mode ])
    @else
        @include('partials.navbar')
@endif

@yield('content')

<a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

<!-- Feedback Form -->
<div class="g-position--relative g-bg-color--dark-light">
    <div class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
        <div class="g-text-center--xs g-margin-b-80--xs">
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Contact Us</p>
            <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Get in Touch</h2>
        </div>
        <div class="row g-row-col--5 g-margin-b-80--xs">
            <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                <div class="g-text-center--xs">
                    <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-email"></i>
                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Email</h4>
                    <p class="g-color--white-opacity">info@sopconsulting.co.zw</p>
                </div>
            </div>
            <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                <div class="g-text-center--xs">
                    <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-map-alt"></i>
                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Address</h4>
                    <p class="g-color--white-opacity">Prospect Industrial Park, Ceres Road, Prospect <br> Harare, Zimbabwe</p>
                </div>
            </div>
            <div class="col-xs-4 g-full-width--xs">
                <div class="g-text-center--xs">
                    <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-headphone-alt"></i>
                    <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Call at</h4>
                    <p class="g-color--white-opacity">+263 776 183 963 or +263 242 722490</p>
                </div>
            </div>
        </div>
        <form method="post" action="/contact" class="center-block g-width-500--sm g-width-550--md">
            @csrf
            <div class="g-margin-b-30--xs">
                <input name="name" type="text" class="form-control s-form-v3__input" placeholder="* Name">
            </div>
            <div class="row g-row-col-5 g-margin-b-50--xs">
                <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                    <input name="email" type="email" class="form-control s-form-v3__input" placeholder="* Email">
                </div>
                <div class="col-sm-6">
                    <input name="phone" type="text" class="form-control s-form-v3__input" placeholder="* Phone">
                </div>
            </div>
            <div class="g-margin-b-80--xs">
                <textarea name="message" class="form-control s-form-v3__input" rows="5" placeholder="* Your message"></textarea>
            </div>
            <div class="g-text-center--xs">
                <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Submit</button>
            </div>
        </form>
    </div>
    <img class="s-mockup-v2" src="{{ asset('img/mockups/pencil-01.png') }}" alt="Mockup Image">
</div>

<footer class="g-bg-color--dark">
    <!-- Links -->
    <div class="g-hor-divider__dashed--white-opacity-lightest">
        <div class="container g-padding-y-80--xs">
            <div class="row">
                <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                    <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="/">Home</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="/about">About</a></li>
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="/servicies">Services</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                    <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="https://twitter.com/SOPHRConsulting">Twitter</a></li>
                        <li><a  class="g-font-size-15--xs g-color--white-opacity" target="_blank" href="https://www.facebook.com/SOPConsultingZW/">Facebook</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                    <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
{{--                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="">Subscribe to Our Newsletter</a></li>--}}
{{--                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="">Privacy Policy</a></li>--}}
{{--                        <li><a class="g-font-size-15--xs g-color--white-opacity" href="">Terms &amp; Conditions</a></li>--}}
                    </ul>
                </div>
                <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                    <h3 class="g-font-size-18--xs g-color--white">SOP Consulting</h3>
                    <p class="g-color--white-opacity">Our main focus is the design and development of appropriate organizational infrastructure (structures, systems, work processes, policies and procedures)</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Links -->

    <!-- Copyright -->
    <div class="container g-padding-y-50--xs">
        <div style="display: flex;align-content: center" class="row">
            <div class="col-xs-6">
                <a href="/">
                    <img class="g-width-100--xs g-height-auto--xs" src="{{ asset('images/SOP - Social Media.png') }}" alt="Megakit Logo">
                </a>
            </div>
            <div class="col-xs-6 g-text-right--xs">
                <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Site done by <i class="icon-heart" aria-hidden="true"></i> by <a href="http://starlight.co.zw" target="_blank">Starlight</a>
                </p>
            </div>
        </div>
    </div>
    <!-- End Copyright -->
</footer>
<!--========== END FOOTER ==========-->

<script type="text/javascript" src="{{ asset('vendor/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/jquery.migrate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/global.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/components/header-sticky.min.js') }}"></script>
<!--========== END JAVASCRIPTS ==========-->

<script type="text/javascript" src="{{ asset('vendor/swiper/swiper.jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/components/swiper.js') }}"></script>

</body>
<!-- End Body -->
</html>
