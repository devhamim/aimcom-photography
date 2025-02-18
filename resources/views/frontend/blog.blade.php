@extends('frontend.layouts.app')
@section('content')
<!-- Main Wrapper-->
<main class="wrapper">
    <!-- Page Header -->
    <div class="wptb-page-heading">
        <div class="wptb-item--inner" style="background-image: url('{{ asset('frontend') }}/assets/img/background/page-header-bg-6.jpg');">
            <div class="wptb-item-layer wptb-item-layer-one">
                <img src="{{ asset('frontend') }}/assets/img/more/circle.png" alt="Decorative Circle">
            </div>
            <h2 class="wptb-item--title">{{ $headerTitle }}</h2>
        </div>
    </div>

    <!-- Blog Grid -->
    <section class="wptb-blog-grid-one">
        <div class="container">
            <div class="row">
                @if ($stores->isEmpty())
                    <div class="col-12">
                        <p class="text-center">No stories available for the selected category or subcategory.</p>
                    </div>
                @else
                    @foreach ($stores as $store)
                        <div class="col-lg-6 col-sm-6">
                            <div class="wptb-blog-grid1 active highlight wow fadeInLeft">
                                <div class="wptb-item--inner">
                                    <div class="wptb-item--image">
                                        <a href="{{ route('stories.details', $store->slug) }}" class="wptb-item-link">
                                            <img src="{{ asset('uploads/storie') }}/{{ $store->image }}" alt="{{ $store->title }}">
                                        </a>
                                    </div>
                                    <div class="wptb-item--holder">
                                        <h4 class="wptb-item--title">
                                            <a href="{{ route('stories.details', $store->slug) }}">
                                                {{ $store->title }}
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
</main>
@endsection
