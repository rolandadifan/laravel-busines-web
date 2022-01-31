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
                <div class="d-flex flex-row">
                    <i class="fas fa-map-marked-alt fa-3x m-2"></i>
                    <div class="d-flex flex-column">
                        <h5 class="mt-2 ml-2">Alamat</h3>
                        <p class="m-2 ml-2 service-desc">{{ $address->value ?? '' }}</p>
                    </div>
                </div>
                <div class="d-flex flex-row mt-3">
                    <i class="fas fa-question-circle fa-3x m-2"></i>
                    <div class="d-flex flex-column">
                        <h5 class="mt-2 ml-2">Informasi Kontak</h3>
                        <p class="m-2 ml-2 service-desc">{{ $email->value }}</p>
                        <p class="m-2 ml-2 service-desc">{{ $phone->value }}</p>
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
                                            <i class="fab fa-whatsapp fa-2x ml-2"></i>
                                        </a>
                                    </div>
                                    <div class="ft-social">
                                        <a href="{{ $fb->value ?? '#' }}" target="_blank" rel="noreferrer noopener">
                                           <i class="fab fa-facebook fa-2x ml-2"></i>
                                        </a>
                                    </div>
                                    <div class="ft-social">
                                        <a href="{{ $ig->value ?? '#' }}" target="_blank" rel="noreferrer noopener">
                                            <i class="fab fa-instagram fa-2x ml-2"></i>
                                        </a>
                                    </div>
                                    <div class="ft-social">
                                        <a href="{{ $yt->value ?? '#' }}" target="_blank" rel="noreferrer noopener">
                                            <i class="fab fa-youtube fa-2x ml-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h5 class="contact-title mb-5">Lokasi</h5>
                <iframe class="gmaps-lokasi" src="{{ $location->value }}" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <!-- <div class="col-md-12 mb-5">
              
            </div> -->
        </div>
    </div>
</div>

<div class="form-contact-us">
    <h5 class="contact-title mb-5">Atau Hubungi Kami</h5>
    <div class="form-contact container">
        <form> 
            <div class="form-group">
              <label for="exampleInputEmail1">Nama <span class="reuired">*</span></label>
              <input type="nama" class="form-control" id="exampleInputnama1" aria-describedby="namaHelp" required>
            </div>
            <div class="form-group">
              <label for="email">Email <span class="reuired">*</span></label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
              <label for="perusaan">Nama Perusaan <span class="reuired">*</span></label>
              <input type="perusaan" class="form-control" id="perusaan" required>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="no-hp">Ho HP <span class="reuired">*</span></label>
                        <input type="number" class="form-control" id="ho-hp" aria-describedby="namaHelp" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Negara <span class="reuired">*</span></label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>Indonesia</option>
                          <option>Amerika</option>
                          <option>Japan</option>
                          <option>Chinese</option>
                          <option>Korean</option>
                        </select>
                      </div>
                </div>
            </div>
            <div class="form-group">
                <label for="message">Pesan <span class="reuired">*</span></label>
                <textarea name="message" class="form-control" id="" cols="10" rows="10" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-contact">Submit</button>
          </form>
    </div>
</div>
@endsection