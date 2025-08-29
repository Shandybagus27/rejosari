<?php

namespace App\Http\Controllers;
use App\Models\Commerce;
use Illuminate\Http\Request;

class CommerceController extends Controller
{
    public function index()
    {
        $commerce = commerce::orderby('id', 'ASC')->get();
        return view('dashboard.commerce.index', [
            "title" => "Commerce",
            'barangs' => $commerce

        ]);

    }

    public function create()
    {
        return view('dashboard.commerce.create', [
            "title" => "Commerce",
        ]);
    }

    public function store (Request $request)
    {
        //validasi kolom
        //$validatedData =
        $validateData = $request->validate([
            'barang' => 'required'

        ]);

       // Paket::create($validatedData);
        //insert ke table paket
        commerce::create($validateData);
        //dd($validatedData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('dashboard.commerce.index')->with('success', 'Data berhasil ditambah!');
    }

    public function edit($id)
    {
        $kategori = commerce::find($id);
        return view('dashboard.commerce.edit', compact('barang'));
    }

    public function update (Request $request, $id)
    {
        //validasi kolom
        $validateData = $request->validate([
            'barang' => 'required'

        ]);


        commerce::where('id',$id)->update($validateData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('dashboard.commerce.index')->with('success', 'Data berhasil diupdate!');
    }

    public function delete($id)
    {


        $kategori = commerce::findOrfail($id);
        $kategori->delete();

        return redirect()->route('dashboard.commerce.index')->with('success', 'Data berhasil dihapus!');;
    }
}
