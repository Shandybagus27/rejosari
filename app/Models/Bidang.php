<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'bidangs';


    public function programdarwis() 
    {
        return $this->hasMany(Programdarwis::class);
    }
}
