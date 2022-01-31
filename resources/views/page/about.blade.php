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
                            <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="content-about-destop">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        Profile Kami
                    </a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        Keunggulan Kami
                    </a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        Team Kunci
                    </a>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="content-tentang-kami">
                            <div class="row">
                                <div class="d-flex">
                                    <img src="{{ $pic->value === 'no pic' ? '/asset/img/pic-porto.jpg' : Storage::url($pic->value) }}" class="pic-about" alt="pic-porto">
                                    <p class="para-about">{{ $about->value }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="visi-misi mt-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="vm-title">Visi</h1>
                                    <p class="vm-content">{{ $visi->value }}</p>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="vm-title">Misi</h1>
                                    <p class="vm-content">{{ $misi->value }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
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
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="row">
                            @forelse ($employes as $data)
                            <div class="col-md-4">
                                <div class="card card-profile" style="width: 15rem;">
                                    <p class="text-center">
                                        <img src="{{ Storage::url($data->avatar) }}" class="card-img-top team-pic mt-2" alt="...">
                                        <div class="card-body">
                                            <h3 class="text-center">{{ $data->name }}</h3>
                                            <h5 class="card-title text-center ps-title">{{ $data->role }}</h5>
                                            <div class="d-flex mt-2 justify-content-center">
                                                <i class="fas fa-phone mr-2"></i>
                                                <p class="about-nohp">{{ $data->phone }}</p>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <i class="fas fa-envelope mr-2"></i>
                                                <p class="about-email">{{ $data->email }}</p>
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>
                            @empty
                                <h5 class="text-center">belum ada data</h5>
                            @endforelse
                            {{-- <div class="col-md-4">
                                <div class="card card-profile" style="width: 15rem;">
                                    <p class="text-center">
                                        <img src="asset/img/img2.png" class="card-img-top team-pic mt-2" alt="...">
                                        <div class="card-body">
                                            <h3 class="text-center">Samuel Jackson</h3>
                                            <h5 class="card-title text-center ps-title">Marketing</h5>
                                        </div>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-profile" style="width: 15rem;">
                                    <p class="text-center">
                                        <img src="asset/img/img3.png" class="card-img-top team-pic mt-2" alt="...">
                                        <div class="card-body">
                                            <h3 class="text-center">Samuel Jackson</h3>
                                            <h5 class="card-title text-center ps-title">Finance</h5>
                                        </div>
                                    </p>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<div class="content-about-mobile">
    <div class="container">
        <div class="col-12">
            <img src="/asset/img/pic-porto.jpg" class="pic-about-mb" alt="pic-porto">
        </div>
        <div class="col-md-12">
            <p class="para-about-mb">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, ratione ad libero aliquam nam assumenda consectetur ex neque eum accusamus totam vero. Explicabo sapiente optio reprehenderit rem ratione ut sit repellendus tempora, voluptatem perferendis repudiandae unde hic. Saepe minima voluptate excepturi vero! Dicta id deleniti itaque quos vitae laboriosam eum tempore numquam expedita voluptatum! Recusandae exercitationem temporibus laudantium. Asperiores, laboriosam. Iure nostrum ut sunt est, officia aperiam cupiditate repudiandae, ratione error dicta exercitationem blanditiis laudantium? Odio deserunt facere debitis saepe vitae. Deserunt quae velit incidunt asperiores autem illum tempore blanditiis eos. Tenetur repellendus voluptates voluptate ut, magni officia a minus?</p>
        </div>

        <div class="row mt-3">
            <div class="d-flex">
                <div class="col-sm-6">
                    <h1 class="vm-title">Visi</h1>
                    <p class="vm-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum neque dicta eveniet sint dolorum aspernatur pariatur enim libero veritatis. Alias similique suscipit hic consequuntur exercitationem. Eaque quisquam nemo tempora pariatur nesciunt temporibus cupiditate veniam amet tempore vel! Voluptatem, excepturi totam.</p>
                </div>
                <div class="col-sm-6">
                    <h1 class="vm-title">Misi</h1>
                    <p class="vm-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium laborum quis commodi iste, vitae quibusdam architecto deserunt perferendis reprehenderit quaerat possimus hic est a, itaque doloremque eos. Obcaecati, accusantium recusandae culpa, non, saepe dolores aperiam repudiandae labore consequatur odit ipsa?</p>
                </div>
            </div>
        </div>

        <h1 class="vm-title mt-5 mb-3">Keunggulan Kami</h1>
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

        <h1 class="vm-title mt-5 mb-3">Team Kunci</h1>
        <div class="col-sm-12">
            <div class="card" style="width: 15rem;">
                <p class="text-center">
                    <img src="asset/img/img1.png" class="card-img-top team-pic mt-2" alt="...">
                    <div class="card-body">
                        <h3  class="text-center">Samuel Jackson</h3>
                        <h5 class="card-title text-center ps-title">Direktur</h5>
                    </div>
                </p>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card" style="width: 15rem;">
                <p class="text-center">
                    <img src="asset/img/img2.png" class="card-img-top team-pic mt-2" alt="...">
                    <div class="card-body">
                        <h3 class="text-center">Samuel Jackson</h3>
                        <h5 class="card-title text-center ps-title">Marketing</h5>
                    </div>
                </p>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card" style="width: 15rem;">
                <p class="text-center">
                    <img src="asset/img/img3.png" class="card-img-top team-pic mt-2" alt="...">
                    <div class="card-body">
                        <h3 class="text-center">Samuel Jackson</h3>
                        <h5 class="card-title text-center ps-title">Finance</h5>
                    </div>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection