<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function basis()
    {
        return $this->hasMany(BasisPengetahuan::class);
    }

    public function ambilgambar()
    {
        return "/storage/img/penyakit" . $this->img;
    }
}
