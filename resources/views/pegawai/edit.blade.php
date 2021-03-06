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

        <div class="container">
            <div class="col mx-0">
                <h3 class="text-center">Edit Pegawai</h3>
                <a class="btn btn-warning my-5" href="/pegawai">Kembali</a>
            </div>
        </div>
        @foreach ($pegawai as $p)
            <form action="/pegawai/update" method="post">
                {{ csrf_field() }}
                {{-- <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/> --}}
                <div class="form-group row">
                    <label for="nama" class="col col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" required="required"
                            placeholder="Masukkan nama" value="{{ $p->pegawai_nama }}">
                    </div>
                </div>

                {{-- Nama <input type="text" name="nama" required="required"> <br/> --}}

                <div class="form-group row">
                    <label for="jabatan" class="col col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jabatan" name="jabatan" required="required"
                            placeholder="Masukkan jabatan yang diduduki" value="{{ $p->pegawai_jabatan }}">
                    </div>
                </div>

                {{-- Jabatan <input type="text" name="jabatan" required="required"> <br/> --}}

                <div class="form-group row">
                    <label for="umur" class="col col-form-label">Umur</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="umur" name="umur" required="required"
                            placeholder="Masukkan umur saat ini" value="{{ $p->pegawai_umur }}">
                    </div>
                </div>

                {{-- Umur <input type="number" name="umur" required="required"> <br/> --}}
                <div class="form-group row">
                    <label for="alamat" class="col col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="alamat" name="alamat" required="required"
                            placeholder="Masukkan alamat rumah saat ini">{{ $p->pegawai_alamat }}</textarea>
                    </div>
                </div>
                {{-- Alamat <textarea name="alamat" required="required"></textarea> <br/> --}}

                <input class="btn btn-primary" type="submit"  value="Simpan Data">
            </form>
        @endforeach
    </div>
@endsection

