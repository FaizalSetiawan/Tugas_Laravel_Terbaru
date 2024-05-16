<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artikel;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh data untuk disimpan ke dalam tabel artikel
        $data = [
            [
                'judul' => 'Inovasi Terbaru dalam Teknologi AI',
                'foto' => 'https://assets.kompasiana.com/items/album/2023/09/04/istockphoto-1306194594-612x612-64f55ae84addee10e15de122.jpg?t=o&v=770',
                'kategori' => 'Teknologi',
                'konten' => 'Kecerdasan Buatan (Artificial Intelligence, AI) adalah salah satu bidang teknologi yang paling cepat berkembang di era digital.',
                'penulis' => 'John Doe',
            ],
            [
                'judul' => 'Peluang Karir di Bidang Teknologi Informasi',
                'foto' => 'https://www.tunasbangsajakarta.ac.id/wp-content/uploads/2024/01/1.-Jurusan-IT-Adalah-Pilihan-Menjanjikan-di-Era-Digital.jpg',
                'kategori' => 'Teknologi',
                'konten' => 'Prospek Karir untuk Lulusan Jurusan Informatika
                Jurusan Informatika adalah salah satu jurusan yang paling diminati di era digital ini. Dengan kemajuan teknologi informasi yang terus berkembang, lulusan jurusan ini memiliki peluang karir yang sangat luas di berbagai sektor industri. Berikut adalah beberapa prospek karir yang bisa dikejar oleh lulusan jurusan informatika:
                
                1. Pengembang Perangkat Lunak
                Sebagai pengembang perangkat lunak, Anda akan bertanggung jawab untuk merancang, mengembangkan, dan memelihara perangkat lunak atau aplikasi yang digunakan oleh berbagai organisasi. Anda akan bekerja dengan berbagai bahasa pemrograman dan platform untuk membangun solusi perangkat lunak yang inovatif dan efisien.
                
                2. Analis Sistem
                Seorang analis sistem bertanggung jawab untuk menganalisis kebutuhan bisnis dan merancang sistem informasi yang sesuai. Anda akan bekerja sama dengan tim untuk mengidentifikasi masalah, merancang solusi, dan mengembangkan rencana implementasi yang efektif.
                
                3. Administrator Basis Data
                Sebagai administrator basis data, Anda akan mengelola dan memelihara basis data perusahaan. Tugas Anda meliputi pengelolaan basis data, pemulihan bencana, keamanan data, dan optimalisasi kinerja sistem basis data.
                
                4. Arsitek Solusi Teknologi Informasi
                Seorang arsitek solusi teknologi informasi bertanggung jawab untuk merancang dan mengimplementasikan arsitektur teknologi informasi yang kompleks. Anda akan bekerja dengan berbagai tim untuk mengidentifikasi kebutuhan bisnis, mengevaluasi teknologi yang sesuai, dan merancang solusi yang terintegrasi.
                
                5. Peneliti Teknologi Informasi
                Sebagai peneliti teknologi informasi, Anda akan melakukan penelitian mendalam tentang perkembangan terbaru dalam bidang teknologi informasi. Anda akan bekerja di laboratorium atau lembaga penelitian untuk mengembangkan teknologi baru, menerapkan algoritma baru, atau mengevaluasi keamanan sistem.
                
                6. Konsultan TI
                Seorang konsultan TI memberikan saran ahli kepada klien tentang bagaimana mengoptimalkan penggunaan teknologi informasi dalam bisnis mereka. Anda akan membantu klien dalam merancang, mengimplementasikan, dan memelihara solusi TI yang efektif dan efisien.
                
                7. Pengembang Web dan Aplikasi Mobile
                Sebagai pengembang web dan aplikasi mobile, Anda akan merancang dan mengembangkan situs web dan aplikasi mobile yang menarik dan fungsional. Anda akan menggunakan berbagai bahasa pemrograman dan teknologi untuk membangun pengalaman pengguna yang optimal di platform web dan mobile.
                
                8. Ahli Keamanan Informasi
                Sebagai ahli keamanan informasi, Anda akan melindungi sistem informasi dan data dari ancaman keamanan cyber. Anda akan merancang kebijakan keamanan, melakukan evaluasi risiko, dan merespons insiden keamanan untuk melindungi organisasi dari serangan cyber.
                
                Kesimpulan
                Jurusan Informatika menawarkan berbagai peluang karir yang menarik dan menjanjikan di era digital ini. Lulusan jurusan ini memiliki keterampilan dan pengetahuan yang sangat dibutuhkan di berbagai sektor industri, dan mereka dapat mengejar karir yang sesuai dengan minat dan aspirasi mereka.
                
                ',
                'penulis' => 'Jane Doe',
            ],
            // Data untuk artikel tentang sekolah
            [
                'judul' => 'Profil SMK Assalaam: Membangun Masa Depan',
                'foto' => 'https://smkassalaambandung.sch.id/img/sakola.jpg',
                'kategori' => 'Sekolah',
                'konten' => 'artikel tentang profil SMK Assalaam yang berkualitas dalam pendidikan serta dunia kerja industri',
                'penulis' => 'John Doe',
            ],
            
        ];
        // Simpan data ke dalam tabel artikel
        Artikel::insert($data);
    }
}
