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
                    <h3 class="text-center">Data Keranjang Belanja</h3>
                    <a class="btn btn-warning my-5" href="/keranjangbelanja">Kembali</a>
                </div>
            </div>
            <br>
            {{-- <h3 class="text-center">Data Pegawai</h3>

        <a class="btn btn-default" href="/pegawai">Kembali</a> --}}

            <form action="/keranjangbelanja/store" method="post">
                {{ csrf_field() }}


                {{-- Nama <input type="text" name="nama" required="required"> <br/> --}}

                <div class="form-group row">
                    <label for="kodebarang" class="col col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kodebarang" name="kodebarang" required="required"
                            placeholder="Masukkan kode barang ">
                    </div>
                </div>

                {{-- Jabatan <input type="text" name="jabatan" required="required"> <br/> --}}

                <div class="form-group row">
                    <label for="jumlah" class="col col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jumlah" name="jumlah" required="required"
                            placeholder="Masukkan jumlah">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="harga" class="col col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" name="harga" required="required"
                            placeholder="Masukkan harga">
                    </div>
                </div>

                <input class="btn btn-primary" type="submit" value="Simpan Data">
            </form>
        </div>
    @endsection

    </html>



    {{-- 'kodebaju' => $request->kodebaju,
    'merkbaju' => $request->merkbaju,
    'stockbaju' => $request->stockbaju,
    'tersedia' => $request->tersedia, --}}
