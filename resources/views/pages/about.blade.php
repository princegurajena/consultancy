@extends('layouts.app')
@section('content')

    <div class="g-bg-position--center js__parallax-window s-promo-block-v4" style="background: url('{{ asset('page-img/img-staffing.gif') }}') 50% 0 no-repeat fixed;">
        <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">5+ years experience</p>
            <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">About Us</h1>
        </div>
    </div>

    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
        <div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-60--xs g-margin-b-100--md">
            <div class="col-sm-12 g-hor-centered-row__col">
                <h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs">WHO WE ARE</h2>
                <p class="g-font-size-18--sm">
                    We are a highly specialized Team of Consulting Experts providing Management solutions in the areas of Organizational Development and People Management. Founded in 2008, SOP Consulting has successfully delivered Management solutions to a wide range of client organizations in Zimbabwe and beyond. Having undertaken various consulting assignments across different industries, we have amassed invaluable experience in our areas of specialization. We employ various dynamic strategies to create healthy and sustainable organizations. Our strategies unlock the human capital in client organizations
                </p>
            </div>
        </div>

        <div class="row g-hor-centered-row--md g-row-col--5">
            <div class="col-sm-12 g-text-left--xs g-text-right--md g-margin-b-50--sm">
                <img style="width: 100%" src="{{ asset('page-img/Screenshot from 2019-11-15 14:29:07.png') }}" alt="">
            </div>
            <div class="col-sm-12 g-text-left--xs g-text-right--md">
                <h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs">OUR VALUE STREAMS</h2>
                <p class="g-font-size-18--sm">
                    Our main focus is the design and development of appropriate organizational infrastructure (structures, systems, work processes, policies and procedures) and fostering the development of appropriate organizational cultures and workplace environments that enable organizations to achieve optimum performance.

                    We also strive to ensure that through our expert support, organizations employ effective people management strategies that contribute to superior performance.
                </p>
            </div>
        </div>
    </div>

@endsection
