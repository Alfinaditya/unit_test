<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class M_Karyawan extends Model
{
    use softDeletes;

    protected $table = 'karyawan';

    protected $fillable = [
        'nama',
        'id_kar',
        'nik'
    ];

    protected $hidden;
}
