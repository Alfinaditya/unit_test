@extends('layout.0117main')

@section('container')
<div class="card mt-4">
        <div class="card-body">
            <div class="container-fluid">
                <table class="table table-sm table-bordered table-hover m-auto" style="width: 800px;">
                    <thead class="thead-dark table-light text-center">  
                        <tr>
                            <th class="col-1">Id</th>
                            <th class="col-8">NAMA</th>
                            <th class="col-4">NIS</th>
                            <th class="col-4">KELAMIN</th>
                            <th class="col-4">ALAMAT</th>
                            <th class="col-4">TELEPON</th>
                            <th class="col-4">USERNAME</th>
                            <th class="col-4">PASSWORD</th>
                        </tr>
                    </thead>



        @foreach($data_siswa as $temp)
        <tr>
            <td>{{$temp->id_siswa}}</td>
            <td>{{$temp->nama_siswa}}</td>
            <td>{{$temp->nis}}</td>
            <td>{{$temp->kelamin}}</td>
            <td>{{$temp->alamat_siswa}}</td>
            <td>{{$temp->telpon_siswa}}</td>
            <td>{{$temp->username}}</td>
            <td>{{$temp->password}}</td>
        </tr>
        @endforeach

@endsection
