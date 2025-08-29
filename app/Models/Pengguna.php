<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengguna extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'password', 'nohp', 'alamat',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    // public function pesanan() 
    // {
    //      return $this->hasMany('App\Pesanan','user_id', 'id');
    // }
    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'user_id');
    }
}
