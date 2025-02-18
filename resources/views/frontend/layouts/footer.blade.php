<!-- Instagram Area -->
<section class="instagram-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 no-pad">

                <div class="insta-slider">
                    <div class="insta-carousel owl-carousel owl-theme">
                        <div class="item">
                            <div class="single-insta-img">
                                <img src="{{ asset('frontend') }}/assets/img/slider/instagram/insta-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-insta-img">
                                <img src="{{ asset('frontend') }}/assets/img/slider/instagram/insta-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-insta-img">
                                <img src="{{ asset('frontend') }}/assets/img/slider/instagram/insta-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-insta-img">
                                <img src="{{ asset('frontend') }}/assets/img/slider/instagram/insta-4.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-insta-img">
                                <img src="{{ asset('frontend') }}/assets/img/slider/instagram/insta-5.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-insta-img">
                                <img src="{{ asset('frontend') }}/assets/img/slider/instagram/insta-6.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-insta-img">
                                <img src="{{ asset('frontend') }}/assets/img/slider/instagram/insta-7.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-insta-img">
                                <img src="{{ asset('frontend') }}/assets/img/slider/instagram/insta-8.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-insta-img">
                                <img src="{{ asset('frontend') }}/assets/img/slider/instagram/insta-5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="instagram-btn">
                        <a href="{{ $setting->first()->insta_link }}" class="insta-btn">
                            <img src="{{ asset('frontend') }}/assets/img/icon/instagram.png" alt="">
                            <span>Instagram_Feed</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Instagram Area -->
<!-- Footer Area -->
<footer class="footer-area">
    <div class="container">
        <div class="col-md-12">
            <div class="footer-copyr-logo">
                <a href="{{ url('/') }}">
                    @if($setting->first()->white_logo != null)
                        <img width="20%" src="{{ asset('uploads/setting') }}/{{ $setting->first()->white_logo }}" alt="logo">
                    @else
                        <img width="20%" src="{{ asset('uploads/setting') }}/{{ $setting->first()->black_logo }}" alt="logo" >
                    @endif
                </a>
                <p>{{ $setting->first()->footer }}</p>
            </div>
            <div class="footer-social">
                <ul>
                    @if ($setting->first()->fb_link)
                        <li><a href="{{ $setting->first()->fb_link }}" class="fa fa-facebook"></a></li>
                    @endif
                    @if ($setting->first()->youtube_link)
                        <li><a href="{{ $setting->first()->youtube_link }}" class="fa fa-youtube"></a></li>
                    @endif
                    @if ($setting->first()->insta_link)
                        <li><a href="{{ $setting->first()->insta_link }}" class="fa fa-instagram"></a></li>
                    @endif
                    @if ($setting->first()->linkind_link)
                        <li><a href="{{ $setting->first()->linkind_link }}" class="fa fa-linkedin"></a></li>
                    @endif
                    @if ($setting->first()->tweeter_link)
                        <li><a href="{{ $setting->first()->tweeter_link }}" class="fa fa-twitter"></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer Area -->