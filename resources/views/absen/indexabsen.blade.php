@extends('layout.bahagia')
@section('content')
<div class="container">
	<h1>Daftar Absensi Pegawai</h1>


	<a href="/absen/add"> + Tambah Absensi</a>

	<br/>
	<br/>

	<table border="1"  class="table table-striped">
        <thead>
		<tr>

			<th scope="col">IDPegawai</th>
			<th scope="col">Tanggal</th>
			<th scope="col">Status</th>
			<th scope="col">Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>

			<td>{{ $a->IDPegawai }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID }}">Edit Absensi</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}">Delete Absensi</a>
			</td>
		</tr>
        </thead>
		@endforeach
	</table>
    <p>
        Keterangan Status: <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
        </p>

</div>
@endsection

