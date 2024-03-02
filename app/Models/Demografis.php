<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demografis extends Model
{
    use HasFactory;

    protected $table = 'demografis';

    protected $fillable = [
        'rt',
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'status',
        'tingkat_pendidikan',
        'mata_pencarian'
    ];
}
