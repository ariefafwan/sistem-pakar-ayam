<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['penyakit', 'user'];


    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
