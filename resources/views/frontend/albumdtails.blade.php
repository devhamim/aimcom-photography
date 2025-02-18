@extends('frontend.layouts.app')
@section('content')

<!-- Innerpage Top Area -->
<section class="innerpagetop-area">
    <div class="pipa-bg">
        <img src="{{ asset('frontend') }}/assets/img/bg/innertop-bg-1.jpg" alt="">
    </div>
    <div class="pipa-text">
        <h3>{{ $albums->category }}</h3>
    </div>
</section>
<!-- /Innerpage Top Area -->
<!-- Gallery Area -->
<div class="gallery3-area">
    <div class="container-fluid">
        <div class="row">
            
            @if (!empty($galleryImages))
                @foreach ($galleryImages as $image)           
                    <div class="col-md-6 no-pad">
                        <div class="singleg3-gallery">
                            <a data-fancybox="group-4" class="fancyGallery" href="{{ asset('uploads/album/gallery/' . $image) }}">
                                <img src="{{ asset('uploads/album/gallery/' . $image) }}" alt="">
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
<!-- /Gallery Area -->

@endsection
