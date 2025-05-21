<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rental', function (Blueprint $table) {
            $table->id();
            $table->string('nik_penyewa');
            $table->string('nama_penyewa');
            $table->string('email_penyewa');
            $table->string('hp_penyewa');
            $table->string('alamat_penyewa');
            $table->string('merk_mobil');
            $table->string('plat_mobil');
            $table->string('warna_mobil');
            $table->integer('harga_mobil');
            $table->string('tahun');
            $table->string('max_penumpang');
            $table->string('transmisi');
            $table->date('tgl_pinjam');
            $table->integer('lama_sewa');
            $table->integer('total_bayar');
            $table->date('tgl_dikembalikan');
            $table->string('status_rent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rental');
    }
}
