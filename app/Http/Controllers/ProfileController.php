<?php

namespace App\Http\Controllers;
// use Auth;
use Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        // $pengguna = User::where('id')->first();
		$pengguna = Auth::user();
    	// $user = User::where('id', Auth::user()->id)->first();

    	return view('profile.index', compact('pengguna'));
    }

    public function update(Request $request)
    {
    	 $this->validate($request, [
            'password'  => 'confirmed',
        ]);
        $user = User::where('id')->first();
    	// $user = User::where('id', Auth::user()->id)->first();
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->nohp = $request->nohp;
    	$user->alamat = $request->alamat;
    	if(!empty($request->password))
    	{
    		$user->password = Hash::make($request->password);
    	}
    	
    	$user->update();

    	// Alert::success('User Sukses diupdate', 'Success');
    	return redirect('profile')->with('User Sukses diupdate', 'Success');
    }
}
