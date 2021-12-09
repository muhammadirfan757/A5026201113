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
        <h3 class="text-center">Data Pegawai</h3>
        <a class="btn btn-warning my-5" href="/pegawai">Kembali</a>
    </div>
</div>
<br>
	{{-- <h3 class="text-center">Data Pegawai</h3>

	<a class="btn btn-default" href="/pegawai">Kembali</a> --}}

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama" name="nama" required="required" placeholder="Masukkan nama">
            </div>
          </div>

		{{-- Nama <input type="text" name="nama" required="required"> <br/> --}}

        <div class="form-group row">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="jabatan" name="jabatan" required="required" placeholder="Masukkan jabatan yang diduduki">
            </div>
          </div>

		{{-- Jabatan <input type="text" name="jabatan" required="required"> <br/> --}}

        <div class="form-group row">
            <label for="umur" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="umur" name="umur" required="required" placeholder="Masukkan umur saat ini">
            </div>
          </div>

		{{-- Umur <input type="number" name="umur" required="required"> <br/> --}}
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="alamat" name="alamat" required="required" placeholder="Masukkan alamat rumah saat ini"></textarea>
            </div>
          </div>
		{{-- Alamat <textarea name="alamat" required="required"></textarea> <br/> --}}

		<input class="btn btn-primary"  type="submit" value="Simpan Data">
	</form>
</div>
@endsection
</html>



