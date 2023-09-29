<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $table = 'pendaftarans'; // Sesuaikan nama tabel
    protected $fillable = [
        'nama_pasien', 'jenis_kelamin', 'tanggal_lahir', 'jenis_pelayanan',
        'spesialis', 'jenis_pembayaran'
    ];

    public function pasien()
    {
        return $this->belongsTo(MasterPasien::class);
    }

    public function pelayanan()
    {
        return $this->belongsTo(MasterPelayanan::class);
    }
}
