@extends('layout.bahagia')

@section('content')
    <div class="container">
        <div class="col">
            <h1 style="text-align: center">Daftar Absensi Pegawai</h1>
            <br>
            <div class="container">
                <a href="/absen/add"> + Tambah Absensi</a>
            </div>
            <br>
        </div>


    <div class="container" align="center">
        <form class="col-6" action="/absen/cari" method="GET">
            <input type="text" class="form-control mb-3" name="cari" placeholder="Cari Absen Pegawai berdasarkan nama atau tanggal .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-primary mb-3" value="CARI">
        </form>
    </div>
    <p style="text-align: left">
        Keterangan Status: <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
    </p>
        <table border="1" class="table table-striped">
            <thead>
                <tr>

                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Status</th>
                    <th scope="col">Opsi</th>
                </tr>
                @foreach ($absen as $a)
                    <tr>

                        <td>{{ $a->pegawai_nama }}</td>
                        <td>{{ $a->Tanggal }}</td>
                        <td>{{ $a->Status }}</td>
                        <td>
                            <a href="/absen/view/{{ $a->ID }}">Detail</a>
                            |
                            <a href="/absen/edit/{{ $a->ID }}">Edit</a>
                            |
                            <a href="/absen/hapus/{{ $a->ID }}">Delete</a>
                        </td>
                    </tr>
            </thead>
            @endforeach

        </table>
        {{ $absen->links() }}
            {{-- <p style="text-align: center">
                Keterangan Status: <br>
                I : Izin <br>
                S : Sakit <br>
                A : Alpha <br>
            </p> --}}


    </div>
@endsection
