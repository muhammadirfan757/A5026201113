{{-- <!DOCTYPE html>
<html>
<head>

</head>
<body>


	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach ($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html> --}}


{{-- <!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body> --}}
    @extends('layout.bahagia')
    @section('content')
        <div class="container my-5">

            <div class="col-12">
                <h3 class="text-center"> View Detail Pendapatan</h3>
            </div>
            <br>
            <div class="col-5">

                <a class="btn btn-warning mr-5" href="/pendapatan">Kembali</a>
            </div>

            <div class="container">
                <br />
                <br />
                @foreach ($pendapatan as $p)
                    {{-- <form action="/pegawai/update" method="post"> --}}
                    {{-- <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/> --}}
                    <div class="form-group row">
                        <label for="nNama" class="col col-form-label">Nama Pegawai</label>
                        <div class="col-sm-10">
                            {{ $p->ID }}
                        </div>
                    </div>

                    {{-- Nama <input type="text" name="nama" required="required"> <br/> --}}
                    <div class="form-group row">
                        <label for="Bulan" class="col col-form-label">Bulan</label>
                        <div class="col-sm-10">
                            {{ $p->Bulan }}
                        </div>
                    </div>
                    {{-- Jabatan <input type="text" name="jabatan" required="required"> <br/> --}}

                    <div class="form-group row">
                        <label for="Tahun" class="col col-form-label">Tahun</label>
                        <div class="col-sm-10">
                            {{ $p->Tahun }}
                        </div>
                    </div>

                    {{-- Umur <input type="number" name="umur" required="required"> <br/> --}}
                    <div class="form-group row">
                        <label for="Gaji" class="col col-form-label">Gaji</label>
                        <div class="col-sm-10">
                            {{ $p->Gaji }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Tunjangan" class="col col-form-label">Tunjangan</label>
                        <div class="col-sm-10">
                            {{ $p->Tunjangan }}
                        </div>
                    </div>
                    {{-- Alamat <textarea name="alamat" required="required"></textarea> <br/> --}}

                    {{-- </form> --}}
                @endforeach
            </div>
        @endsection
