<?php

namespace Database\Seeders;

use App\Models\Characteristic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacteristicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Characteristic::insert([
            [
                'name' => 'Realistic',
                'description' => 'Suka bekerja terutama dengan tangan, membuat, memperbaiki, merakit atau membangun sesuatu, menggunakan dan mengoperasikan peralatan, alat atau mesin. Seringkali suka bekerja di luar ruangan.'
            ],
            [
                'name' => 'Investigative',
                'description' => 'Suka menemukan dan meneliti ide, mengamati, menyelidiki, dan bereksperimen, mengajukan pertanyaan, dan menyelesaikan masalah.'
            ],
            [
                'name' => 'Artistic',
                'description' => 'Suka menggunakan katakata, seni, musik atau drama untuk berkomunikasi, melakukan, atau mengekspresikan diri, membuat dan merancang sesuatu.'
            ],
            [
                'name' => 'Social',
                'description' => 'Suka mengajar, melatih dan memberi informasi, membantu, mengobati, menyembuhkan dan melayani dan menyapa, peduli dengan kesejahteraan diri dan kesejahteraan orang lain.'
            ],
            [
                'name' => 'Enterprising',
                'description' => 'Suka bertemu orang, memimpin, berbicara dan mempengaruhi orang lain, mendorong orang lain, bekerja dalam bisnis.'
            ],
            [
                'name' => 'Conventional',
                'description' => 'Suka bekerja di dalam ruangan dan pada tugas-tugas yang melibatkan pengorganisasian dan akurasi, mengikuti prosedur, bekerja dengan data atau angka, pekerjaan perencanaan dan acara.'
            ]
        ]);
    }
}
