<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function select(){

        $data = DB::select('select * from data_siswa');

        return view('0117select', [
            'data_siswa' => $data
        ]);
    }
    public function selectWhere(){

        $data = DB::select('select * from data_siswa where id_siswa = ? ',['4']);

        return view('0117where', [
            'data' => $data
        ]);
    }
    public function selectJoin (){

        $data = DB::select(' SELECT * FROM `data_siswa`LEFT JOIN `tbl_nilai` ON data_siswa.id_siswa= tbl_nilai.id_siswa;');
        return view('0117join',[
            'data' => $data
        ]);

    }
    public function joinLike (){

        $data = DB::select(" SELECT * FROM `data_siswa`RIGHT JOIN `tbl_nilai` ON data_siswa.id_siswa= tbl_nilai.id_siswa WHERE tbl_nilai.nilai LIKE '%7%';");
        return view('0117like',[
            'data' => $data
        ]);

    }
}
