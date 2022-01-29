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
        <div class="card mb-3">
            <div class="row">
                <div class="col-md-5">
                    <img src="/asset/img/beritA.jpg" alt="" class="img-news">
                </div>
                <div class="col-md-7">
                    <h3 class="news-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, similique.</h3>
                    <p class="news-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et quos dolorem similique, tempore corrupti quasi officia quo, dolor, eum quis natus sunt ab? Voluptatum aut ab dolore harum illum quisquam. <span><a href="{{ route('client.news.detail') }}">Read More...</a></span></p>
                    <p class="news-date">05-01-2022</p>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="row">
                <div class="col-md-5">
                    <img src="/asset/img/beritA.jpg" alt="" class="img-news">
                </div>
                <div class="col-md-7">
                    <h3 class="news-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, similique.</h3>
                    <p class="news-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et quos dolorem similique, tempore corrupti quasi officia quo, dolor, eum quis natus sunt ab? Voluptatum aut ab dolore harum illum quisquam. <span><a href="#">Read More...</a></span></p>
                    <p class="news-date">05-01-2022</p>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="row">
                <div class="col-md-5">
                    <img src="/asset/img/beritA.jpg" alt="" class="img-news">
                </div>
                <div class="col-md-7">
                    <h3 class="news-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, similique.</h3>
                    <p class="news-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et quos dolorem similique, tempore corrupti quasi officia quo, dolor, eum quis natus sunt ab? Voluptatum aut ab dolore harum illum quisquam. <span><a href="#">Read More...</a></span></p>
                    <p class="news-date">05-01-2022</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection