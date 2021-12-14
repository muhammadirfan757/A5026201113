@extends('layout.bahagia')

@section('title', 'Menambah Absen')
@section('judulhalaman', 'Menambah Data Absen')

@section('content')
<div class="container">
    <div class="col">
        <h1 style="text-align: center">Data Baju</h1>
        <br>
        <div class="container">
            <a  href="/praktikum/tambah"> + Tambah Data Baju</a>
        </div>
        <br>

    </div>
	{{-- <h1 align="center">Data Pegawai</h1>

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a> --}}

    <div class="container" align="center">
        <form class="col-6" action="/praktikum/cari" method="GET">
            <input type="text" class="form-control mb-3" name="cari" placeholder="Cari Baju berdasarkan kode atau merk..." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-primary mb-3" value="CARI">
        </form>
    </div>

	<table border="1" class="table table-striped">
    <thead>
		<tr>
			<th scope="col">Kode</th>
			<th scope="col">Merk</th>
			<th scope="col">Stock</th>
            <th scope="col">Tersedia</th>
            <th scope="col">Opsi</th>
		</tr>

		@foreach($praktikum as $p)
		<tr>
			<td >{{ $p->kodebaju }}</td>
			<td >{{ $p->merkbaju }}</td>
			<td >{{ $p->stockbaju }}</td>
			<td  >{{ $p->tersedia }}</td>
			<td class="isi-tabel">
				<a href="/praktikum/view/{{ $p->kodebaju }}">View Detail</a>
                |
				<a href="/praktikum/hapus/{{ $p->kodebaju }}">Hapus</a>
                |
                <a href="/praktikum/edit/{{ $p->kodebaju }}">Edit</a>
			</td>
		</tr>

    </thead>
		@endforeach
	</table>
    {{ $praktikum->links()}}
    <p>
        Keterangan Status Tersedia: <br>
        Y : tersedia <br>
        N : tidak tersedia <br>
    </p>
</div>

@endsection
{{--
'kodebaju' => $request->kodebaju,
'merkbaju' => $request->merkbaju,
'stockbaju' => $request->stockbaju,
'tersedia' => $request->tersedia, --}}
