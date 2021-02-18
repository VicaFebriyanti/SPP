<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table='siswa';
    
    protected $fillable = [
        'nisn',
        'nis',
        'nama',
        'alamat',
        'no_telp',
        'id_kelas',
        'id_spp',
        'id_user',
    ];

    protected $primaryKey = 'nisn';
}
