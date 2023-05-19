<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penyakit::Create([
            'nama_penyakit' => 'Obesitas',
            'det_penyakit' => 'Obesitas Pada Ayam Mana Bisa',
            'solusi_penyakit' => 'Gaada keknya malah bagus',
            'gambar' => 'penyakit.jpg'
        ]);

        Penyakit::Create([
            'nama_penyakit' => 'Wahyu',
            'det_penyakit' => 'Wahyu bukan ayam',
            'solusi_penyakit' => 'yauda kalo wahyu ayam gapapa',
            'gambar' => 'penyakit1.jpg'
        ]);
    }
}
