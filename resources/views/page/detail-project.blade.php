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
                            <li class="breadcrumb-item" aria-current="page"><a href="/product.html">Produk</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Camera PCX2022</li>
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
                        <div class="carousel">
                            <input type="radio" name="slides" checked="checked" id="slide-1">
                            <input type="radio" name="slides" id="slide-2">
                            <input type="radio" name="slides" id="slide-3">
                            <input type="radio" name="slides" id="slide-4">
                            <input type="radio" name="slides" id="slide-5">
                            <input type="radio" name="slides" id="slide-6">
                            <ul class="carousel__slides">
                                <li class="carousel__slide">
                                    <figure>
                                        <div>
                                            <img src="/asset/img/mockup2.jpg" alt="">
                                        </div>
                                    </figure>
                                </li>
                                <li class="carousel__slide">
                                    <figure>
                                        <div>
                                            <img src="/asset/img/mockup2.jpg" alt="">
                                        </div>
                                    </figure>
                                </li>
                                <li class="carousel__slide">
                                    <figure>
                                        <div>
                                            <img src="/asset/img/mockup2.jpg" alt="">
                                        </div>
                                    </figure>
                                </li>
                                <li class="carousel__slide">
                                    <figure>
                                        <div>
                                            <img src="/asset/img/mockup2.jpg" alt="">
                                        </div>
                                    </figure>
                                </li>
                                <li class="carousel__slide">
                                    <figure>
                                        <div>
                                            <img src="/asset/img/mockup2.jpg" alt="">
                                        </div>
                                    </figure>
                                </li>
                                <li class="carousel__slide">
                                    <figure>
                                        <div>
                                            <img src="/asset/img/mockup2.jpg" alt="">
                                        </div>
                                    </figure>
                                </li>
                            </ul>    
                            <ul class="carousel__thumbnails">
                                <li>
                                    <label for="slide-1"><img src="/asset/img/mockup2.jpg" alt=""></label>
                                </li>
                                <li>
                                    <label for="slide-2"><img src="/asset/img/mockup2.jpg" alt=""></label>
                                </li>
                                <li>
                                    <label for="slide-3"><img src="/asset/img/mockup2.jpg" alt=""></label>
                                </li>
                                <li>
                                    <label for="slide-4"><img src="/asset/img/mockup2.jpg" alt=""></label>
                                </li>
                                <li>
                                    <label for="slide-5"><img src="/asset/img/mockup2.jpg" alt=""></label>
                                </li>
                                <li>
                                    <label for="slide-6"><img src="/asset/img/mockup2.jpg" alt=""></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div>
            <div class="col-md-12 mt-5">
                <h3 class="card-title product-detail-title">Camera PCX2022</h3>
                <h5 style="color: gray;">Jnuary 12,2021</h5>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis sint, enim consequuntur a numquam, repellat veniam eveniet repellendus nulla, perferendis dicta excepturi eaque provident alias possimus. Sed repellendus a aut nostrum nam eius repudiandae dignissimos voluptatum sit? Eos, id dolorem.</p>
            </div>
        </div>
         <div class="spesifikasi" style="margin-top: 100px;">
            <h3 class="mt-5 mb-4 product-detail-title">Video</h1>
                <iframe class="vid-cpn" width="590" height="400" src="https://www.youtube.com/embed/dqrsB7A6CFc?autoplay" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="produk-lainnya">
            <h3 class="mt-5 mb-4 product-detail-title">Projeck lainnya</h1>
                <div id="owl-product-lainnya" class="owl-carousel owl-theme">
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
                   
                    
                </div>

        </div>

    </div>
</div>

@endsection