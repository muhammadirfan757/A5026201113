@extends('layout.bahagia')

@section('title', 'Tabel Keranjang')
@section('judulhalaman', 'Menambah Data Keranjang Belanja')

@section('content')
<div class="container">
    <div class="col">
        <h1 style="text-align: center">Data Keranjang Belanja</h1>
        <br>
        <div class="container">
            <a  href="/keranjangbelanja/tambah"> + Tambah Belanjaan</a>
        </div>
        <br>

    </div>
    {{-- <div class="container" align="center">
        <form class="col-6" action="/keranjang/cari" method="GET">
            <input type="text" class="form-control mb-3" name="cari" placeholder="Cari Belanja berdasarkan nama atau alamat .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-primary mb-3" value="CARI">
        </form>
    </div> --}}

	<table border="1" class="table table-striped">
    <thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Kode Barang</th>
			<th scope="col">Jumlah</th>
            <th scope="col">Harga</th>
            <th scope="col">Total</th>
		</tr>
        @foreach($keranjangbelanja as $k)
		<tr>
			<td >{{ $k->ID }}</td>
			<td >{{ $k->KodeBarang }}</td>
			<td >{{ $k->Jumlah }}</td>
			<td >{{ number_format($k->Harga, 0, ',', '.')}}</td>
            <td>{{ 'Rp '.number_format($k->Jumlah * $k->Harga, '0', ',', '.') }}</td>
			<td class="isi-tabel">
				<a href="/keranjangbelanja/hapus/{{ $k->ID }}">Hapus</a>
                |
                <a href="/keranjangbelanja/edit/{{ $k->ID }}">Edit</a>
			</td>
		</tr>


    </thead>
		@endforeach
	</table>
    {{ $keranjangbelanja->links()}}
</div>

@endsection
{{--
'ID' => $request->ID,
'kodebarang' => $request->kodebarang,
'jumlah' => $request->jumlah,
'harga' => $request->harga, --}}
