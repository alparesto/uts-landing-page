@extends('layouts.main')

@section('content')

  {{-- card --}}

  <div class="row position-relative m-4" style="transform: translate(0, -10%); z-index: 1000;">
    <div class="col-md-4 p-0">
      <div class="card ms-auto border-0 rounded-0 shadow">
        <div class="card-body d-flex align-items-center p-3" style="background: #FFDD00;">
          <span class="ms-4"><i class="fa fa-graduation-cap fs-1"></i></span>
          <div class="ms-2">
            <h2 class="text-white fs-5 fw-bold">Why UI?</h2>
            <p class="text-dark fs-6">Selengkapnya</p>
          </div>
        </div>
        <img src="https://www.ui.ac.id/wp-content/uploads/2022/12/home_whyui-700x450.jpg" class="card-img-top rounded-0" alt="...">
      </div>

      <p class="mt-4" style="width: 90%;">
        UI adalah salah satu universitas riset atau institusi akademik terkemuka di dunia yang terus mengejar pencapaian tertinggi dalam hal penemuan, pengembangan dan difusi pengetahuan secara regional dan global. 
        
        Dengan prestasi yang terus diraihnya UI berada di peringkat kampus terbaik di Indonesia berdasarkan penilaian Lembaga pemeringkatan dunia.</p>

      <a href="" class="text-dark fw-bold text-decoration-none ">Selengkapnya<i class="fa fa-long-arrow-right ms-3" ></i></a>
    </div>

    <div class="col-md-4 p-0">
      <div class="card ms-auto border-0 rounded-0 shadow" style="">
        <div class="card-body d-flex align-items-center p-3" style="background: #FFDD00;">
          <span class="ms-4"><i class="fa fa-university fs-1"></i></span>
          <div class="ms-2">
            <h2 class="text-white fs-5 fw-bold">Faculties</h2>
            <p class="text-dark fs-6">Selengkapnya</p>
          </div>
        </div>
        <img src="https://www.ui.ac.id/wp-content/uploads/2022/12/home-riset-700x450.jpg" class="card-img-top rounded-0" alt="...">
      </div>

      <p class="mt-4" style="width: 90%;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero incidunt, repudiandae cupiditate labore, aperiam sint, temporibus possimus necessitatibus voluptate eveniet esse aliquam? Labore sequi asperiores quia at magni. Quas nisi explicabo nobis, quod libero assumenda repudiandae voluptatum nihil minus debitis, autem error! Eveniet, fugit amet obcaecati porro ipsum aperiam consequuntur!</p>

      <a href="" class="text-dark fw-bold text-decoration-none">Selengkapnya<i class="fa fa-long-arrow-right ms-3" ></i></a>
    </div>

    <div class="col-md-4 p-0">
      <div class="card ms-auto border-0 rounded-0 shadow" style="">
        <div class="card-body d-flex align-items-center p-3" style="background: #FFDD00;">
          <span class="ms-4"><i class="fa fa-universal-access fs-1"></i></span>
          <div class="ms-2">
            <h2 class="text-white fs-5 fw-bold">Campus Life</h2>
            <p class="text-dark fs-6">Selengkapnya</p>
          </div>
        </div>
        <img src="https://www.ui.ac.id/wp-content/uploads/2022/12/home-campuslife-700x450.jpg" class="card-img-top rounded-0" alt="...">
      </div>

      <p class="mt-4" style="width: 90%;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero incidunt, repudiandae cupiditate labore, aperiam sint, temporibus possimus necessitatibus voluptate eveniet esse aliquam? Labore sequi asperiores quia at magni. Quas nisi explicabo nobis, quod libero assumenda repudiandae voluptatum nihil minus debitis, autem error! Eveniet, fugit amet obcaecati porro ipsum aperiam consequuntur!</p>

      <a href="" class="text-dark fw-bold text-decoration-none">Selengkapnya<i class="fa fa-long-arrow-right ms-3" ></i></a>
    </div>
  </div>

  {{-- info, pengumuman --}}

  <div class="info-announcement row position-relative ms-4 me-5">
    <div class="col-md-4">
        <div style="border-bottom: 3px solid #FFDD00;" class="p-2">
          <h2 class="fw-bold">Informasi publik</h2>
        </div>
        <img src="https://www.ui.ac.id/wp-content/uploads/2023/05/WhatsApp-Image-2023-05-05-at-15.47.53.jpeg" alt="" width="300" class="my-3">
        <h2 class="fw-bold mt-5">Laporan Keuangan</h2>
    </div>

    <div class="col-md-8">
      <div style="border-bottom: 3px solid #FFDD00;" class="p-2 mb-5">
        <h2 class="fw-bold">Pengumuman</h2>
      </div>

      <div class="row">
        <div class="col-md-6">
            <div class="text-secondary fs-6">13/10/2023</div>
            <div class="fw-bolder fs-5">Tata Cara Pembayaran BOP UI via Bank Syariah Indonesia</div>
        </div>

        <div class="col-md-6">
          <div class="mb-4">
            <div class="text-secondary fs-6">09/10/2023</div>
            <div class="fw-bolder fs-5">Tender Pengadaan Peralatan Smart Campus, Live streaming, Webinar dan Studio</div>
          </div>

          <div class="mb-4">
            <div class="text-secondary fs-6">09/10/2023</div>
            <div class="fw-bolder fs-5">Tender Renovasi Gedung Asrama Mahasiswa Tahun 2023</div>
          </div>

          <div class="mb-4">
            <div class="text-secondary fs-6">03/10/2023</div>
            <div class="fw-bolder fs-5">Dosen Dan Tendik UI Terima Penghargaan Tenaga Kependidikan Berinovasi 2023</div>
          </div>
      </div>
      </div>
    </div>

    <div class="col-md-12 text-center position-relative" style="">
      <a href="" class="text-dark fw-bold text-decoration-none">Berita Selengkapnya<i class="fa fa-long-arrow-right ms-3" ></i></a>
    </div>
  </div>

  {{-- hero image --}}

  <div class="hero-image row justify-content-center">
    <div class="col-md-5 p-0 bg-primary">
      <img src="https://www.ui.ac.id/wp-content/uploads/2022/12/home_riseetinov-600x840.jpg" alt="">
    </div>

    <div class="col-md-6 p-0 d-flex justify-content-center align-items-center" style="background: #FFDD00;">
      <div class="wrapper p-5">
        <h2 class="fw-bold">Riset dan Inovasi</h2>
        <p class="fs-5 my-3" style="width: 95%;">Kontribusi UI bagi Indonesia dan komitmennya untuk menjadi Guru Bangsa melalui penyelenggaraan Tridharma Perguruan Tinggi menjadi pendorong bagi UI untuk terus berperan aktif dan memberikan kontribusi dalam mengatasi permasalahan bangsa. 

          Penyelenggaraan kegiatan riset dan inovasi bagi sivitas akademika UI secara internal dan eksternal adalah wujud sumbangsih UI dalam pemikiran dan kerja nyata dalam mengatasi permasalahan global yang menjadi fokus pembangunan berkelanjutan (Sustainable Development Goals).</p>

          <a href="" class="text-dark fw-bold text-decoration-none">Selengkapnya<i class="fa fa-long-arrow-right ms-3 mt-5" ></i></a>
      </div>
    </div>
  </div>

  {{-- events --}}

  <div class="row m-5">
    <div class="col-md-12">
      <div style="border-bottom: 3px solid #FFDD00;" class="p-2 mb-5">
        <h2 class="fw-bold">Campus Events</h2>
      </div>
    </div>

    <div class="col-md-4 d-flex align-items-start gap-3">
      <div style="border-bottom: 3px solid #000; width: fit-content; height: fit-content;" class=" text-center">
        <h2 class="fw-bold"><span class="fs-1">01</span><br><span class="fs-5">NOV</span></h2>
      </div>

      <div>
        <h3 class="fs-5 fw-bold">Seminar High Accuracy RTK and MADOCA PPP Global Navigation Satellite System (GNSS) Receiver</h3>
        <span class="mt-4"><i class="me-2 fa fa-clock"></i>09:00 - 12:00</span>
      </div>
    </div>

    <div class="col-md-12">
      <a href="" class="text-dark fw-bold text-decoration-none">Lihat Semua Event<i class="fa fa-long-arrow-right ms-3 mt-5" ></i></a>
    </div>
  </div>
@endsection