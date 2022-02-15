@extends('layouts.app')
@section('content')
<div class="container-fluid p-0">
    <div class="site-content-about">
        <div class="d-flex justify-content-center">
            <div class="d-flex flex-column">
                <div class="site-title-about">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/index.html">Home</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('client.project') }}">Produk</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-detail-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section>
                    <div class="container">
                        <div id="main-slider" class="splide">
                            <div class="splide__track">
                                    <ul class="splide__list">
                                        @forelse ($projects->gallery as $image)
                                        <li class="splide__slide">
                                            <img src="{{ Storage::url($image->image) }}" style="height:500px !important" class="project-img-detail">
                                        </li>
                                        @empty
                                        <li class="splide__slide">
                                            <img src="{{ asset('asset/img/mockup21.jpg') }}" class="project-img-detail">
                                        </li>
                                        @endforelse
                                    </ul>
                            </div>
                        </div>
                       <div id="thumbnail-slider" class="splide">
                            <div class="splide__track">
                                    <ul class="splide__list">
                                        @forelse ($projects->gallery as $image)
                                        <li class="splide__slide">
                                            <img src="{{ Storage::url($image->image) }}" class="project-img-detail">
                                        </li>
                                        @empty
                                        <li class="splide__slide">
                                            <img src="{{ asset('asset/img/mockup21.jpg') }}" class="project-img-detail">
                                        </li>
                                        @endforelse
                                    </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div>
            <div class="col-md-12 mt-5">
                <h3 class="card-title product-detail-title">{{ $projects->title }}</h3>
                <h5 style="color: gray;">{{ \Carbon\Carbon::parse($projects->created_at)->format('j F, Y') }}</h5>
                <p>{!! $projects->description !!}</p>
            </div>
        </div>
         <div class="spesifikasi" style="margin-top: 100px;">
            @isset($projects->video_link)
            <h3 class="mt-5 mb-4 product-detail-title">Video</h1>
                <video
                id="my-video"
                class="video-js mb-3 vid-cpn"
                controls
                preload="auto"
                width="590"
                height="400"
                poster="{{ Storage::url($projects->thumbnail) }}"
                data-setup="{}"
              >
                <source src="{{ Storage::url($projects->video_link) }}" type="video/mp4" />
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider upgrading to a
                  web browser that
                  <a href="https://videojs.com/html5-video-support/" target="_blank"
                    >supports HTML5 video</a
                  >
                </p>
              </video>
            @endisset
        </div>

        <div class="produk-lainnya">
            <h3 class="mt-5 mb-4 product-detail-title">Projeck lainnya</h1>
                <div id="owl-product-lainnya" class="owl-carousel owl-theme">
                    @forelse ($random as $ran)
                    <div class="item">
                        <div class="card cutomesis-product-detail" style="width:250px;">
                            <img src="{{ Storage::url($ran->gallery[0]->image) }}" alt="image1"  width="50" height="200"  data-zoom-src="{{ Storage::url($ran->gallery[0]->image) }}">
                            <div class="card-body">
                                <a href="{{ route('client.detail', $ran->slug) }}" class="link-to-detail">
                                    <p class="card-title product-title-detail">{!! mb_strimwidth($ran->title, 0, 15, "...") !!}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="item">
                        <div class="card cutomesis-product-detail" style="width:250px;">
                            <img src="/asset/img/mockup2.jpg" alt="image1"  width="50" height="200"  data-zoom-src="/asset/img/mockup2.jpg">
                            <div class="card-body">
                                <a href="" class="link-to-detail">
                                    <p class="card-title product-title-detail">Camera PCX2022</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card cutomesis-product-detail" style="width:250px;">
                            <img src="/asset/img/mockup2.jpg" alt="image1"  width="50" height="200"  data-zoom-src="/asset/img/mockup2.jpg">
                            <div class="card-body">
                                <a href="" class="link-to-detail">
                                    <p class="card-title product-title-detail">Camera PCX2022</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card cutomesis-product-detail" style="width:250px;">
                                <img src="/asset/img/mockup2.jpg" alt="image1"  width="50" height="200"  data-zoom-src="/asset/img/mockup2.jpg">
                            <div class="card-body">
                                <a href="" class="link-to-detail">
                                    <p class="card-title product-title-detail">Camera PCX2022</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card cutomesis-product-detail" style="width:250px;">
                            <img src="/asset/img/mockup2.jpg" alt="image1"  width="50" height="200"  data-zoom-src="/asset/img/mockup2.jpg">
                            <div class="card-body">
                                <a href="" class="link-to-detail">
                                    <p class="card-title product-title-detail">Camera PCX2022</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card cutomesis-product-detail" style="width:250px;">
                            <img src="/asset/img/mockup2.jpg" alt="image1"  width="50" height="200"  data-zoom-src="/asset/img/mockup2.jpg">
                            <div class="card-body">
                                <a href="" class="link-to-detail">
                                    <p class="card-title product-title-detail">Camera PCX2022</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card cutomesis-product-detail" style="width:250px;">
                            <img src="/asset/img/mockup2.jpg" alt="image1"  width="50" height="200"  data-zoom-src="/asset/img/mockup2.jpg">
                            <div class="card-body">
                                <a href="" class="link-to-detail">
                                    <p class="card-title product-title-detail">Camera PCX2022</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card cutomesis-product-detail" style="width:250px;">
                            <img src="/asset/img/mockup2.jpg" alt="image1"  width="50" height="200"  data-zoom-src="/asset/img/mockup2.jpg">
                            <div class="card-body">
                                <a href="" class="link-to-detail">
                                    <p class="card-title product-title-detail">Camera PCX2022</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card cutomesis-product-detail" style="width:250px;">
                            <img src="/asset/img/mockup2.jpg" alt="image1"  width="50" height="200"  data-zoom-src="/asset/img/mockup2.jpg">
                            <div class="card-body">
                                <a href="" class="link-to-detail">
                                    <p class="card-title product-title-detail">Camera PCX2022</p>
                                </a>
                            </div>
                        </div>
                    </div>    
                    @endforelse
                    
                </div>

        </div>

    </div>
</div>

@endsection
@push('addon-script')
<script src="https://vjs.zencdn.net/7.17.0/video.min.js"></script>
<script>
    
</script>
@endpush