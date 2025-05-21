<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $table = 'mobil';
    protected $primaryKey = 'id';
    protected $fillable = ['merk_mobil', 'plat_mobil', 'warna_mobil','harga_mobil','tahun','max_penumpang','transmisi','status','photo'];
}
