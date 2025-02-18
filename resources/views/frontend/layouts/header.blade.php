
<!-- Header Area -->
<header class="header-area fotolia-header header_2">
    <div class="voidmega-header">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-10">

                    <div class="vmm-header header-transparent-on vmm-mega-menu mega-menu-fullwidth">
                        <div class="container">

                            <!-- vmm header -->
                            <div class="vmm-header-container">

                                <!--Logo-->
                                <div class="logo" data-mobile-logo="{{ asset('frontend') }}/assets/img/logo-1.png"
                                    data-sticky-logo="{{ asset('frontend') }}/assets/img/logo-2.png">
                                    <a href="{{ url('/') }}">
                                        @if($setting->first()->black_logo != null)
                                            <img width="70%" src="{{ asset('uploads/setting') }}/{{ $setting->first()->black_logo }}" alt="logo">
                                        @else
                                            <img width="70%" src="{{ asset('uploads/setting') }}/{{ $setting->first()->white_logo }}" alt="logo" >
                                        @endif
                                    </a>
                                </div>

                                <!-- Burger menu -->
                                <div class="burger-menu">
                                    <div class="line-menu line-half first-line"></div>
                                    <div class="line-menu"></div>
                                    <div class="line-menu line-half last-line"></div>
                                </div>

                                <!--Navigation menu-->
                                <nav class="vmm-menu menu-caret submenu-scale">
                                    <ul>
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ route('about.us') }}">About</a></li>
                                        {{-- <li><a href="{{ route('gallery') }}">Gallery</a></li> --}}
                                        <li><a href="{{ route('albums') }}">Albums</a></li>
                                        <li><a href="{{ route('our.portfolio') }}">Portfolio</a></li>
                                        <li><a href="{{ route('pricing') }}">Pricing</a></li>
                                        <li><a href="{{ route('contect') }}">Contact</a></li>
                                    </ul>
                                </nav>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="d-none col-xl-2 d-xl-block">
                    <div class="search-menu-btn">
                        
                        <span class="menu2nd-btn">
                            <i class="fa fa-bars fa-2x"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- /Header Area -->
<!-- Search Box -->
<div class="search_V1">
    <form>
        <input type="text" class="input">
    </form>
</div>

<!-- Secondary Menu area -->
<div class="secondMenu_V1">
    <nav class="fotoliaCircular-menu">
        <div class="circle">
            <a href="{{ url('/') }}"><i class="flaticon-001-camera"></i></a>
            <a href="{{ route('about.us') }}"><i class="flaticon-030-album"></i></a>
            <a href="{{ route('albums') }}"><i class="flaticon-025-video-camera"></i></a>
            <a href="{{ route('our.stories') }}"><i class="flaticon-019-histogram"></i></a>
            <a href="{{ route('our.portfolio') }}"><i class="flaticon-017-len-2"></i></a>
            <a href="{{ route('pricing') }}"><i class="flaticon-004-spotlight"></i></a>
            <a href="{{ route('contect') }}"><i class="flaticon-022-portrait"></i></a>
            <a href="{{ route('contect') }}"><i class="flaticon-037-timer"></i></a>
        </div>
        <span class="menu2nd-btn">
            <i class="fa fa-times fa-2x"></i>
        </span>
    </nav>
</div>
<!-- /Secondary Menu area -->