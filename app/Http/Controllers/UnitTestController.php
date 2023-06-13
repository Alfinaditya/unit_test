<?php

namespace App\Http\Controllers;

use App\Models\M_Karyawan;
use Barryvdh\DomPDF\Facade\Pdf;

class KaryawanController extends Controller
{
    public function generate()
    {
        $data = M_Karyawan::all();
        $pdf = PDF::loadView('karyawan.0117pdf', ['data' => $data]);
        return $pdf->stream();
    }
}
