<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterPasien extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pasien', 'jenis_kelamin', 'tanggal_lahir'
    ];
}
