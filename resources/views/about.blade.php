@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-12 text-center mt-5 mb-5">
        <p class="mx-5">Universitas Indonesia adalah kampus modern, komprehensif, terbuka, multi budaya, dan humanis yang mencakup disiplin ilmu yang luas <br><br> UI saat ini secara simultan selalu berusaha menjadi salah satu universitas riset atau institusi akademik terkemuka di dunia. Sebagai universitas riset, upaya-upaya pencapaian tertinggi dalam hal penemuan, pengembangan dan difusi pengetahuan secara regional dan global selalu dilakukan.</p>
    </div>
</div>

<div class="row position-relative justify-content-center align-items-center bg-primary">
    <div class="col-md-12 text-center bg-danger">
        <div id="carouselExampleFade" class="carousel slide carousel-fade position-relative m-0" data-bs-ride="carousel" data-interval="1000">
            <div class="carousel-inner position-relative">
                <div class="bg-primary position-relative" style="height: 100vh;  background-image: url('https://images.unsplash.com/photo-1515125520141-3e3b67bc0a88?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1080&ixid=MnwxfDB8MXxyYW5kb218MHx8dW5pdmVyc2l0eXx8fHx8fDE2OTg0NTU1NDM&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1920'); background-repeat: no-repeat;">
                    <div class="img-overlay" style="background: rgb(0, 0, 0, .5); width: 100%; height: 100%;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 position-absolute">
        <div class="my-5 left-0 top-0 text-white text-center fw-bold mx-5" style="z-index: 100;">
            <h2 class="pb-3 mx-auto fw-bold text-white fs-1" style="border-bottom: 3px solid #FFDD00; width: fit-content;">Sejarah</h2>
            <p>Zaman Pendudukan Belanda (1849-1946)
                <br><br>
                Nood-universiteit berganti nama menjadi Universiteit van Indonesië pada tahun 1947 dan berpusat di Jakarta. Beberapa professor nasionalis, salah satunya adalah Prof. Mr. Djokosoetono, melanjutkan fungsinya sebagai pengajar untuk Universiteit van Indonesië di Yogyakarta, yang saat itu menjadi ibukota negara.
                <br><br>
                Ibukota Indonesia kemudian kembali ke Jakarta pada 1949 setelah Belanda mengakui kedaulatan Republik Indonesia. Universiteit van Indonesië Yogjakarta juga kembali pindah ke Jakarta.
            </p>
            <a href="" class="text-decoration-none" style="color: #FFDD00;">Lebih lanjut <i class="ms-2 fa fa-long-arrow-right text-white mt-5"></i></a>
        </div>
    </div>
</div>

{{-- visi, misi --}}

<div class="row justify-content-center">
    <div class="col-md-6 p-5" style="background: #FFDD00;">
        <div class="text-center mx-auto" style="height: 500px; width: 70%;">
            <h2 class="text-center mb-4">Visi</h2>
            <p class="text-center">Menjadi pusat ilmu pengetahuan, teknologi, dan kebudayaan yang unggul dan berdaya saing, melalui upaya mencerdasakan kehidupan bangsa untuk meningkatkan kesejahteraan masyarakat, sehingga berkontribusi bagi pembangunan masyarakat Indonesia dan dunia</p>
        </div>

        <div class="text-center mx-auto"  style="height: 400px; width: 70%;">
            <h2 class="text-center mb-4">Tugas Pokok</h2>
            <span >(berdasarkan Undang -Undang Republik Indonesia No. 12 tahun 2012)</span>
            <br><br>
            <p>menyelenggarakan Pendidikan tinggi sesuai dengan Tridharma Perguruan Tinggi (Pendidikan, penelitian, dan pengabdian kepada Masyarakat)</p>
        </div>
    </div>

    <div class="col-md-6 p-5" style="background: #f1f1f1;">
        <div class="mx-auto" style="height: 500px; width: 70%;">
            <h2 class="text-center mb-4">Misi</h2>
            <ul>
                <li>Menyediakan akses yang luas dan adil, serta pendidikan dan pengajaran yang berkualitas.</li>
                <li>Menyelenggarakan kegiatan Tridharma yang bermutu dan relevan dengan tantangan nasional serta global.</li>
                <li>Menciptakan lulusan yang berintelektualitas tinggi, berbudi luhur dan mampu bersaing secara global.</li>
                <li>Menciptakan iklim akademik yang mampu mendukung perwujudan visi UI</li>
            </ul>
        </div>

        <div class="mx-auto" style="height: 400px; width: 70%;">
            <h2 class="text-center mb-4">Fungsi</h2>
            <ul>
                <li>mengembangkan kemampuan dan membentuk watak serta peradaban bangsa yang bermartabat dalam rangka mencerdaskan kehidupan bangsa;</li>
                <li>mengembangkan Sivitas Akademika yang inovatif, responsif, kreatif, terampil, berdaya saing, dan kooperatif melalui pelaksanaan Tridharma; dan</li>
                <li>mengembangkan Ilmu Pengetahuan dan Teknologi dengan memperhatikan dan menerapkan nilai Humaniora.</li>
            </ul>
        </div>
    </div>
</div>

{{-- hero profile --}}

<div class="row justify-content-start mt-5">
    <div class="col-md-6" style="height: fit-content;">
        <img src="https://www.ui.ac.id/wp-content/uploads/2022/12/ttgui_logoui-1-800x1120.jpg" alt="" style="width: 102%;">
    </div>

    <div class="col-md-5 mt-5 p-3" style="">
        <h1 class="mb-5 fw-bold">Identitas Logo Universitas</h1>
        <p class="mb-4">Pohon berikut cabang dan kuncup melambangkan pohon ilmu pengetahuan dengan cabang-cabang ilmu pengetahuannya, sementara kuncup tersebut suatu saat akan mekar dan menjadi cabang ilmu pengetahuan baru.</p>
        <p>Makara yang mengalirkan air melambangkan hasil yang memancar ke segala penjuru. Makna yang diberikan Sumaxtono adalah Universitas Indonesia sebagai sumber ilmu pengetahuan, akan menghasilkan sarjana-sarjana yang cerdas, terampil, penuh ketakwaan, berbudi luhur, dan berkepribadian, serta bersikap terbuka, tanggap terhadap perubahan dan kemajuan ilmu dan teknologi serta masalah yang dihadapi masyarakat, dan mampu menyelesaikannya sesuai dengan kaidah-kaidah akademik, di mana pun mereka berada.</p>
    </div>
</div>

{{-- hero profile 2 --}}

<div class="row justify-content-start mt-4">
    <div class="col-md-6" style="height: fit-content;">
        <img src="https://www.ui.ac.id/wp-content/uploads/2022/12/StrukturOrganisasi_01-800x533.jpg" alt="" style="width: 102%;">
    </div>

    <div class="col-md-5 mt-5 p-3"  style="height: fit-content;">
        <h1 class="mb-5 fw-bold">Struktur Organisasi UI</h1>
        <p class="mb-5">Sebagai salah satu institusi pendidikan tinggi yang berorientasi pada sistem pendidikan berbasis penelitian, Universitas Indonesia selalu mengupayakan agar sistem pendidikan yang ada mampu mempersiapkan mahasiswa-mahasiswinya bersaing secara global dalam segala aspek, baik di bidang ilmu sains, sosial humaniora, dan kedokteran. Untuk itu dibutuhkan pembangunan budaya dan atmosfir intelektual yang intensif dan konsisten. Hal ini sepenuhnya mendapatkan dukungan dari organisasi dan manajemen yang saling mendukung satu sama lain, baik itu dari Majelis Wali Amanat, Kabinet Rektorat, Dekan Fakultas hingga Tim Administrasi.</p>

        <a href="" class="btn text-center text-light fw-bold fs-6 rounded-0" style="background: #FFDD00;">Lebih lanjut</a>
    </div>
</div>

<div class="row mt-3 p-5" style="background: #FFDD00;">
    <div class="col-md-4 text-center">
        <h3 class="fw-bold">Perancangan Strategis</h3>
        <p class="my-5">Rencana Strategis UI <br> Lebih 2020-2024</p>
        <a href="" class="btn text-center text-light fw-bold fs-6 rounded-0 mb-3" style="background: #000;">Unduh Dokumen</a>
    </div>

    <div class="col-md-4 text-center">
        <h3 class="fw-bold">Perancangan Strategis</h3>
        <p class="my-5">RPJP UI 2015-2035 <br><br></p>
        <a href="" class="btn text-center text-light fw-bold fs-6 rounded-0" style="background: #000;">Unduh Dokumen</a>
    </div>

    <div class="col-md-4 text-center">
        <h3 class="fw-bold">Landasan Hukum</h3>
        <p class="my-5">Statuta Universitas Indonesia <br><br></p>
        <a href="" class="btn text-center text-light fw-bold fs-6 rounded-0" style="background: #000;">Unduh Dokumen</a>
    </div>
</div>
    
@endsection