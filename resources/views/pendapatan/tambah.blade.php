{{-- <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<h3>Data Pendapatan</h3>

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="number" name="IDPegawai" required="required"> <br/>
		Bulan <input type="number" name="Bulan" required="required"> <br/>
		Tahun <input type="text" maxlength="4" name="Tahun" required="required"> <br/>
        Gaji <input type="number" name="Gaji" required="required"> <br/>
        Tunjangan <input type="number" name="Tunjangan" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html> --}}


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container my-5">


	<h3 class="text-center">Data Pendapatan</h3>

	<a class="btn btn-default" href="/pegawai">Kembali</a>

	<br/>
	<br/>

	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}

        <div class="form-group row">
            <label for="IDPegawai" class="col-sm-2 col-form-label">ID Pegawai</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="IDPegawai" name="IDPegawai" required="required" placeholder="Masukkan IDPegawai">
            </div>
          </div>

        <div class="form-group row">
            <label for="Jabatan" class="col-sm-2 col-form-label">Bulan</label>
            <div class="col-sm-10">
              <input type="number" pattern="[1-12]*" class="form-control" id="Bulan" name="Bulan" required="required" placeholder="Masukkan bulan">
            </div>
          </div>

        <div class="form-group row">
            <label for="Tahun" class="col-sm-2 col-form-label">Tahun</label>
            <div class="col-sm-10">
              <input type="text" maxlength="4" class="form-control" id="Tahun" name="Tahun" required="required" placeholder="Masukkan tahun">
            </div>
          </div>

        <div class="form-group row">
            <label for="Gaji" class="col-sm-2 col-form-label">Gaji</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="Gaji" name="Gaji" required="required" placeholder="Masukkan gaji">
            </div>
          </div>

        <div class="form-group row">
            <label for="Tunjangan" class="col-sm-2 col-form-label">Tunjangan</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="Tunjangan" name="Tunjangan" required="required" placeholder="Masukkan tunjangan">
            </div>
          </div>

		<input  type="submit" value="Simpan Data">
	</form>
</div>
</body>
</html>



