<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = "peminjamans";

    protected $fillable = [
        'tgl_peminjaman',
        'tgl_pengembalian',
        'lama_peminjaman',
        'status_peminjaman',
        'user_id',
        'mobil_id'
    ];
}