<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programdarwis extends Model
{
    use HasFactory;

    protected $table = 'programdarwis';
    protected $guard = ['id'];

    // protected $dates = ['dimulai', 'selesai'];
    public function bidangpokdar()
    {
        return $this->belongsTo(Bidang::class, 'bidang_id');
    }
    public function getDimulaiAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['dimulai'])->translatedFormat('d F Y');
    }
    public function getSelesaiAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['selesai'])->translatedFormat('d F Y');
    }
}
