<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangbelanjaController extends Controller
{
    public function index()
    {
        // DB::table('')->get();
        // mengambil data dari table

        // $pegawai = DB::table('pegawai')->get(); //hasil get() adalah Array Of Object

        $keranjangbelanja = DB::table('keranjangbelanja')->paginate(5);

        // mengirim data pegawai ke view index
        return view('keranjangbelanja.index', ['keranjangbelanja' => $keranjangbelanja]); //merupakan teknik komunikasi / passing value antara controller dan view

    }

      // method untuk menampilkan view form tambah pegawai
      public function tambah()
      {

          // memanggil view tambah
          return view('keranjangbelanja.tambah');
      }


      // method untuk insert data ke table pegawai
  public function store(Request $request)
  {
      // insert data ke table pegawai
      DB::table('keranjangbelanja')->insert([
          'ID' => $request->ID,
          'Kodebarang' => $request->kodebarang,
          'Jumlah' => $request->jumlah,
          'Harga' => $request->harga,
      ]);
      // alihkan halaman ke halaman pegawai
      return redirect('/keranjangbelanja'); //tidak return view, karena jadi tidak flexible

  }
  // update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('keranjangbelanja')->where('ID',$request->id)->update([
        'ID' => $request->ID,
        'Kodebarang' => $request->Kodebarang,
        'Jumlah' => $request->Jumlah,
        'Harga' => $request->Harga,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/keranjangbelanja');
}
// method untuk edit data praktikum
public function edit($id)
{
	// mengambil data praktikum berdasarkan id yang dipilih
	$keranjangbelanja = DB::table('keranjangbelanja')->where('ID',$id)->get();    ////////////
	// passing data praktikum yang didapat ke view edit.blade.php
	return view('keranjangbelanja.edit',['keranjangbelanja' => $keranjangbelanja]);

}
  // method untuk hapus data pendapatan
  public function hapus($id)
  {
  // menghapus data pegawai berdasarkan id yang dipilih
  DB::table('keranjangbelanja')->where('ID',$id)->delete();

  // alihkan halaman ke halaman pegawai
  return redirect('/keranjangbelanja');
  }
}

