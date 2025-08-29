<?php

namespace App\Http\Controllers;

use App\Charts\PesanChart;
use App\Charts\KategoriChart;
use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Barang;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function __construct()
    // {
    //     $this->middleware(['auth', 'role:admin']);
    // }
    public function index()
    {
        $jumlahPesanan = Pesanan::count(); // Menghitung total pesanan
        $jumlahBarang = Barang::count(); // Menghitung total barang
        $jumlahPengguna = Pengguna::count(); // Menghitung total pengguna

        return view('dashboard.admin', compact('jumlahPesanan', 'jumlahBarang', 'jumlahPengguna'));
    }
    // public function index(PesanChart $chart, KategoriChart $chartkategori)
    // {
    //     $jumlah = Pesan::count('id');
    //     $pengunjung = Pesan::select('jml_org')->sum('jml_org');
    //     $jmlpaket= Paket::count('name');
    //     return view('dashboard.admin', [
    //         'title' => 'Dashboard',
    //         'chart' => $chart->build(),
    //         'chartkategori' => $chartkategori->build(),
    //         'pesanpaket' => $jumlah,
    //         'jmlorang' => $pengunjung,
    //         'jmlpaket' => $jmlpaket
    //     ]);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
