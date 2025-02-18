@extends('frontend.layouts.app')
@section('content')

<!-- Innerpage Title Area -->
<section class="innerpage-titlev3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ipt-text">
                    <h3>Contact Us</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Innerpage Title Area -->

<!-- Contact Area -->
<section class="contact-page-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-info">
                    <h4>Contact Info:</h4>

                    <div class="ci-single">
                        <div class="cis-icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="cis-text">
                            @if ($setting->first()->number_one != null)
                                <a href="tel:{{ $setting->first()->number_one }}">
                                    <p>+{{ $setting->first()->number_one }}</p>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="ci-single">
                        <div class="cis-icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="cis-text">
                            @if ($setting->first()->email != null)
                                <a href="mailto:{{ $setting->first()->email }}">
                                    <p>{{ $setting->first()->email }}</p>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="ci-single">
                        <div class="cis-icon">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="cis-text">
                            <p>@if ($setting->first()->address != null)
                                {{ $setting->first()->address }}
                            @endif</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="cp-wrapper">
                    <h4>Leave A Message!</h4>
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form class="cf" action="{{ route('message.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your Name*</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Your Name Here" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="Email Address Here">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Subject Line*</label>
                                    <input type="text" class="form-control" id="subject"
                                        name="subject" placeholder="Subject Of Massage" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Number*</label>
                                    <input type="text" id="number" name="number" class="form-control"
                                        placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Your Message*</label>
                                    <textarea class="form-control" id="message" name="message" placeholder="Write Your Message" required></textarea>
                                </div>
                                <button type="submit" id="submit" name="submit" class="cf-btn">Send
                                    Now</button>
                                <div class="cf-msg" style="display: none;"></div>

                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Contact Area -->

@endsection
