<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    protected $table = 'rental';
    protected $primaryKey = 'id';
    protected $fillable = ['nik_penyewa',
                        'nama_penyewa',
                        'email_penyewa',
                        'hp_penyewa',
                        'alamat_penyewa',
                        'merk_mobil',
                        'plat_mobil',
                        'warna_mobil',
                        'harga_mobil',
                        'tahun',
                        'max_penumpang',
                        'transmisi',
                        'tgl_pinjam',
                        'lama_sewa',
                        'total_bayar',
                        'tgl_dikembalikan',
                        'status_rent'];
    
}
