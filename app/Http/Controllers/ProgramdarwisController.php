<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Models\Programdarwis;
use Illuminate\Http\Request;

class ProgramdarwisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Programdarwis::with(["bidangpokdar"])->get();
        return view('dashboard.programpokdar.programdar', [
            "title" => "Program Pokdarwis",
            'programs' => $programs

        ]);
        // return view('dashboard.programpokdar.programdar', [
        //     'title' => 'Program Pokdarwis'
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.programpokdar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // try {
        $this->validate($request, [
                'bidang_id' => 'required',
                'program' => 'required',
                'status' => 'required',
                'dimulai' => 'required',
                'selesai' => 'required',
                'tahun' => 'required',
                'lokasi' => 'required',
                'keterangan' => 'required',
                'jumlah_anggaran' => 'required'

        ]);

        // $prog = Programdarwis::create([
        //     'bidang_id' => $request->bidang_id,
        //     'program' => $request->program,
        //     // 'status' => $request->status,
        //     // 'dimulai' => $request->dimulai,
        //     // 'selesai' => $request->selesai,
        //     // // 'tahun' => $request->tahun,
        //     // 'lokasi' => $request->lokasi,
        //     // 'luas_area' => $request->luas_area,
        //     // 'keterangan' => $request->keterangan,
        //     // 'jumlah_anggaran' => $request->jumlah_anggaran
        // ]);

        // Programdarwis::create($validatedData);
        
        $prog = new Programdarwis();
        $prog->bidang_id = $request->bidang_id;
        $prog->program = $request->program;
        $prog->status = $request->status;
        $prog->dimulai = $request->dimulai;
        $prog->selesai = $request->selesai;
        $prog->tahun = $request->tahun;
        $prog->lokasi = $request->lokasi;
        $prog->luas_area = $request->luas_area;
        $prog->keterangan = $request->keterangan;
        $prog->jumlah_anggaran = $request->jumlah_anggaran;
        
        
        // // digunakan untuk mengembalikan ke tampilan index jika data berhasil di simpan
        $prog->save();
        return redirect()->route('dashboard.programpokdar.programdar')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Programdarwis::findOrFail($id);

        return view('detail', [
            "title" =>"Detail",
            "program" => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Programdarwis::findOrFail($id);

        return view('dashboard.tabel.program.edit', compact('data'), [
            'bidangs' => Programdarwis::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'bidang_id' => 'required',
            'program' => 'required',
            'status' => 'required',
            'dimulai' => 'required',
            'selesai' => 'required',
            'tahun' => 'required',
            'lokasi' => 'required',
            'keterangan' => 'required',
            'jumlah_anggaran' => 'required'
        ]);

        $data = Programdarwis::findOrFail($id);
        $data->bidang_id = $request->bidang_id;
        $data->program = $request->program;
        $data->status = $request->status;
        $data->dimulai = $request->dimulai;
        $data->selesai = $request->selesai;
        $data->tahun = $request->tahun;
        $data->lokasi = $request->lokasi;
        $data->luas_area = $request->luas_area;
        $data->keterangan = $request->keterangan;
        $data->jumlah_anggaran = $request->jumlah_anggaran;
        // $data->update([
        //     'bidang_id' => $request->bidang_id,
        //     'program' => $request->program,
        //     'status' => $request->status,
        //     'dimulai' => $request->dimulai,
        //     'selesai' => $request->selesai,
        //     // 'tahun' => $request->tahun,
        //     'lokasi' => $request->lokasi,
        //     'luas_area' => $request->luas_area,
        //     'keterangan' => $request->keterangan,
        //     'jumlah_anggaran' => $request->jumlah_anggaran
        // ]);

        // digunakan untuk mengembalikan ke tampilan index jika data berhasil di simpan
        $data->update();
        return redirect('/tabel/program')->with('success', 'Berhasil mengedit data');
    }

    public function destroy($id)
    {
        $data = Programdarwis::findOrFail($id);
        $data->delete();

        return redirect()->route('dashboard.tabel.program.index')->with('success', 'Data berhasil di hapus');
    }
}
