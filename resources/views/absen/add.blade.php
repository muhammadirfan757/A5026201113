 @extends('layout.bahagia')

 @section('title', 'Menambah Absen')
 @section('judulhalaman', 'Menambah Data Absen')

 @section('content')

     <div class="container">
         <div class="col">
             <h3 class="text-center mt-2">Data Absen</h3>
             <a class="btn btn-warning my-5" href="/absen">Kembali</a>
         </div>
            <div class="container">
                <div class="col">
                    <form action="/absen/store" method="post">
                        {{ csrf_field() }}

                        <tr>
                            <td>
                                <label for="idpegawai">ID Pegawai</label>
                            </td>
                            <td>
                                <label>:</label>
                            </td>
                            <td>
                                <select name="idpegawai" id="idpegawai">
                                    @foreach ($pegawai as $p)
                                        <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td>
                                <label for="tanggal">Tanggal</label>
                            </td>
                            <td>
                                <label>:</label>
                            </td>
                            <td>
                                <div class="input-group">
                                    <label for="dtpickerdemo" class=" control-label"></label>
                                    <div class=" input-group date" id="dtpickerdemo">
                                        <input type="text" class="form-control" name="tanggal" required="required" />
                                        <span class="input-group-addon" style="font-size: 8px">
                                            <span class="glyphicon glyphicon-calendar" ></span>
                                        </span>
                                    </div>
                                </div>
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
                                <input type="radio" id="hadir" name="status" value="H">
                                <label for="hadir">Hadir</label><br>
                                <input type="radio" id="izin" name="status" value="I">
                                <label for="izin">Izin</label><br>
                                <input type="radio" id="sakit" name="status" value="S" checked="checked">
                                <label for="sakit">Sakit</label><br>
                                <input type="radio" id="alpha" name="status" value="A">
                                <label for="alpha">Alpha</label>
                                <br>
                                <input class="btn btn-primary" type="submit" value="Simpan Data">
                            </td>
                        </tr>
                    </form>
                </div>
         </div>
     </div>
 @endsection
