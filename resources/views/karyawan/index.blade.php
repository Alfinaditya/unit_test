@extends('layout.0117main')

@section('container')
<td colspan="7">
     <a href="karyawan/create" class='btn btn-outline-primary btn-md mx-1' role='button' aria-pressed='true'>Tambah Karyawan</a>
     <a href="karyawan/generate" class='btn btn-outline-primary btn-md mx-1' role='button' aria-pressed='true'>Cetak PDF</a>
</td>

<div class="card mt-4">
        <div class="card-body">
            <div class="container-fluid">
                <table class="table table-sm table-bordered table-striped table-hover m-auto" style="width: 800px;">
                    <thead class="thead-dark table-light text-center">  
                        <tr>
                            <th class="col-1">No</th>
                            <th class="col-1">ID</th>
                            <th class="col-4">NAMA</th>
                            <th class="col-3">NIK</th>
                            <th class="col-7">ACTION</th>
                        </tr>
                    </thead>
                    @foreach($data as $temp)
                    <tr>
                        <td>{{$temp->id}}</td>
                        <td>{{$temp->id_kar}}</td>
                        <td>{{$temp->nama}}</td>
                        <td>{{$temp->nik}}</td>
                        <td class="col-7" align="center">
                            <a href="karyawan/{{$temp->id}}/edit" class='btn btn-outline-primary btn-md mx-1' role='button' aria-pressed='true'>Ubah</a>
                            <form action="{{ url('/karyawan/' . $temp->id) }}"
                                  method="POST"
                            >
                            @csrf
                            <input type="hidden" name="_method" value="DELETE"/>
                            <input class="btn btn-outline-danger btn-md mx-1" type="submit" value="Hapus"/>
                            </form>
                        </td>
                    </tr>
                                    
                    @endforeach
                </table>
            </div>
        </div>
</div>
@endsection
