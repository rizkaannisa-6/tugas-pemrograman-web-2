<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'no_rekam_medis',
    'nama_pasien',
    'jenis_kelamin',
    'tanggal_lahir',
    'alamat',
    'no_telepon',
    'golongan_darah'
])]

class Pasien extends Model
{
    /** @use HasFactory<\Database\Factories\PasienFactory> */
    use HasFactory;

}

