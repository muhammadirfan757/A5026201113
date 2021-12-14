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
                <h3 class="text-center"> View Detail Pegawai</h3>
            </div>
            <br>
            <div class="col-5">

                <a class="btn btn-warning mr-5" href="/praktikum">Kembali</a>
            </div>

            <div class="container">
                <br />
                <br />
                @foreach ($praktikum as $p)
                    {{-- <form action="/praktikum/update" method="post"> --}}
                    {{-- <input type="hidden" name="id" value="{{ $p->praktikum_id }}"> <br/> --}}
                    <div class="form-group row">
                        <label for="kodebaju" class="col col-form-label">Kode Baju</label>
                        <div class="col-sm-10">
                            {{ $p->kodebaju }}
                        </div>
                    </div>

                    {{-- Nama <input type="text" name="nama" required="required"> <br/> --}}
                    <div class="form-group row">
                        <label for="merkbaju" class="col col-form-label">Merk Baju</label>
                        <div class="col-sm-10">
                            {{ $p->merkbaju }}
                        </div>
                    </div>



                    {{-- Jabatan <input type="text" name="jabatan" required="required"> <br/> --}}

                    <div class="form-group row">
                        <label for="stockbaju" class="col col-form-label">Stock Baju</label>
                        <div class="col-sm-10">
                            {{ $p->stockbaju }}
                        </div>
                    </div>

                    {{-- Umur <input type="number" name="umur" required="required"> <br/> --}}
                    <div class="form-group row">
                        <label for="tersedia" class="col col-form-label">Status Tersedia</label>
                        <div class="col-sm-10">
                            {{ $p->tersedia }}
                        </div>
                    </div>
                    {{-- Alamat <textarea name="alamat" required="required"></textarea> <br/> --}}

                    {{-- </form> --}}
                @endforeach
            </div>
        @endsection


{{-- 'kodebaju' => $request->kodebaju,
'merkbaju' => $request->merkbaju,
'stockbaju' => $request->stockbaju,
'tersedia' => $request->tersedia, --}}
