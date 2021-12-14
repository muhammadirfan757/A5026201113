{{-- <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body> --}}
@extends('layout.bahagia')
@section('content')
    <div class="container my-5">

        <div class="container">
            <div class="col">
                <h3 class="text-center">Data Baju</h3>
                <a class="btn btn-warning my-5" href="/pegawai">Kembali</a>
            </div>
        </div>
        <br>
        {{-- <h3 class="text-center">Data Pegawai</h3>

	<a class="btn btn-default" href="/pegawai">Kembali</a> --}}

        <form action="/praktikum/store" method="post">
            {{ csrf_field() }}

            <div class="form-group row">
                <label for="kodebaju" class="col-sm-2 col-form-label">Kode Baju</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="kodebaju" name="kodebaju" required="required"
                        placeholder="Masukkan kode baju">
                </div>
            </div>

            {{-- Nama <input type="text" name="nama" required="required"> <br/> --}}

            <div class="form-group row">
                <label for="merkbaju" class="col-sm-2 col-form-label">Merk Baju</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="merkbaju" name="merkbaju" required="required"
                        placeholder="Masukkan merk baju ">
                </div>
            </div>

            {{-- Jabatan <input type="text" name="jabatan" required="required"> <br/> --}}

            <div class="form-group row">
                <label for="stockbaju" class="col-sm-2 col-form-label">Stock Baju</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="stockbaju" name="stockbaju" required="required"
                        placeholder="Masukkan stock baju">
                </div>
            </div>

            {{-- Umur <input type="number" name="umur" required="required"> <br/> --}}
            <label for="tersedia">Status Tersedia</label>
            <br />
            <input type="radio" id="html" name="tersedia" value="N">
            <label for="html">Tidak tersedia</label><br>
            <input type="radio" id="css" name="tersedia" value="Y" checked="checked">
            <label for="css">Tersedia</label><br>
            {{-- Alamat <textarea name="alamat" required="required"></textarea> <br/> --}}

            <input class="btn btn-primary" type="submit" value="Simpan Data">
        </form>
    </div>
@endsection

</html>



{{-- 'kodebaju' => $request->kodebaju,
'merkbaju' => $request->merkbaju,
'stockbaju' => $request->stockbaju,
'tersedia' => $request->tersedia, --}}
