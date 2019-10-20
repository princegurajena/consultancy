@extends('layouts.app')
@section('content')


    <div class="js__parallax-window" style="background: url('{{ asset("img/1920x1080/03.jpg") }}') 50% 0 no-repeat fixed;">
        <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
            <div class="g-margin-b-60--xs">
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-70--md g-color--white g-letter-spacing--1 g-margin-b-30--xs">Services</h1>
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2">Services we offer</p>
            </div>
            <a href="#js__scroll-to-section">
                <span class="s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-double-down"></span>
            </a>
        </div>
    </div>

    <div id="js__scroll-to-section" class="row g-row-col--0">
        <div class="col-sm-4">
            <div class="g-text-center--xs g-padding-x-30--xs g-padding-x-50--lg g-padding-y-70--xs">
                <i class="g-display-block--xs g-font-size-40--sm g-color--primary g-margin-b-30--xs ti-book"></i>
                <span class="g-display-block--xs g-font-size-13--sm g-letter-spacing--3 g-margin-b-25--xs">01</span>
                <h2 class="g-font-size-26--xs g-font-family--playfair"><a href="{{ url('services/organisation') }}">Organization</a></h2>
                <ul class="list-unstyled g-ul-li-tb-3--xs">
                    <li><a href="#">Organization Structure Review and Design</a></li>
                    <li><a href="#">Job Design</a></li>
                    <li><a href="#">Job Evaluation</a></li>
                    <li><a href="#">HR Management Support Services</a></li>
                    <li><a href="#">Remuneration Structuring</a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="g-bg-color--sky-light g-text-center--xs g-padding-x-30--xs g-padding-x-50--lg g-padding-y-70--xs">
                <i class="g-display-block--xs g-font-size-40--sm g-color--primary g-margin-b-30--xs ti-package"></i>
                <span class="g-display-block--xs g-font-size-13--sm g-letter-spacing--3 g-margin-b-25--xs">02</span>
                <h2 class="g-font-size-26--xs g-font-family--playfair"><a href="{{ url('services/strategy') }}">Strategy</a></h2>
                <ul class="list-unstyled g-ul-li-tb-3--xs">
                    <li><a href="#">Strategy Setting</a></li>
                    <li><a href="#">Performance Management</a></li>
                    <li><a href="#">Change Management</a></li>
                    <li><a href="#">Organizational Culture Alignment</a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="g-text-center--xs g-padding-x-30--xs g-padding-x-50--lg g-padding-y-70--xs">
                <i class="g-display-block--xs g-font-size-40--sm g-color--primary g-margin-b-30--xs ti-blackboard"></i>
                <span class="g-display-block--xs g-font-size-13--sm g-letter-spacing--3 g-margin-b-25--xs">03</span>
                <h2 class="g-font-size-26--xs g-font-family--playfair"><a href="{{ url('services/people') }}">People</a></h2>
                <ul class="list-unstyled g-ul-li-tb-3--xs">
                    <li><a href="#">Talent Acquisition & Management</a></li>
                    <li><a href="#">Skills Auditing</a></li>
                    <li><a href="#">Employee Engagement</a></li>
                    <li><a href="#">Team Building</a></li>
                    <li><a href="#">People Surveys</a></li>
                    <li><a href="#">Learning & Development</a></li>
                </ul>
            </div>
        </div>
    </div>

@endsection
