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
                            <li class="breadcrumb-item active" aria-current="page">Projek</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="prodoct-content">
    
    <!-- <div class="category-section">
        <div class="container">
            <h5 class="pc-title-content">Recomended Kategori</h5>
            <div class="row justify-content-center text-center">
                <div id="owl-category" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="card-custome">
                            <div class="card-title-custome">
                                <p class="m-2">Mobil</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-custome">
                            <div class="card-title-custome">
                                <p class="m-2">Mobil</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-custome">
                            <div class="card-title-custome">
                                <p class="m-2">Mobil</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-custome">
                            <div class="card-title-custome">
                                <p class="m-2">Mobil</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-custome">
                            <div class="card-title-custome">
                                <p class="m-2">Mobil</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-custome">
                            <div class="card-title-custome">
                                <p class="m-2">Mobil</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-custome">
                            <div class="card-title-custome">
                                <p class="m-2">Mobil</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-custome">
                            <div class="card-title-custome">
                                <p class="m-2">Mobil</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-custome">
                            <div class="card-title-custome">
                                <p class="m-2">Mobil</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-custome">
                            <div class="card-title-custome">
                                <p class="m-2">Mobil</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-custome">
                            <div class="card-title-custome">
                                <p class="m-2">Mobil</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card-custome">
                            <div class="card-title-custome">
                                <p class="m-2">Mobil</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div> -->

    <div class="product-list mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 recomend">
                    <h5 class="mt-4 mb-4 pc-title-content">Kategori</h5>
                    <div class="display-website">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Cras justo odio
                              <span class="badge bg-primary rounded-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Dapibus ac facilisis in
                              <span class="badge bg-primary rounded-pill">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Morbi leo risus
                              <span class="badge bg-primary rounded-pill">1</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Cras justo odio
                              <span class="badge bg-primary rounded-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Dapibus ac facilisis in
                              <span class="badge bg-primary rounded-pill">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Morbi leo risus
                              <span class="badge bg-primary rounded-pill">1</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Cras justo odio
                              <span class="badge bg-primary rounded-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Dapibus ac facilisis in
                              <span class="badge bg-primary rounded-pill">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Morbi leo risus
                              <span class="badge bg-primary rounded-pill">1</span>
                            </li>
                          </ul>
                    </div>
                      
                    <div class="display-mobile">
                        <div class="card">
                            <div class="row">
                                <div class="col-3">
                                    <div class="d-flex">
                                        <a href="">Mobil</a>
                                        <p style="font-size: 10px; margin-left: -10px;" class="">(14)</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="d-flex">
                                        <a href="">Mobil</a>
                                        <p style="font-size: 10px; margin-left: -10px;" class="">(14)</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="d-flex">
                                        <a href="">Mobil</a>
                                        <p style="font-size: 10px; margin-left: -10px;" class="">(14)</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="d-flex">
                                        <a href="">Mobil</a>
                                        <p style="font-size: 10px; margin-left: -10px;" class="">(14)</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="d-flex">
                                        <a href="">Mobil</a>
                                        <p style="font-size: 10px; margin-left: -10px;" class="">(14)</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="d-flex">
                                        <a href="">Mobil</a>
                                        <p style="font-size: 10px; margin-left: -10px;" class="">(14)</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="d-flex">
                                        <a href="">Mobil</a>
                                        <p style="font-size: 10px; margin-left: -10px;" class="">(14)</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="d-flex">
                                        <a href="">Mobil</a>
                                        <p style="font-size: 10px; margin-left: -10px;" class="">(14)</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="d-flex">
                                        <a href="">Mobil</a>
                                        <p style="font-size: 10px; margin-left: -10px;" class="">(14)</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-8">
                    <div class="filter-section">
                        <div class="col-sm-12" >
                            <div class="input-group" >
                             <input id="table_filter" type="text" placeholder="cari product anda" class="form-control search-input" aria-label="Text input with segmented button dropdown" >
                             <div class="input-group-btn" >
                              <button type="button" class="btn dropdown-toggle dropdown-toggle-split btn-filter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-filter fa-1x"></i></button>
                              <div class="dropdown-menu dropdown-menu-right" >
                                 <ul class="category_filters" >
                                  <li >
                                   <input type="radio" name="radios" id="Sales" value="Sales" ><label class="category-label" for="Sales" >Terbaru</label>
                                  </li>
                                  <li >
                                   <input type="radio" name="radios" id="Support" value="Support" ><label class="category-label" for="Support">Terlama</label>
                                  </li>
                                 </ul>
                              </div>
                              <button id="searchBtn" type="button" class="btn btn-search btn-filter"><span class="glyphicon glyphicon-search" >&nbsp;</span> <span class="label-icon" >Search</span></button>
                             </div>
                            </div>
                           </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card cutomesis card-product-list mt-4" style="width:250px;">
                                <img src="/asset/img/mockup2.jpg" alt="image1" height="200" class="zoom-image" data-zoom-src="/asset/img/mockup2.jpg">
                                <div class="card-body">
                                    <a href="{{ route('client.detail') }}" class="link-to-detail">
                                        <h5 class="card-title product-title">Camera PCX2022</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card cutomesis card-product-list mt-4" style="width:250px;">
                                <img src="/asset/img/mockup2.jpg" alt="image1" height="200" class="zoom-image" data-zoom-src="/asset/img/mockup2.jpg">
                                <div class="card-body">
                                    <a href="/product-detail.html" class="link-to-detail">
                                        <h5 class="card-title product-title">Camera PCX2022</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card cutomesis card-product-list mt-4" style="width:250px;">
                                <img src="/asset/img/mockup2.jpg" alt="image1" height="200" class="zoom-image" data-zoom-src="/asset/img/mockup2.jpg">
                                <div class="card-body">
                                    <a href="" class="link-to-detail">
                                        <h5 class="card-title product-title">Camera PCX2022</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card cutomesis card-product-list mt-4" style="width:250px;">
                                <img src="/asset/img/mockup2.jpg" alt="image1" height="200" class="zoom-image" data-zoom-src="/asset/img/mockup2.jpg">
                                <div class="card-body">
                                    <a href="" class="link-to-detail">
                                        <h5 class="card-title product-title">Camera PCX2022</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card cutomesis card-product-list mt-4" style="width:250px;">
                                <img src="/asset/img/mockup2.jpg" alt="image1" height="200" class="zoom-image" data-zoom-src="/asset/img/mockup2.jpg">
                                <div class="card-body">
                                    <a href="" class="link-to-detail">
                                        <h5 class="card-title product-title">Camera PCX2022</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card cutomesis card-product-list mt-4" style="width:250px;">
                                <img src="asset/img/product1.png" alt="image1" height="200" class="zoom-image" data-zoom-src="asset/img/product1.png">
                                <div class="card-body">
                                    <a href="" class="link-to-detail">
                                        <h5 class="card-title product-title">Camera PCX2022</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection