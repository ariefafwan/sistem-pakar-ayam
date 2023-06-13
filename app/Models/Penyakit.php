<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function basispengetahuan()
    {
        return $this->hasMany(BasisPengetahuan::class);
    }

    public function rule()
    {
        return $this->hasMany(Rule::class);
    }

    public function penyakit()
    {
        return $this->hasMany(Hasil::class);
    }
}
