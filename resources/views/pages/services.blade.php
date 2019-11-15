@extends('layouts.app')
@section('content')


    <!--========== SWIPER SLIDER ==========-->
    <div class="s-swiper js__swiper-slider">
        <!-- Swiper Wrapper -->
        <div class="swiper-wrapper">
            <div class="s-promo-block-v4 g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('{{ asset('page-img/startup-593341_640.jpg') }}');">
                <div class="container g-text-right--xs g-ver-center--xs">
                    <div class="row">
                        <div class="col-md-7 col-md-offset-5">
                            <div class="g-margin-b-50--xs">
                                <h2 class="g-font-size-32--xs g-font-size-45--sm g-font-size-55--md g-color--white">Strategy</h2>
                                <p class="g-font-size-18--xs g-font-size-22--sm g-color--white-opacity">
                                    Under the Strategy Value Stream, SOP Consulting offers you a range of services that set the direction of your organization, clearly articulating the key imperatives & ensuring the execution of strategy.
                                </p>
                            </div>
                            <a href="{{ url('/services/strategy') }}" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-50--xs">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="s-promo-block-v4 g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('{{ asset('page-img/student-849825_640.jpg') }}');">
                <div class="container g-ver-center--xs">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="g-margin-b-50--xs">
                                <h1 class="g-font-size-32--xs g-font-size-45--sm g-font-size-60--md g-color--white">Organisation</h1>
                                <p class="g-font-size-18--xs g-font-size-22--sm g-color--white-opacity">
                                    Under the Organization Value Stream, SOP Consulting offers you organizational configuration services, ensuring your delivery mechanism is robust and optimized
                                </p>
                            </div>
                            <a href="{{ url('/services/organisation') }}" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-50--xs">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="s-promo-block-v4 g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('{{ asset('page-img/michelangelo-71282_640.jpg') }}');">
                <div class="container g-text-right--xs g-ver-center--xs">
                    <div class="row">
                        <div class="col-md-7 col-md-offset-5">
                            <div class="g-margin-b-50--xs">
                                <h2 class="g-font-size-32--xs g-font-size-45--sm g-font-size-55--md g-color--white">People</h2>
                                <p class="g-font-size-18--xs g-font-size-22--sm g-color--white-opacity">
                                    Under the People Value Stream, SOP Consulting offers you a range of services that seek to source the most appropriate human resources to support your business
                                </p>
                            </div>
                            <a href="{{ url('/services/people') }}" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-50--xs">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Swiper Wrapper -->

        <!-- Pagination -->
        <div class="s-swiper__pagination-v1 s-swiper__pagination-v1--bc s-swiper__pagination-v1--white js__swiper-pagination"></div>
    </div>
    <!--========== END SWIPER SLIDER ==========-->

    <div id="js__scroll-to-section" class="row g-row-col--0">
        <div class="col-sm-4">
            <div class="g-text-center--xs g-padding-x-30--xs g-padding-x-50--lg g-padding-y-70--xs">
                <i class="g-display-block--xs g-font-size-40--sm g-color--primary g-margin-b-30--xs ti-book"></i>
                <span class="g-display-block--xs g-font-size-13--sm g-letter-spacing--3 g-margin-b-25--xs">01</span>
                <h2 class="g-font-size-26--xs g-font-family--playfair"><a href="{{ url('services/organisation') }}">Organization</a></h2>
                <ul class="list-unstyled g-ul-li-tb-3--xs">
                    <li><a href="{{ url('services/organisation') }}">Organization Structure Review and Design</a></li>
                    <li><a href="{{ url('services/organisation') }}">Job Design</a></li>
                    <li><a href="{{ url('services/organisation') }}">Job Evaluation</a></li>
                    <li><a href="{{ url('services/organisation') }}">HR Management Support Services</a></li>
                    <li><a href="{{ url('services/organisation') }}">Remuneration Structuring</a></li>
                    <li><a href="{{ url('services/organisation') }}"></a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="g-bg-color--sky-light g-text-center--xs g-padding-x-30--xs g-padding-x-50--lg g-padding-y-70--xs">
                <i class="g-display-block--xs g-font-size-40--sm g-color--primary g-margin-b-30--xs ti-package"></i>
                <span class="g-display-block--xs g-font-size-13--sm g-letter-spacing--3 g-margin-b-25--xs">02</span>
                <h2 class="g-font-size-26--xs g-font-family--playfair"><a href="{{ url('services/strategy') }}">Strategy</a></h2>
                <ul class="list-unstyled g-ul-li-tb-3--xs">
                    <li><a href="{{ url('services/strategy') }}">Strategy Setting</a></li>
                    <li><a href="{{ url('services/strategy') }}">Performance Management</a></li>
                    <li><a href="{{ url('services/strategy') }}">Change Management</a></li>
                    <li><a href="{{ url('services/strategy') }}">Organizational Culture Alignment</a></li>
                    <li><a href="{{ url('services/strategy') }}"></a></li>
                    <li><a href="{{ url('services/strategy') }}"></a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="g-text-center--xs g-padding-x-30--xs g-padding-x-50--lg g-padding-y-70--xs">
                <i class="g-display-block--xs g-font-size-40--sm g-color--primary g-margin-b-30--xs ti-blackboard"></i>
                <span class="g-display-block--xs g-font-size-13--sm g-letter-spacing--3 g-margin-b-25--xs">03</span>
                <h2 class="g-font-size-26--xs g-font-family--playfair"><a href="{{ url('services/people') }}">People</a></h2>
                <ul class="list-unstyled g-ul-li-tb-3--xs">
                    <li><a href="{{ url('services/people') }}">Talent Acquisition & Management</a></li>
                    <li><a href="{{ url('services/people') }}">Skills Auditing</a></li>
                    <li><a href="{{ url('services/people') }}">Employee Engagement</a></li>
                    <li><a href="{{ url('services/people') }}">Team Building</a></li>
                    <li><a href="{{ url('services/people') }}">People Surveys</a></li>
                    <li><a href="{{ url('services/people') }}">Learning & Development</a></li>
                </ul>
            </div>
        </div>
    </div>

@endsection
