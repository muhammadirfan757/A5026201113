@extends('layout.bahagia')

@section('title', 'Menambah Absen')
@section('judulhalaman', 'Menambah Data Absen')

@section('content')
<div class="container">
	<h1>Data Pegawai</h1>

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<table border="1" class="table table-striped">
    <thead>
		<tr>
			<th scope="col">Nama</th>
			<th scope="col">Jabatan</th>
			<th scope="col">Umur</th>
			<th scope="col">Alamat</th>
			<th scope="col">Opsi</th>
		</tr>


		@foreach($pegawai as $p)
		<tr>
			<td >{{ $p->pegawai_nama }}</td>
			<td >{{ $p->pegawai_jabatan }}</td>
			<td >{{ $p->pegawai_umur }}</td>
			<td  >{{ $p->pegawai_alamat }}</td>
			<td >
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                |
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>

    </thead>
		@endforeach
	</table>
</div>

@endsection
