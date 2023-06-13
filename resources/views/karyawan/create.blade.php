@extends('layout.0117main')

@section('container')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
        <div class="container-fluid">
            <div class="navbar-collapse justify-content-md-center" id="navbarsExample08">
                <span class="navbar-nav p-2 h3 text-white">Tambah Data Mahasiswa</span>
            </div>
        </div>
    </nav>

    <div class="card text-center mt-4">
        <div class="card-body">
            <form action="{{ url('/karyawan') }}" method="POST">
                <div class="container-fluid table-responsive">
                    <table class="table table-sm table-borderedless table-hover table-responsive m-auto" style="width: auto;">
                        @csrf
                        <tr style="">
                            <th class="col-4">Nama</th>
                            <th>:</th>
                            <td><input name="nama" type="text" maxlength="20" id="nama" placeholder="masukkan nama.."></td>
                        </tr>
                        <tr style="">
                            <th>ID</th>
                            <th>:</th>
                            <td><input name="id_kar" type="text" maxlength="10" id="id_kar" placeholder="masukkan id.."></td>
                        </tr>
                        <tr style="">
                            <th>NIK</th>
                            <th>:</th>
                            <td><input name="nik" type="text" maxlength="10" id="nik" placeholder="masukkan nik.."></td>
                        </tr>
                        <td colspan="3">&nbsp;</td>
                        <tr>
                            <td colspan="5" align="right">
                            <input class="btn btn-primary" type="submit" name='pil' value="SIMPAN">
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </div>
@endsection
