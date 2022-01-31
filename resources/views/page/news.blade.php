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
                            <li class="breadcrumb-item active" aria-current="page">Berita</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-news">
    <div class="container">
        <h1 class="news-content-title mb-5">Info Dan Berita</h1>
        @forelse ($news as $item)
        <div class="card mb-3">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ Storage::url($item->image) }}" alt="" class="img-news">
                </div>
                <div class="col-md-7">
                    <h3 class="news-title">{{ $item->name ?? '' }}</h3>
                    <p class="news-detail">{!! mb_strimwidth($item->description, 0, 197, "...") !!} <span><a href="{{ route('client.news.detail', $item->slug) }}">Read More</a></span></p>
                    <p class="news-date">{{ \Carbon\Carbon::parse($item->created_at)->format('j F, Y') }}</p>
                </div>
            </div>
        </div>
        <div class="justify-content-center">
            {{ $news->links('vendor.pagination.bootstrap-4') }}
        </div>
        @empty
            <h3 class="text-center">Belum Ada Data</h3>
        @endforelse
    </div>
</div>
@endsection