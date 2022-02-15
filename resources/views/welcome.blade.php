@extends('layouts.app')
@section('content')
<div class="container-fluid p-0">
    <div class="site-content">
        <div class="d-flex justify-content-center">
        </div>
    </div>
</div>





<div class="section-1">
    <div class="container">
        <h1 class="heading-1 text-center">Project Terbaru Kami</h1>
        <div class="hline"></div>
        <ul class="card-wrapper">
            <div class="row">
                @isset($projects[0])
                <div class="col-md-6">
                    <li class="card-home">
                        <img src='{{ Storage::url($projects[0]->gallery[0]->image) }}' alt=''>
                        <h3 class="text-center"><a href="{{ route('client.detail', $projects[0]->slug) }}">{{ $projects[0]->title }}</a></h3>
                      </li>
                </div>    
                @endisset

                @isset($projects[1])
                <div class="col-md-6">
                    <li class="card-home">
                        <img src='{{ Storage::url($projects[1]->gallery[0]->image) }}' alt=''>
                        <h3 class="text-center"><a href="{{ route('client.detail', $projects[1]->slug) }}">{{ $projects[1]->title }}</a></h3>
                      </li>
                </div>
                @endisset

                @isset($projects[2])
                <div class="col-md-4 mt-5">
                    <li class="card-home">
                        <img src='{{ Storage::url($projects[2]->gallery[0]->image) }}' alt=''>
                        <h3 class="text-center"><a href="{{ route('client.detail', $projects[2]->slug) }}">{{ $projects[2]->title }}</a></h3>
                      </li>
                </div>
                @endisset

                @isset($projects[3])
                <div class="col-md-4 mt-5">
                    <li class="card-home">
                        <img src='{{ Storage::url($projects[3]->gallery[0]->image) }}' alt=''>
                        <h3 class="text-center"><a href="{{ route('client.detail', $projects[3]->slug) }}">{{ $projects[3]->title }}</a></h3>
                      </li>
                </div>
                @endisset

                @isset($projects[4])
                <div class="col-md-4 mt-5">
                    <li class="card-home">
                        <img src='{{ Storage::url($projects[4]->gallery[0]->image) }}' alt=''>
                        <h3 class="text-center"><a href="{{ route('client.detail', $projects[4]->slug) }}">{{ $projects[4]->title }}</a></h3>
                    </li>
                </div>
                @endisset
                
            </div>
            
            
        </ul>
        <div class="container ml-3 mt-5 mb-5">
            <a href="{{ route('client.project') }}">
                <h5 class="news-to-lainya">Lainnya...</h5>
            </a>
        </div>
    </div>
</div>

<div class="section-2">
    <div class="container-fluid text-center">
        <div class="d-flex">
            <div class="d-flex flex-column ">
                <h1 class="heading-1">Tentang Kami</h1>
                <div class="hline hline-about"></div> 
                <p class="para">{!! mb_strimwidth($about->value, 0, 381, "...") ?? '' !!}<a href="{{ url('/tentang-kami') }}"><span>Read more</span></a></p>
            </div>
        </div>
    </div>
</div>

<div class="section-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="d-flex flex-row">
                    <i class="fas fa-headset fa-3x m-2"></i>
                    <div class="d-flex flex-column">
                        <h3 class="m-2">24/7 Support</h3>
                        <p class="m-2 service-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quaerat accusamus quam? Qui, sed obcaecati?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-row">
                    <i class="fas fa-seedling fa-3x m-2"></i>
                    <div class="d-flex flex-column">
                        <h3 class="m-2">Quality</h3>
                        <p class="m-2 service-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quaerat accusamus quam? Qui, sed obcaecati?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-row">
                    <i class="fas fa-truck fa-3x m-2"></i>
                    <div class="d-flex flex-column">
                        <h3 class="m-2">Deliver</h3>
                        <p class="m-2 service-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quaerat accusamus quam? Qui, sed obcaecati?</p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row mt-2">
            <div class="col-md-4">
                <div class="d-flex flex-row">
                    <i class="fas fa-user-shield fa-3x m-2"></i>
                    <div class="d-flex flex-column">
                        <h3 class="m-2">Secure</h3>
                        <p class="m-2 service-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quaerat accusamus quam? Qui, sed obcaecati?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-row">
                    <i class="fas fa-hand-holding-usd fa-3x m-2"></i>
                    <div class="d-flex flex-column">
                        <h3 class="m-2">Offer</h3>
                        <p class="m-2 service-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quaerat accusamus quam? Qui, sed obcaecati?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-row">
                    <i class="fas fa-atom fa-3x m-2"></i>
                    <div class="d-flex flex-column">
                        <h3 class="m-2">technology</h3>
                        <p class="m-2 service-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quaerat accusamus quam? Qui, sed obcaecati?</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="section-4">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <iframe class="vid-cpn" style="margin-top: 20px;z-index: 10; width: 450px; max-width: 100%;"  height="300" src="https://www.youtube.com/embed/{{ $yt->value ?? 'dqrsB7A6CFc' }}?autoplay" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="box-back"></div>
            </div>
            <div class="col-md-5">
                <h1 class="text-white heading-1">Kenali Kami</h1>
                <div class="hline-knowus"></div> 
                <p class="para-1">{{ $knowus->value }}</p>
                {{-- <a href="/portofolio.html">More...</a> --}}
            </div>
        </div>
    </div>
</div>

<div class="section-5">
    <div class="container text-center">
        <h1 class="heading-5 mb-1">Info & Berita</h1>
        <div class="hline"></div>
        <div class="main-content-news">
            <div class="row">
                @forelse ($news as $nw)
                <div class="@if (count($news) === 1) col-md-12 @elseif(count($news) === 2) col-md-6  @elseif(count($news) === 3) col-md-4 @elseif(count($news) === 4) col-md-3  @endIf col-6">
                    <section class="bg">
                        <div class="blog-card">
                            <img class="blog-img" src="{{ Storage::url($nw->image) }}" alt="image" />
                            <div class="text-overlay">
                                <h2 class="news-title">{{ mb_strimwidth($nw->name, 0, 30, "...") ?? '' }}</h2>
                                <p>{{ \Carbon\Carbon::parse($nw->created_at)->format('j F, Y') }}</p>
                                <p class="news-desc">{!! mb_strimwidth($nw->description, 0, 50, "...") ?? '' !!} &nbsp;&nbsp;<a href="{{ route('client.news.detail', $nw->slug) }}" class="read-more">Read More</a></p>
                            </div>
                        </div>
                    </section>
                </div>
                @empty
                    <h3 class="text-center">Belum ada data</h3>
                @endforelse
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <a href="{{ route('client.news') }}">
            <h5 class="news-to-lainya">Lainnya...</h5>
        </a>
    </div>
</div>

<div class="contact-home mt-5">
    <div class="join__container">
        <div class="join__background">
            <img src="https://images.unsplash.com/photo-1523731407965-2430cd12f5e4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" />
        </div>
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-md-8 col-12">
                    <p class="mt-4">Butuh Informasi Lebih Lanjut?</p>
                    <!-- <p>Hubungi Kami</p> -->
                </div>
                <div class="col-md-3 col-12">
                    <a  href="{{ url('/hubungi-kami') }}" class="btn primary__button" >Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection