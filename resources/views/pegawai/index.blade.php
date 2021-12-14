@extends('layout.bahagia')

@section('title', 'Tabel Pegawai')
@section('judulhalaman', 'Menambah Data Absen')

@section('content')
<div class="container">
    <div class="col">
        <h1 style="text-align: center">Data Pegawai</h1>
        <br>
        <div class="container">
            <a  href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
        </div>
        <br>

    </div>
	{{-- <h1 align="center">Data Pegawai</h1>

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a> --}}

    <div class="container" align="center">
        <form class="col-6" action="/pegawai/cari" method="GET">
            <input type="text" class="form-control mb-3" name="cari" placeholder="Cari Pegawai berdasarkan nama atau alamat .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-primary mb-3" value="CARI">
        </form>
    </div>

	<table border="1" class="table table-striped">
    <thead>
		<tr>
			<th scope="col">Nama</th>
			{{-- <th scope="col">Jabatan</th>
			<th scope="col">Umur</th> --}}
			<th scope="col">Alamat</th>
			<th scope="col">Opsi</th>
		</tr>

		@foreach($pegawai as $p)
		<tr>
			<td >{{ $p->pegawai_nama }}</td>
			{{-- <td >{{ $p->pegawai_jabatan }}</td>
			<td >{{ $p->pegawai_umur }}</td> --}}
			<td  >{{ $p->pegawai_alamat}}</td>
			<td class="isi-tabel">
				<a href="/pegawai/view/{{ $p->pegawai_id }}">View Detail</a>
                |
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                |
                <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
			</td>
		</tr>

    </thead>
		@endforeach
	</table>
    {{ $pegawai->links()}}
</div>

@endsection
