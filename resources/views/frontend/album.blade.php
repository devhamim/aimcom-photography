@extends('frontend.layouts.app')
@section('content')

<!-- Gallery Area -->
<section class="albums-area">
    <div class="container">
        <div class="row">
            @foreach ($albums as $album)
                <div class="col-md-4">
                    <div class="single-album-V3">
                        <div class="sa-img">
                            <img src="{{ asset('uploads/album') }}/{{ $album->image }}" alt="">
                        </div>
                        <div class="sa-text">
                            <a href="{{ route('albums.details', $album->slug) }}">{{ $album->title }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="my-3">
                {{ $albums->links() }}
            </div>
        </div>
    </div>
</section>
<!-- /Gallery Area -->
        
@endsection
