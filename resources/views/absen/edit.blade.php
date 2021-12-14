@extends('layout.bahagia')
@section('content')
    <div class="container">
        <div class="col mx-0">
            <h3 class="text-center">Edit Absen</h3>
            <a class="btn btn-warning my-5" href="/absen">Kembali</a>
        </div>
    </div>
    {{-- <h3>{{ $judul }}</h3> --}}
    @foreach ($absen as $a)
        <form action="/absen/update" method="post">
            {{ csrf_field() }}
            {{-- <input type="hidden" name="id" value="{{ $a->ID }}"> --}}
            <div class="input-group row">
                <input type="hidden" name="id" value="{{ $a->ID }}">
                <label for="IDPegawai" class="col col-form-label">ID Pegawai</label>
                <select name="idpegawai">
                    @foreach ($pegawai as $p)
                        <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="dtpickerdemo" class=" control-label">Tanggal</label>
                <div class=" input-group date" id="dtpickerdemo">
                    <input type="text" class="form-control" name="tanggal" required="required" />
                    <span class="input-group-addon" style="font-size: 8px">
                        <span class="glyphicon glyphicon-calendar" ></span>
                    </span>
                </div>
            </div>
            {{-- <div class="form-group">
                <label for="dtpickerdemo" class="col control-label">Tanggal :</label>
                <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                    <input type='text' class="form-control" name="tanggal" value="{{ $a->Tanggal }}"
                        required="required" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div> --}}
            <script type="text/javascript">
                $(function() {
                    $('#dtpickerdemo').datetimepicker({
                        format: 'YYYY-MM-DD hh:mm:ss',
                        showTodayButton: false,
                        locale: 'id',
                        "defaultDate": new Date(),
                    });
                });
            </script>
             <label for="status">Status</label>
             <br/>
             <input type="radio" id="hadir" name="status" value="H"  @if ($a->Status === 'H') checked="checked"  @endif>
             <label for="hadir">Hadir</label><br>
             <input type="radio" id="izin" name="status" value="I"  @if ($a->Status === 'I') checked="checked"  @endif>
             <label for="izin">Izin</label><br>
             <input type="radio" id="sakit" name="status" value="S"  @if ($a->Status === 'S') checked="checked" @endif>
             <label for="sakit">Sakit</label><br>
             <input type="radio" id="alpha" name="status" value="A" @if ($a->Status === 'A') checked="checked" @endif>
             <label for="alpha">Alpha</label>
             <br>

            <p><input class="btn btn-primary" type="submit" value="Simpan Data"></p>
        </form>
    @endforeach
@endsection
