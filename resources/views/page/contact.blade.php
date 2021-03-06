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
                            <li class="breadcrumb-item active" aria-current="page">Hubungi Kami</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5 class="contact-title mb-5">Info</h5>
                <div class="hline-contact"></div>
                <div class="d-flex flex-row">
                    <i class="fas fa-map-marked-alt fa-3x m-2"></i>
                    <div class="d-flex flex-column">
                        <h5 class="mt-2 ml-3">Alamat</h3>
                        <p class="m-2 ml-2 service-desc">{{ $address->value ?? '' }}</p>
                    </div>
                </div>
                <div class="d-flex flex-row mt-3">
                    <i class="fas fa-question-circle fa-3x m-2" style="margin-top: 30px !important"></i>
                    <div class="d-flex flex-column">
                        <h5 class="mt-2 ml-3">Informasi Kontak</h3>
                        <p class="m-2 ml-3 service-desc">{{ $email->value }}</p>
                        <p class="m-2 ml-3 service-desc">{{ $phone->value }}</p>
                    </div>
                </div>
                <div class="d-flex flex-row mt-3">
                    <i class="fas fa-users fa-3x m-2"></i>
                    <div class="d-flex flex-column">
                        <h5 class="mt-2 ml-2">Social Media</h3>
                            <div class="row img-sc ml-2">
                                <div class="d-flex">
                                    <div class="ft-social">
                                        <a href="whatsapp://send?abid={{ $wa->value }}" target="_blank" rel="noreferrer noopener">
                                            <i class="fab fa-whatsapp fa-2x ml-2" style="color: #25D366 !imporant"></i>
                                        </a>
                                    </div>
                                    <div class="ft-social">
                                        <a href="{{ $fb->value ?? '#' }}" target="_blank" rel="noreferrer noopener">
                                           <i class="fab fa-linkedin fa-2x ml-2" style="color: #0072b1 !important"></i>
                                        </a>
                                    </div>
                                    <div class="ft-social">
                                        <a href="{{ $ig->value ?? '#' }}" target="_blank" rel="noreferrer noopener">
                                            <i class="fab fa-instagram fa-2x ml-2" style="color: #f56040  !important"></i>
                                        </a>
                                    </div>
                                    <div class="ft-social">
                                        <a href="{{ $yt->value ?? '#' }}" target="_blank" rel="noreferrer noopener">
                                            <i class="fab fa-youtube fa-2x ml-2" style="color: #FF0000 !important"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h5 class="contact-title mb-5">Lokasi</h5>
                <div class="hline-contact"></div>
                <iframe class="gmaps-lokasi" src="{{ $location->value }}" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <!-- <div class="col-md-12 mb-5">
              
            </div> -->
        </div>
    </div>
</div>

<div class="form-contact-us">
    <h5 class="contact-title mb-5">Atau Hubungi Kami</h5>
    <div class="hline-contact"></div>
    <div class="form-contact container">
        <form action="{{ route('send.mail') }}" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="form-group">
              <label for="exampleInputEmail1">Nama <span class="reuired">*</span></label>
              <input type="nama" name="name" class="form-control" id="exampleInputnama1" aria-describedby="namaHelp" required>
            </div>
            <div class="form-group">
              <label for="email">Email <span class="reuired">*</span></label>
              <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
              <label for="perusaan">Nama Perusaan <span class="reuired">*</span></label>
              <input type="text" name="company" class="form-control" id="perusaan" required>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="no-hp">Ho HP <span class="reuired">*</span></label>
                        <input type="number" name="phone" class="form-control" id="ho-hp" aria-describedby="namaHelp" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Negara <span class="reuired">*</span></label>
                        <select class="form-control" name="country" id="exampleFormControlSelect1">
                          <option value="test">Indonesia</option>
                          <option>Amerika</option>
                          <option>Japan</option>
                          <option>Chinese</option>
                          <option>Korean</option>
                        </select>
                      </div>
                </div>
            </div>
            <div class="form-group">
                <label for="perusaan">File</label>
                <input type="file" name="file" class="form-control" id="perusaan">
              </div>
            <div class="form-group">
                <label for="message">Pesan <span class="reuired">*</span></label>
                <textarea  name="message" class="form-control" id="" cols="10" rows="10" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-contact">Submit</button>
          </form>
    </div>
</div>
@endsection