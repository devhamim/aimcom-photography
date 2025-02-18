@extends('frontend.layouts.app')
@section('content')

<!-- Innerpage Title Area -->
<section class="innerpage-titlev3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ipt-text">
                    <h3>Gallery</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Innerpage Title Area -->

<!-- Our Portfolio -->
<section class="portfolio-area bgDark section-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-titleV1">
                    <p>Our Recent Works</p>
                    <h3>Our Portfolio</h3>
                </div>
            </div>
        </div>
        <div class="shuffle-wrapper">
            <div class="row">
                <div class="col">
                    <div class="btn-group btn-group-toggle shuffle-filter-btn" data-toggle="buttons">
                        <label class="btn active">
                            <input type="radio" name="shuffle-filter" value="all" checked="checked" />All
                        </label>
                        <label class="btn">
                            <input type="radio" name="shuffle-filter" value="design" />Design
                        </label>
                        <label class="btn">
                            <input type="radio" name="shuffle-filter" value="photography" />Photography
                        </label>
                        <label class="btn">
                            <input type="radio" name="shuffle-filter" value="uidesign" />UI Design
                        </label>
                        <label class="btn">
                            <input type="radio" name="shuffle-filter" value="uxdesign" />UX Design
                        </label>
                        <label class="btn">
                            <input type="radio" name="shuffle-filter" value="branding" />Branding
                        </label>
                        <label class="btn">
                            <input type="radio" name="shuffle-filter" value="prototype" />Prototype
                        </label>
                    </div>
                </div>
            </div>
            <div class="row shuffle-box sbox_V1">
                <figure class="single-shuffle col-3" data-groups='["design"]'>
                    <div class="aspect">
                        <div class="aspect__inner ssf-content">
                            <img src="assets/img/portfolio/portfolio2-1.jpg" alt="" />
                            <div class="ssf-hover">
                                <a data-fancybox="group-4" class="fancyGallery"
                                    href="assets/img/portfolio/portfolio2-1.jpg">
                                    <img src="assets/img/icon/focus.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure class="single-shuffle col-3" data-groups='["photography","uxdesign"]'>
                    <div class="aspect">
                        <div class="aspect__inner ssf-content">
                            <img src="assets/img/portfolio/portfolio2-2.jpg" alt="" />
                            <div class="ssf-hover">
                                <a data-fancybox="group-4" class="fancyGallery"
                                    href="assets/img/portfolio/portfolio2-2.jpg">
                                    <img src="assets/img/icon/focus.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure class="single-shuffle col-3" data-groups='["design","branding"]'>
                    <div class="aspect">
                        <div class="aspect__inner ssf-content">
                            <img src="assets/img/portfolio/portfolio2-3.jpg" alt="" />
                            <div class="ssf-hover">
                                <a data-fancybox="group-4" class="fancyGallery"
                                    href="assets/img/portfolio/portfolio2-3.jpg">
                                    <img src="assets/img/icon/focus.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure class="single-shuffle col-3"
                    data-groups='["photography","prototype","uxdesign","uidesign"]'>
                    <div class="aspect">
                        <div class="aspect__inner ssf-content">
                            <img src="assets/img/portfolio/portfolio2-4.jpg" alt="" />
                            <div class="ssf-hover">
                                <a data-fancybox="group-4" class="fancyGallery"
                                    href="assets/img/portfolio/portfolio2-4.jpg">
                                    <img src="assets/img/icon/focus.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure class="single-shuffle col-3" data-groups='["design","photography","branding","uidesign"]'>
                    <div class="aspect">
                        <div class="aspect__inner ssf-content">
                            <img src="assets/img/portfolio/portfolio2-5.jpg" alt="" />
                            <div class="ssf-hover">
                                <a data-fancybox="group-4" class="fancyGallery"
                                    href="assets/img/portfolio/portfolio2-5.jpg">
                                    <img src="assets/img/icon/focus.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure class="single-shuffle col-3" data-groups='["photography","prototype","uidesign"]'>
                    <div class="aspect">
                        <div class="aspect__inner ssf-content">
                            <img src="assets/img/portfolio/portfolio2-6.jpg" alt="" />
                            <div class="ssf-hover">
                                <a data-fancybox="group-4" class="fancyGallery"
                                    href="assets/img/portfolio/portfolio2-6.jpg">
                                    <img src="assets/img/icon/focus.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure class="single-shuffle col-3" data-groups='["design","uidesign"]'>
                    <div class="aspect">
                        <div class="aspect__inner ssf-content">
                            <img src="assets/img/portfolio/portfolio2-7.jpg" alt="" />
                            <div class="ssf-hover">
                                <a data-fancybox="group-4" class="fancyGallery"
                                    href="assets/img/portfolio/portfolio2-7.jpg">
                                    <img src="assets/img/icon/focus.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure class="single-shuffle col-3" data-groups='["fruit","prototype","uxdesign"]'>
                    <div class="aspect">
                        <div class="aspect__inner ssf-content">
                            <img src="assets/img/portfolio/portfolio2-8.jpg" alt="" />
                            <div class="ssf-hover">
                                <a data-fancybox="group-4" class="fancyGallery"
                                    href="assets/img/portfolio/portfolio2-8.jpg">
                                    <img src="assets/img/icon/focus.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure class="single-shuffle col-3"
                    data-groups='["photography","prototype","uxdesign","uidesign"]'>
                    <div class="aspect">
                        <div class="aspect__inner ssf-content">
                            <img src="assets/img/portfolio/portfolio2-9.jpg" alt="" />
                            <div class="ssf-hover">
                                <a data-fancybox="group-4" class="fancyGallery"
                                    href="assets/img/portfolio/portfolio2-9.jpg">
                                    <img src="assets/img/icon/focus.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure class="single-shuffle col-3" data-groups='["design","photography","branding","uidesign"]'>
                    <div class="aspect">
                        <div class="aspect__inner ssf-content">
                            <img src="assets/img/portfolio/portfolio2-10.jpg" alt="" />
                            <div class="ssf-hover">
                                <a data-fancybox="group-4" class="fancyGallery"
                                    href="assets/img/portfolio/portfolio2-10.jpg">
                                    <img src="assets/img/icon/focus.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure class="single-shuffle col-3" data-groups='["photography","prototype","uidesign"]'>
                    <div class="aspect">
                        <div class="aspect__inner ssf-content">
                            <img src="assets/img/portfolio/portfolio2-11.jpg" alt="" />
                            <div class="ssf-hover">
                                <a data-fancybox="group-4" class="fancyGallery"
                                    href="assets/img/portfolio/portfolio2-11.jpg">
                                    <img src="assets/img/icon/focus.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </figure>
                <figure class="single-shuffle col-3" data-groups='["photography","branding","uxdesign"]'>
                    <div class="aspect">
                        <div class="aspect__inner ssf-content">
                            <img src="assets/img/portfolio/portfolio2-12.jpg" alt="" />
                            <div class="ssf-hover">
                                <a data-fancybox="group-4" class="fancyGallery"
                                    href="assets/img/portfolio/portfolio2-12.jpg">
                                    <img src="assets/img/icon/focus.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </figure>
                <div class="col-1 my-sizer-element"></div>
            </div>
        </div>
    </div>
</section>
<!-- /Our Portfolio -->

@endsection
