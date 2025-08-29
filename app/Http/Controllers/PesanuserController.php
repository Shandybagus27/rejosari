<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jns_paket;
use App\Models\Paket;
use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanuserController extends Controller
{
    // public function index()
    // {

    //     $pesans = Pesan::with(["jns_paket", "paket"])->get();

    //     return view('dashboard.pesanpaket.index', [
    //         "title" => "Pesanan",
    //         'pesans' => $pesans

    //     ]);

    // }
    public function create()
    {

        return view('pesanpaket', [
            "title" => "Pesan Paket",
            'jns_pakets' => Jns_paket::all(),
            'pakets' => Paket::all()
        ]);
    }

    public function store(Request $request)
    {
        //validasi kolom
        $validatedData = $request->validate([
            'name' => 'required',
            'jns_paket' => 'required',
            'nam_leng' => 'required',
            'jml_org' => 'required',
            'email' => 'required',
            'jm_datang' => 'required',
            'tgl_datang' => 'required',
            'no_tlp' => 'required',
            'askot' => 'required',
            'asne' => 'required',

        ]);

        $validatedData['paket_id'] = $validatedData['name'];
        $validatedData['jns_paket_id'] = $validatedData['jns_paket'];

        Pesan::create($validatedData);
        return redirect()->route('dashboard.pesanpaket.index')->with('success', 'Data berhasil dikirim!');
    }
}
