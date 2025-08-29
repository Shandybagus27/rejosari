<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$bidangs = Bidang::orderBy('id','ASC')->get(); 
        // $data = Bidang::all();

        // dd($bidangs);

        return view('dashboard.bidangpokdar.bidprogram', [
            'title' => 'Bidang Program',
            "bidangs" => Bidang::orderBy('id','ASC')->get()
           
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.bidangpokdar.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'bidang_program' => 'required'

        ]);

       // Paket::create($validatedData);
        //insert ke table paket
        Bidang::create($validateData);
        //dd($validatedData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('dashboard.bidangpokdar.bidprogram')->with('success', 'Data berhasil ditambah!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Bidang $bidang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Bidang::findOrFail($id);

        return view('dashboard.bidangpokdar.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'bidang_program' => 'required'
        ]);

        $data = Bidang::findOrFail($id);

        $data->update([
            'bidang_program' => $request->bidang_program
        ]);

        // digunakan untuk mengembalikan ke tampilan index post jika data berhasil di simpan
        return redirect()->route('dashboard.bidangpokdar.bidprogram')->with('success', 'Data berhasil di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Bidang::findOrFail($id);
        $data->delete();

        return redirect()->route('dashboard.bidangpokdar.bidprogram')->with('success', 'Data berhasil di hapus!');
    }
}
