<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commerce extends Model
{
    use HasFactory;
    protected $table = 'barangs';
    protected $guarded = ['id'];

    protected $fillable = [
        'nama_barang',
        'harga',
        'stok',
        'keterangan',
    ];
    public function pesanan_detail()
    {
        return $this->hasMany(PesananDetail::class);
    }
    // public function pesanan_detail() 
	// {
	//      return $this->hasMany('App\Models\PesananDetail','barang_id', 'id');
	// }
}
