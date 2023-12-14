<?php

namespace Database\Seeders;

use App\Models\Questionaire;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Questionaire::insert([
            [
                'questionaire' => 'Saya suka bekerja dengan kendaraan'
            ],
            [
                'questionaire' => 'Saya suka membangun sesuatu'
            ],
            [
                'questionaire' => 'Saya suka merawat binatang'
            ],
            [
                'questionaire' => 'Saya menikmati menyusun/memasang sesuatu'
            ],
            [
                'questionaire' => 'Saya suka bekerja dengan koordinasi & kekuatan fisik'
            ],
            [
                'questionaire' => 'Saya menyukai pekerjaan yang praktis'
            ],
            [
                'questionaire' => 'Saya senang bekerja di luar ruangan'
            ],
            [
                'questionaire' => 'Saya suka puzzle'
            ],
            [
                'questionaire' => 'Saya senang melakukan percobaan'
            ],
            [
                'questionaire' => 'Saya menikmati ilmu sains/alam'
            ],
            [
                'questionaire' => 'Saya senang mencari tahu cara kerja suatu benda'
            ],
            [
                'questionaire' => 'Saya menikmati kegiatan menganalisa masalah'
            ],
            [
                'questionaire' => 'Saya senang bekerja dengan angka/grafik'
            ],
            [
                'questionaire' => 'Kemampuan matematika saya bagus'
            ],
            [
                'questionaire' => 'Saya prima saat bekerja sendirian'
            ],
            [
                'questionaire' => 'Saya suka membaca tentang seni dan musik'
            ],
            [
                'questionaire' => 'Saya menikmati puisi/cerita'
            ],
            [
                'questionaire' => 'Saya senang menonton konser/pertunjukan seni'
            ],
            [
                'questionaire' => 'Saya senang bermain alat musik dan bernyanyi'
            ],
            [
                'questionaire' => 'Saya senang berakting dalam drama'
            ],
            [
                'questionaire' => 'Saya senang menggambar'
            ],
            [
                'questionaire' => 'Saya suka bekerja dalam tim'
            ],
            [
                'questionaire' => 'Saya suka melatih/mengajar orang'
            ],
            [
                'questionaire' => 'Saya suka membantu orang menyelesaikan masalah'
            ],
            [
                'questionaire' => 'Saya tertarik untuk menyembuhkan orang sakit'
            ],
            [
                'questionaire' => 'Saya menikmati belajar kebudayaan yang berbeda'
            ],
            [
                'questionaire' => 'Saya ingin terlibat dalam diskusi suatu topik'
            ],
            [
                'questionaire' => 'Saya suka membantu lansia & bermain dengan anak kecil'
            ],
            [
                'questionaire' => 'Saya tegas dan senang mendapat penugasan'
            ],
            [
                'questionaire' => 'Saya senang mencoba mengajak orang'
            ],
            [
                'questionaire' => 'Saya suka menjual produk'
            ],
            [
                'questionaire' => 'Saya berani mengambil resiko'
            ],
            [
                'questionaire' => 'Saya ingin memulai bisnis saya sendiri'
            ],
            [
                'questionaire' => 'Saya suka memimpin'
            ],
            [
                'questionaire' => 'Saya menikmati berpidato'
            ],
            [
                'questionaire' => 'Saya suka mengatur barang-barang'
            ],
            [
                'questionaire' => 'Saya senang untuk berhati-hati, akurat dan tepat'
            ],
            [
                'questionaire' => 'Saya tidak keberatan kerja tugas 8 jam dalam ruang'
            ],
            [
                'questionaire' => 'Saya memperhatikan detail'
            ],
            [
                'questionaire' => 'Saya menyukai membuat file atau mengetik'
            ],
            [
                'questionaire' => 'Saya membuat rencana dengan cermat'
            ],
            [
                'questionaire' => 'Saya ingin bekerja di dalam ruangan'
            ]
        ]);
    }
}
