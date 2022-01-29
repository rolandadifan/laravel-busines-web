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
                        <p class="m-2 ml-2 service-desc">3030 N. Rocky Point Dr. W. #600
                            Tampa, FL 33607</p>
                    </div>
                </div>
                <div class="d-flex flex-row mt-3">
                    <i class="fas fa-question-circle fa-3x m-2"></i>
                    <div class="d-flex flex-column">
                        <h5 class="mt-2 ml-2">Informasi Kontak</h3>
                        <p class="m-2 ml-2 service-desc">company@company.com</p>
                        <p class="m-2 ml-2 service-desc">(012) 3456789</p>
                    </div>
                </div>
                <div class="d-flex flex-row mt-3">
                    <i class="fas fa-users fa-3x m-2"></i>
                    <div class="d-flex flex-column">
                        <h5 class="mt-2 ml-2">Social Media</h3>
                            <div class="row img-sc ml-2">
                                <d class="d-flex">
                                    <div class="ft-social">
                                        <a href="#">
                                            <i class="fab fa-whatsapp fa-2x ml-2"></i>
                                        </a>
                                    </div>
                                    <div class="ft-social">
                                        <a href="#">
                                           <i class="fab fa-facebook fa-2x ml-2"></i>
                                        </a>
                                    </div>
                                    <div class="ft-social">
                                        <a href="#">
                                            <i class="fab fa-instagram fa-2x ml-2"></i>
                                        </a>
                                    </div>
                                    <div class="ft-social">
                                        <a href="#">
                                            <i class="fab fa-youtube fa-2x ml-2"></i>
                                        </a>
                                    </div>
                                </d>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h5 class="contact-title mb-5">Lokasi</h5>
                <iframe class="gmaps-lokasi" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31734.271206146575!2d106.88305276912207!3d-6.159690214577223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f530a0e9f581%3A0x16c6fe09cb072ae0!2sKec.%20Klp.%20Gading%2C%20Kota%20Jkt%20Utara%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1641178806194!5m2!1sid!2sid" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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