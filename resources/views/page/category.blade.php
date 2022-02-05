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

    <div class="product-list mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 recomend">
                    <h5 class="mt-4 mb-4 pc-title-content">Kategori</h5>
                    <div class="display-website">
                        <ul class="list-group">
                            @forelse ($categories as $ctg)
                            <form action="{{ url('/project/category/search') }}" method="get">
                                <input type="hidden" name="id" value="{{ $ctg->id }}">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <button type="submit" class="ctg-all" style="border: none; background: none;">{{ $ctg->name }}</button>
                                  <span class="badge bg-primary rounded-pill px-2 py-1">{{ count($ctg->project) }}</span>
                                </li>
                            </form>
                            @empty
                                <h3 class="text-center">belum ada data</h3>
                            @endforelse
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
                    <div class="mb-2 row">
                        <div class="col-md-6"> <h3>Total Data Pencarian {{ count($projects) }}</h3></div>
                        <div class="col-md-6">
                            <button class="btn btn-primary btn-md" onclick="javascript:location.href='{{ route('client.project') }}'"
                            >Reset</button>
                        </div>
                    </div>
                    <div class="filter-section row">
                        <div class="col-sm-11">
                            <form action="{{ route('client.cari') }}" method="get">
                                <div class="input-group">
                                 <input id="table_filter" type="text" placeholder="cari product anda" class="form-control search-input" aria-label="Text input with segmented button dropdown" name="q">
                                 <div class="input-group-btn" >
                                  <button id="searchBtn" type="submit" class="btn btn-search btn-filter"><span class="glyphicon glyphicon-search" >&nbsp;</span> <span class="label-icon" >Search</span></button>
                                 </div>
                                </div>
                            </form>
                           </div>
                           <div class="col-sm-1" style="margin-left: -20px">
                            <button type="button" class="btn dropdown-toggle dropdown-toggle-split btn-filter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-filter fa-1x"></i></button>
                               <div class="dropdown-menu dropdown-menu-right" >
                                  <ul class="category_filters" >
                                   <li >
                                    <input type="radio" name="radios" id="Sales" value="Sales" ><label class="category-label" onclick="javascript:location.href='{{ route('client.project') }}'" >Terbaru</label>
                                   </li>
                                   <li >
                                    <input type="radio" name="radios" id="Support" value="Support" ><label class="category-label" onclick="javascript:location.href='{{ route('client.project.latest') }}'">Terlama</label>
                                   </li>
                                  </ul>
                             </div>
                        </div>
                    </div>

                    <div class="row">
                        @forelse ($projects as $project)
                        <div class="col-md-4">
                            <div class="card cutomesis card-product-list mt-4" style="width:250px;">
                                <img src="{{ Storage::url($project->gallery[0]->image) }}" alt="image1" height="200" class="zoom-image" data-zoom-src="{{ Storage::url($project->gallery[0]->image) }}">
                                <div class="card-body">
                                    <a href="{{ route('client.detail', $project->slug) }}" class="link-to-detail">
                                        <h5 class="card-title product-title text-center">{{ $project->title }}</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @empty
                            <h3 class="text-center">Data belum ada</h3>
                        @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
<script>

</script>
@endpush