{{-- navbar --}}

<div class="row flex position-relative jutify-content-between align-items-center contact-info bg-dark text-white" style="z-index: 100;">
    <div class="col-md-5 p-4 ms-5 gap-5">
        <span class="me-3"><i class="fa fa-envelope-open me-2"></i>symbioteuniversity@gmail.com</span>
        <span class="me-3"><i class="fa fa-phone me-2"></i>+62-0881-0260-73106</span>
    </div>
    
    <div class="col-md-3 ms-auto">
        <div class="dropdown p-1 px-3 py-2 w-75 font-monospace" style="background: #FFDD00;">
        <button class="btn btn-secondary dropdown-toggle bg-light text-dark border-0 w-100" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-flag text-danger me-2"></i>INDONESIA
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">ENGLISH</a></li>
        </ul>
    </div>
    </div>
</div>

<div id="carouselExampleFade" class="carousel slide carousel-fade position-relative" data-bs-ride="carousel" data-interval="1000">
    <div class="carousel-inner position-relative" style="height: fit-content;">
      @if ( request()->is('/') )
        <div class="carousel-item active" style="height: 80vh;">
            <img src="https://images.unsplash.com/photo-1579389083046-e3df9c2b3325?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=MnwxfDB8MXxyYW5kb218MHx8dW5pdmVyc2l0eXx8fHx8fDE2OTg0NTU0MjY&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1920" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" style="height: 80vh;">
            <img src="https://images.unsplash.com/photo-1531545514256-b1400bc00f31?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=MnwxfDB8MXxyYW5kb218MHx8dW5pdmVyc2l0eXx8fHx8fDE2OTg0NTU0NzQ&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1920" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" style="height: 80vh;">
            <img src="https://images.unsplash.com/photo-1515125520141-3e3b67bc0a88?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=MnwxfDB8MXxyYW5kb218MHx8dW5pdmVyc2l0eXx8fHx8fDE2OTg0NTU1NDM&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1920" class="d-block w-100" alt="...">
        </div>
      @else
        <div class="carousel-item active bg-primary" style="height: 80vh;">
            <img src="https://images.unsplash.com/photo-1579389083046-e3df9c2b3325?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=MnwxfDB8MXxyYW5kb218MHx8dW5pdmVyc2l0eXx8fHx8fDE2OTg0NTU0MjY&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1920" class="d-block w-100" alt="...">
        </div>
       
      @endif
    </div>

    <div class="opa-background position-absolute top-0 left-0 opacity-5" style="z-index: 1; background: rgb(0, 0, 0, .3); width: 100%; height: 100%;">
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark position-absolute top-0 left-0 w-100 mt-4" style="z-index:2;">
        <div class="container-fluid">
          <div class="logo position-absolute" style="z-index: 1; top: 5%; left: 5%;">     
          </div>
            <a class="navbar-brand" href="/" style="transform: translate(30%, 0);">
              <img width="200" src="https://www.ui.ac.id/wp-content/uploads/2022/12/logoui_hres.png" alt="">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-6 text-white align-items-center" style="transform: translate(-15%, 0);">
              <li class="nav-item me-3">
                <a class="nav-link text-white" href="#">Akademik</a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link text-white" href="#">Riset dan Inovasi</a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link text-white" href="{{ url('/kampus') }}">Kampus</a>
              </li>
              <li class="nav-item me-3 berita-dan-pengumuan">
                <div class="dropdown ">
                  <button class="btn-berita btn text-white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    People
                  </button>
                  <ul class="dropdown-menu p-3 rounded-0 mt-4 fs-6" aria-labelledby="dropdownMenuButton1" style="background: #000;">
                    <li class="my-2"><a href="{{ url('/people/dekan-fakultas') }}" class="text-white text-decoration-none">Dekan Fakultas</a></li>
                    <li class="my-2"><a href="{{ url('/people/pimpinan-universitas') }}" class="text-white text-decoration-none">Pimpinan Universitas</a></li>
                    <li class="my-2"><a href="{{ url('/people/pusat-administrasi-universitas') }}" class="text-white text-decoration-none">Pusat Administrasi Universitas</a></li>
                  </ul>
                </div>
              </li>

              <li class="nav-item me-3 berita-dan-pengumuan">
                <div class="dropdown ">
                  <button class="btn-berita btn text-white" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    Berita dan Pengumuman
                  </button>
                  <ul class="dropdown-menu p-3 rounded-0 mt-4 fs-6" aria-labelledby="dropdownMenuButton2" style="background: #000;">
                    <li class="my-2" style=" width: 100%;"><a href="{{ url('/berita') }}" class="text-white text-decoration-none" style=" width: 100%;">Berita</a></li>
                    <li class="my-2"><a href="{{ url('/pengumuman') }}" class="text-white text-decoration-none" style=" width: 100%;">Pengumuman</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link text-white" href="{{ url('/about') }}">Tentang UI</a>
              </li>

              <a href="" class="ms-3 text-white"><i class="fa fa-search"></i></a>
            </ul>
          </div>
      </div>
  </nav>

    {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
      
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button> --}}
  </div>

  <div class="position-absolute text-white fw-bold" style="z-index: 5; right: 0; bottom: 0; transform: translate(-60%, -150%);">
    <h3 class="fw-bold">@if( isset($on) ){{  $on }}@endif</h3>
  </div>
