<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterPelayanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_pelayanan',
        'spesialis', 'jenis_pembayaran'
    ];
}
