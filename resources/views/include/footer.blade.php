<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-5">
                <h3 class="ft-cp-name ft-logo">
                    <img src="/asset/img/final logo transparant.png" alt="">
                </h3>
                <div class="social-media">
                    <p class="mt-3 sc-media-title text-white">Follow US</p>
                    <div class="row img-sc">
                        <d class="d-flex">
                            <div class="ft-social">
                                <a href="whatsapp://send?abid={{ $wa->value }}" target="_blank" rel="noreferrer noopener">
                                    <i class="fab fa-whatsapp fa-2x ml-2" style="color: #25D366"></i>
                                </a>
                            </div>
                            <div class="ft-social">
                                <a href="{{ $fb->value ?? '#' }}" target="_blank" rel="noreferrer noopener">
                                   <i class="fab fa-linkedin fa-2x ml-2" style="color: #0072b1"></i>
                                </a>
                            </div>
                            <div class="ft-social">
                                <a href="{{ $ig->value ?? '#' }}" target="_blank" rel="noreferrer noopener">
                                    <i class="fab fa-instagram fa-2x ml-2" style="color: #f56040  "></i>
                                </a>
                            </div>
                            <div class="ft-social">
                                <a href="{{ $yt->value ?? '#' }}" target="_blank" rel="noreferrer noopener">
                                    <i class="fab fa-youtube fa-2x ml-2" style="color: #FF0000"></i>
                                </a>
                            </div>
                        </d>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <h3 class="ft-cp-name">Company</h3>
                <a href="{{ url('/tentang-kami') }}" class="ft-cp-ftr mb-3">Tentang Kami</a><br>
                <a href="{{ url('/project') }}" class="ft-cp-ftr mb-3">Project</a><br>
                <a href="{{ url('/berita') }}" class="ft-cp-ftr mb-3">Berita</a><br>
                <a href="{{ url('/hubungi-kami') }}" class="ft-cp-ftr mb-3">Hubungi Kami</a><br>
                
            </div>
            <div class="col-md-4 mt-5">
                <h3 class="ft-cp-name">Contact</h3>
                <p class="jm-op">{{ $address->value }}</p>
                <p class="jm-op">{{ $phone->value }}</p>
                <p class="jm-op">{{ $email->value }}</p>
            </div>
        </div>
        <hr>
        <p class="text-center mb-1">&copy; All rights reserved</p>
    </div>
</footer>