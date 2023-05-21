<?php

namespace Database\Seeders;

use App\Models\BasisPengetahuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BasisPengetahuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BasisPengetahuan::create([
            'penyakit_id' => '1',
            'gejala_id' => '5'
        ]);

        BasisPengetahuan::create([
            'penyakit_id' => '1',
            'gejala_id' => '4'
        ]);

        BasisPengetahuan::create([
            'penyakit_id' => '1',
            'gejala_id' => '3'
        ]);
        
        BasisPengetahuan::create([
            'penyakit_id' => '2',
            'gejala_id' => '1'
        ]);
        
        BasisPengetahuan::create([
            'penyakit_id' => '2',
            'gejala_id' => '2'
        ]);

        BasisPengetahuan::create([
            'penyakit_id' => '2',
            'gejala_id' => '4'
        ]);
    }
}
