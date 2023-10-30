<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'judul' => 'Bersama Majukan Indonesia, UI Selenggarakan Peringatan Sumpah Pemuda ke 95',
            'penulis' => 'Alfa',
            'body' => '<p>Depok, 28 Oktober 2023. Universitas Indonesia (UI) melaksanakan upacara Peringatan Hari Sumpah Pemuda (HSP) ke-95 Tahun 2023 di lapangan Rektorat, Kampus UI Depok, pada Sabtu (28/10). Upacara ini diikuti oleh Dewan Guru Besar (DGB), Wakil Rektor, Dekan, Pimpinan Unit ,dan sivitas akademika UI lainnya dengan mengenakan busana adat daerah dan pakaian batik. Dengan mengusung tema “Bersama Majukan Indonesia”, Wakil Rektor Bidang Akademik dan Kemahasiswaan UI, Prof. Dr. rer. nat. Abdul Haris selaku pembina upacara membacakan sambutan Menteri Pemuda dan Olahraga Republik Indonesia (Menpora RI) Ario Bimo Nandito Ariotedjo.</p>
            <p>Ia menyampaikan bahwa momentum peringatan HSP ini mengingatkan kita terhadap sejarah gotong-royong para pemuda yang berhasil menebar jiwa patriotisme yang menyatukan visi kebangsaan dalam Sumpah Pemuda 1928. Saat ini, pemerintah Indonesia telah membuka secara luas partisipasi pemuda dalam pembangunan nasional. Namun, di sisi lain, perkembangan teknologi terkini dan arus informasi yang semakin cepat membuat kesenjangan penguasaan terhadap teknologi dan informasi antar generasi.</p>
            <p>Saat ini, penguasaan teknologi dan informasi serta literasi digital oleh pemuda menjadi sesuatu yang harus diseriusi. Oleh karena itu, setiap pemuda perlu memiliki sebuah visi, misi, dan bahkan peran strategis untuk 30 tahun ke depan agar pembangunan dapat berlari lebih cepat.</p>
            <p>Strategi yang dapat diterapkan adalah dengan tolong-menolong lintas generasi dan gotong royong lintas sektor. Dito mengatakan, kerja kolaboratif ini sesuai dengan amanah undang-undang no. 40 Tahun 2009 tentang Kepemudaan dan juga sesuai dengan Perpres No. 43 Tahun 2022 tentang Koordinasi Lintas Sektor Penyelenggaraan Pelayanan Kepemudaan. Di momen Hari Sumpah Pemuda ini, Dito juga mengajak semua stakeholder baik Kementerian dan Lembaga, Pemerintah Provinsi, Pemerintah Kabupaten Kota, Organisasi Kepemudaan, Komunitas dan elemen lainnya untuk dapat berkolaborasi dalam memajukan negeri.</p>',
            'tanggal' => date('Y-m-d'),
        ]);
    }
}
