@extends('backend.layouts.app')
@section('content')

    <!-- Innerpage Title Area -->
    <section class="innerpage-titlev3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ipt-text">
                        <h3>404</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Innerpage Title Area -->


    <!-- 404 Area -->
    <section class="error-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-text">
                        <img src="{{ asset('frontend') }}/assets/img/icon/404-bg.png" alt="">
                        <h2>404</h2>
                        <h3>Shit It’s Error</h3>
                        <p>We Are Sorry! Page Not Found</p>
                        <a href="{{ url('/') }}" class="btn-style-1">back to the homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /404 Area -->

@endsection
