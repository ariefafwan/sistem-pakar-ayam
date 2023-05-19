<?php

namespace Database\Seeders;

use App\Models\Gejala;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gejala::Create([
            'nama_gejala' => 'Muntah Darah',
        ]);
        
        Gejala::Create([
            'nama_gejala' => 'Demam Ringan',
        ]);

        Gejala::Create([
            'nama_gejala' => 'Gendut Kek Wahyu',
        ]);

        Gejala::Create([
            'nama_gejala' => 'Kurus Kek Cirit',
        ]);

        Gejala::Create([
            'nama_gejala' => 'Itulah',
        ]);
    }
}
