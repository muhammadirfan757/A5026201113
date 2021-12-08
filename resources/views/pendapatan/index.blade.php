@extends('layout.bahagia')
@section('content')
<div class="container">
	<h1>Data Pendapatan</h1>

	<a href="/pendapatan/tambah"> + Tambah Pendapatan Baru</a>


	<table border="1" class="table table-striped">
        <thead
		<tr>
			<th scope="col">ID</th>
			<th scope="col">IDPegawai</th>
			<th scope="col">Bulan</th>
			<th scope="col">Tuhan</th>
			<th scope="col">Gaji</th>
            <th scope="col">Tunjangan</th>
            <th scope="col">Opsi</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->Bulan }}</td>
			<td>{{ $p->Tahun }}</td>
            <td>{{ $p->Gaji }}</td>
            <td>{{ $p->Tunjangan }}</td>
			<td>
				<a href="/pendapatan/edit/{{ $p->ID }}">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->ID }}">Hapus</a>
			</td>
		</tr>
        </thead>
		@endforeach
	</table>

</div>
@endsection

