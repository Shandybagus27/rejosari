<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Commerce;
use Illuminate\Http\Request;

class BarangController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $barangs = Barang::paginate(20);
        return view('e-commerce', compact('barangs'));
    }

    public function index1()
    {
        $barangs = Barang::paginate(20);
        return view('dashboard.barang.index', compact('barangs'));
    }
    
    public function create()
    {
        return view('dashboard.barang.create', [
            "title" => "Commerce",
        ]);
    }

    public function store (Request $request)
    {
        //validasi kolom
        //$validatedData =
        // $validateData = $request->validate([
        //     'nama_barang' => 'required',
        //     'harga' => 'required',
        //     'stok' => 'required',
        //     'keterangan' => 'required'
        //     // 'barang' => 'required',

        // ]);
        $request->validate([
            'barang' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            // 'gambar' => 'image|mimes:jpeg,jpg,png',
        ]);
        
        // Simpan data ke database
        Commerce::create([
            'nama_barang' => $request->input('barang'),
            'harga' => $request->input('harga'),
            'stok' => $request->input('stok'),
            'keterangan' => $request->input('keterangan', ''), // Opsional
        ]);

       // Paket::create($validatedData);
        //insert ke table paket
        // Commerce::create($validateData);
        //dd($validatedData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('dashboard.barang.index')->with('success', 'Data berhasil ditambah!');
    }

    public function edit($id)
    {
        $kategori = Barang::find($id);
        return view('dashboard.barang.edit', compact('barang'));
    }

    public function update (Request $request, $id)
    {
        //validasi kolom
        $validateData = $request->validate([
            'barang' => 'required'

        ]);


        Barang::where('id',$id)->update($validateData);
        #untuk ngeread halaman paket tampil
        return redirect()->route('dashboard.Barang.index')->with('success', 'Data berhasil diupdate!');
    }

    public function delete($id)
    {


        $kategori = Barang::findOrfail($id);
        $kategori->delete();

        return redirect()->route('dashboard.Barang.index')->with('success', 'Data berhasil dihapus!');;
    }
}
