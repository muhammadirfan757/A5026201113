    @extends('layout.bahagia')
@section('content')
    <div class="container my-5">


        <h3 class="text-center">Edit Data Baju</h3>

        <a class="btn btn-default" href="/praktikum">Kembali</a>

        <br />
        <br />
        @foreach ($praktikum as $p)
            <form action="/praktikum/update" method="post">
                {{ csrf_field() }}
                {{-- <input type="hidden" name="id" value="{{ $p->praktikum_id }}"> <br/> --}}
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Kode Baju</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kodebaju" name="kodebaju" required="required"
                            placeholder="Masukkan kode baju" value="{{ $p->kodebaju }}">
                    </div>
                </div>

                {{-- Nama <input type="text" name="nama" required="required"> <br/> --}}

                <div class="form-group row">
                    <label for="merkbaju" class="col-sm-2 col-form-label">Merk Baju</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="merkbaju" name="merkbaju" required="required"
                        placeholder="Masukkan merk baju" value="{{ $p->merkbaju }}">
                    </div>
                </div>

                {{-- Jabatan <input type="text" name="jabatan" required="required"> <br/> --}}

                <div class="form-group row">
                    <label for="stockbaju" class="col-sm-2 col-form-label">Stock Baju</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="stockbaju" name="stockbaju" required="required"
                            placeholder="Masukkan stock baju" value="{{ $p->stockbaju }}">
                    </div>
                </div>

                <label for="tersedia">Status Tersedia</label>
                <br />
                <input type="radio" id="html" name="tersedia" value="N">
                <label for="html">Tidak tersedia</label><br>
                <input type="radio" id="css" name="tersedia" value="Y" checked="checked">
                <label for="css">Tersedia</label><br>

                <input class="btn btn-primary" type="submit"  value="Simpan Data">
            </form>
        @endforeach
    </div>
@endsection

{{--
'kodebaju' => $request->kodebaju,
'merkbaju' => $request->merkbaju,
'stockbaju' => $request->stockbaju,
'tersedia' => $request->tersedia, --}}
