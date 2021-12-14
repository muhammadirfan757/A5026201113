@extends('layout.bahagia')
@section('content')
    <div class="container">
        <div class="col">
            <h1 style="text-align: center">Data Pendapatan</h1>
            <br>
            <div class="container">
                <a href="/pendapatan/tambah"> + Tambah Pendapatan Baru</a>
            </div>
            <br>

        </div>
        <div class="container" align="center">
            <form class="col-6" action="/pendapatan/cari" method="GET">
                <input type="text" class="form-control mb-3" name="cari" placeholder="Cari Pendapatan Pegawai berdasarkan nama atau gaji ..." value="{{ old('cari') }}">
                <input type="submit" class="btn btn-primary mb-3" value="CARI">
            </form>
        </div>


        <table border="1" class="table table-striped">
            <thead <tr>
                {{-- <th scope="col">ID</th> --}}
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Bulan</th>
                <th scope="col">Tuhan</th>
                <th scope="col">Gaji</th>
                <th scope="col">Tunjangan</th>
                <th scope="col">Opsi</th>
                </tr>
                @foreach ($pendapatan as $p)
                    <tr>
                        {{-- <td>{{ $p->ID }}</td> --}}
                        <td>{{ $p->pegawai_nama }}</td>
                        <td>{{ $p->Bulan }}</td>
                        <td>{{ $p->Tahun }}</td>
                        <td>{{ $p->Gaji }}</td>
                        <td>{{ $p->Tunjangan }}</td>
                        <td>

                            <a href="/pendapatan/view/{{ $p->ID }}">Detail</a>
                            |
                            <a href="/pendapatan/edit/{{ $p->ID }}">Edit</a>
                            |
                            <a href="/pendapatan/hapus/{{ $p->ID }}">Hapus</a>

                        </td>
                    </tr>
            </thead>
            @endforeach
        </table>
        {{ $pendapatan->links()}}
    </div>
@endsection
