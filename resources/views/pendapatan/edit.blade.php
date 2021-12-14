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
                <h3 class="text-center">Edit Pendapatan</h3>
                <a class="btn btn-warning my-5" href="/pendapatan">Kembali</a>
            </div>
        </div>
	{{-- <h3 class="text-center">Edit Pendapatan</h3>

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/> --}}

	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>

        <div class="form-group row">
            <label for="IDPegawai" class="col col-form-label">ID Pegawai</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="IDPegawai" name="IDPegawai" required="required" placeholder="Masukkan IDPegawai" value="{{ $p->IDPegawai }}">
            </div>
          </div>

          <div class="form-group row">
            <label for="Jabatan" class="col col-form-label">Bulan</label>
            <div class="col-sm-10">
              <input type="number" pattern="[1-12]*" maxlength="2" class="form-control" id="Bulan" name="Bulan" required="required" placeholder="Masukkan bulan" value="{{ $p->Bulan }}">
            </div>
          </div>

          <div class="form-group row">
            <label for="Tahun" class="col col-form-label">Tahun</label>
            <div class="col-sm-10">
              <input type="text" maxlength="4" class="form-control" id="Tahun" name="Tahun" required="required" placeholder="Masukkan tahun" value="{{ $p->Tahun }}" >
            </div>
          </div>

          <div class="form-group row">
            <label for="Gaji" class="col-3 col-form-label">Gaji</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="Gaji" name="Gaji" required="required" placeholder="Masukkan gaji" value="{{ $p->Gaji }}">
            </div>
          </div>

        <div class="form-group row">
            <label for="Tunjangan" class="col col-form-label">Tunjangan</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="Tunjangan" name="Tunjangan" required="required" placeholder="Masukkan tunjangan" value="{{ $p->Tunjangan }}">
            </div>
          </div>
        {{-- IDPegawai <input type="number" name="IDPegawai" required="required" value="{{ $p->IDPegawai }}"> <br/>
		Bulan <input type="number" name="Bulan" required="required" value="{{ $p->Bulan }}"> <br/>
		Tahun <input type="text" maxlength="4" name="Tahun" required="required" value="{{ $p->Tahun }}" > <br/>
        Gaji <input type="number" name="Gaji" required="required" value="{{ $p->Gaji }}"> <br/>
        Tunjangan <input type="number" name="Tunjangan" required="required" value="{{ $p->Tunjangan }}"> <br/> --}}
		<input class="btn btn-primary" type="submit" value="Simpan Data">
	</form>
	@endforeach

    </div>
@endsection


