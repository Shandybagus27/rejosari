<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    // public function user()
	// {
	//       return $this->belongsTo('App\User','user_id', 'id');
	// }
	protected $fillable = [
        'user_id', 
        'tanggal', 
        'status', 
        'jumlah_harga'
    ];

    // protected $casts = [
    //     'tanggal' => 'datetime',
    // ];

    public function pesananDetail()
    {
        return $this->hasMany(PesananDetail::class, 'pesanan_id');
    }
	// public function pesanan_detail() 
	// {
	//      return $this->hasMany('App\Models\PesananDetail','pesanan_id', 'id');
	// }
	public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'user_id');
    }
	// public function pengguna()
    // {
    //     return $this->belongsTo('App\Models\Pengguna', 'user_id', 'id');
    // }
}
