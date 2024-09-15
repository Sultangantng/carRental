<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unitt extends Model
{
    use HasFactory;

        /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'Jenis',
        'Gambar',
        'Waktu',
        'Harga',
        'Nama_Penyewa',
        'Kontak_Penyewa',
        'KTP_penyewa',
    ];
}
