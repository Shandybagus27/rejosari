<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaketwisController extends Controller
{
    public function index()
    {
        $paketuser = Paket::orderby('id', 'ASC')->get();
        return view('paketuser', [
            "title" => "Paket",
            "pakets" => $paketuser
        ]);

    }

    public function show($id)
    {
        $pakets = Paket::find($id);

        return view('detailpaket',[
            "title" => "Paket",
            "pakets" => $pakets
        ]);
    }
}
