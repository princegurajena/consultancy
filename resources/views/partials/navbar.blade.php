
<!--========== HEADER ==========-->
<header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
    <!-- Navbar -->
    <div class="s-header__navbar">
        <div class="s-header__container">
            <div class="s-header__navbar-row">
                <div class="s-header__navbar-row-col">
                    <!-- Logo -->
                    <div class="s-header__logo">
                        <a href="{{ url('/') }}" class="s-header__logo-link">
                            <img style="height: 70px" class="s-header__logo-img s-header__logo-img-default" src="{{ asset('images/SOP - Social Media.png') }}" alt="Megakit Logo">
                            <img style="height: 55px" class="s-header__logo-img s-header__logo-img-shrink" src="{{ asset('images/SOP - Social Media.png') }}" alt="Megakit Logo">
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>
                <div class="s-header__navbar-row-col s-header__navbar-row-col">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse s-header-v2__navbar-collapse" id="nav-collapse">
                        <ul class="s-header-v2__nav s-header-v2__navbar-col--right g-margin-r-20--sm">
                            <li class="s-header-v2__nav-item"><a href="{{ url('/services/strategy') }}" class="s-header-v2__nav-link">Strategy</a></li>
                            <li class="s-header-v2__nav-item"><a href="{{ url('/services/organisation') }}" class="s-header-v2__nav-link">Organisation</a></li>
                            <li class="s-header-v2__nav-item"><a href="{{ url('/services/people') }}" class="s-header-v2__nav-link">People</a></li>
                            <li class="s-header-v2__nav-item"><a href="{{ url('/about') }}" class="s-header-v2__nav-link">About</a></li>
                         </ul>
                    </div>
                    <!-- End Nav Menu -->
                </div>
                <div class="s-header__navbar-row-col">
                    <!-- Trigger -->
                    <a href="javascript:void(0);" class="s-header__trigger js__trigger @if (isset($mode))
                        @if ($mode == 'dark')
                            s-header__trigger--dark
                        @endif
                    @endif">
                        <span class="s-header__trigger-icon"></span>
                        <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                            <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                        </svg>
                    </a>
                    <!-- End Trigger -->
                </div>
            </div>
        </div>
    </div>
<!-- End Navbar -->

    <!-- Overlay -->
    <div class="s-header-bg-overlay js__bg-overlay">
        <!-- Nav -->
        <nav class="s-header__nav js__scrollbar">
            <div class="container-fluid">
                <!-- Menu List -->
                <ul class="list-unstyled s-header__nav-menu">
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="{{ url('services/strategy') }}">Strategy </a></li>
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="{{ url('services/organisation') }}">Organization </a></li>
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="{{ url('services/people') }}">People </a></li>
                </ul>
                <ul class="list-unstyled s-header__nav-menu">
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="{{ url('about') }}">About</a></li>
                    <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="{{ url('services') }}">Services</a></li>
                </ul>
                <!-- End Menu List -->
            </div>
        </nav>
        <!-- End Nav -->

        <!-- Action -->
        <ul class="list-inline s-header__action s-header__action--lb"></ul>
        <!-- End Action -->

        <!-- Action -->
        <ul class="list-inline s-header__action s-header__action--rb">
            <li class="s-header__action-item">
                <a class="s-header__action-link" href="https://www.facebook.com/SOPConsultingZW/">
                    <i class="g-padding-r-5--xs ti-facebook"></i>
                    <span class="g-display-none--xs g-display-inline-block--sm">Facebook</span>
                </a>
            </li>
            <li class="s-header__action-item">
                <a class="s-header__action-link" href="https://twitter.com/SOPHRConsulting">
                    <i class="g-padding-r-5--xs ti-twitter"></i>
                    <span class="g-display-none--xs g-display-inline-block--sm">Twitter</span>
                </a>
            </li>
        </ul>
        <!-- End Action -->
    </div>
    <!-- End Overlay -->
</header>
<!--========== END HEADER ==========-->

