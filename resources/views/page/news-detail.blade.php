@extends('layouts.app')
@section('content')
<div class="container-fluid p-0">
    <div class="site-content-about">
        <div class="d-flex justify-content-center">
            <div class="d-flex flex-column">
                <div class="site-title-about">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('client.news') }}">Berita</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Berita Terkini</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="news-detail-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section>
                    <div class="container text-center">
                        <img src="{{ Storage::url($news->image) }}" width="500" height="300" alt="image_berita">
                    </div>
                </section>
            </div>
        </div>
        <div class="spesifikasi">
            <h3 class="mt-5 mb-4 product-detail-title">{{ $news->name ?? '' }}</h1>
            <h5 class="mb-3">{{ \Carbon\Carbon::parse($news->created_at)->format('j F, Y') }}</h5>
            <p>{!! $news->description !!}</p>
        </div>

        <div class="produk-lainnya">
            <h3 class="mt-5 mb-4 product-detail-title">Berita Lainnya</h1>
                <div id="owl-product-lainnya" class="owl-carousel owl-theme">
                    @forelse ($random as $rand)
                    <div class="item">
                        <div class="card cutomesis-product-detail" style="width:250px;">
                            <img src="{{ Storage::url($rand->image) }}" alt="image1"  width="50" height="200"  data-zoom-src="{{ Storage::url($rand->image) }}">
                            <div class="card-body">
                                <a href="{{ route('client.news.detail', $rand->slug) }}" class="link-to-detail">
                                    <p class="card-title product-title-detail">{{ mb_strimwidth($rand->name, 0, 21,'...') }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    @empty
                        <h3 class="text-center">Belum ada data</h3>
                    @endforelse
                    
                </div>

        </div>

    </div>
</div>
@endsection