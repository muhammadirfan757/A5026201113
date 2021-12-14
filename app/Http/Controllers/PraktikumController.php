<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PraktikumController extends Controller
{
    public function index()
    {
        // DB::table('')->get();
        // mengambil data dari table

        // $pegawai = DB::table('pegawai')->get(); //hasil get() adalah Array Of Object

        $praktikum = DB::table('baju')->paginate(5);

        // mengirim data praktikum ke view index
        return view('praktikum.index', ['praktikum' => $praktikum]); //merupakan teknik komunikasi / passing value antara controller dan view

    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table praktikum sesuai pencarian data
		$praktikum = DB::table('baju')
		->where('kodebaju','like',"%".$cari."%")
        ->orWhere('merkbaju','like',"%".$cari."%")
		->paginate();

    		// mengirim data praktikum ke view index
		return view('praktikum.index',['praktikum' => $praktikum]);

	}

    // method untuk menampilkan view form tambah praktikum
    public function tambah()
    {

        // memanggil view tambah
        return view('praktikum.tambah');
    }


    // method untuk insert data ke table praktikum
public function store(Request $request)
{
	// insert data ke table praktikum
	DB::table('baju')->insert([
		// 'kodebaju' => $request->kodebaju,
		'merkbaju' => $request->merkbaju,
		'stockbaju' => $request->stockbaju,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman praktikum
	return redirect('/praktikum'); //tidak return view, karena jadi tidak flexible

}


// method untuk edit data praktikum
public function edit($id)
{
	// mengambil data praktikum berdasarkan id yang dipilih
	$praktikum = DB::table('baju')->where('kodebaju',$id)->get();    ////////////
	// passing data praktikum yang didapat ke view edit.blade.php
	return view('praktikum.edit',['praktikum' => $praktikum]);

}

// method untuk melihat detail  data praktikum
public function detail($id)
{
	// mengambil data praktikum berdasarkan id yang dipilih
	$praktikum = DB::table('baju')->where('kodebaju',$id)->get(); ////////////////
	// passing data praktikum yang didapat ke view edit.blade.php
	return view('praktikum.detail',['praktikum' => $praktikum]);

}
// update data praktikum
public function update(Request $request)
{
	// update data praktikum
	DB::table('baju')->where('kodebaju',$request->id)->update([            ////////////////
		// 'kodebaju' => $request->kodebaju,
		'merkbaju' => $request->merkbaju,
		'stockbaju' => $request->stockbaju,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/praktikum');
}
// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('baju')->where('kodebaju',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/praktikum');
}
}
