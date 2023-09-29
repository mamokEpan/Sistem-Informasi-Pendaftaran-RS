<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pasien');
            $table->enum('jenis_kelamin', ['Pria', 'Wanita']);
            $table->date('tanggal_lahir');
            $table->enum('jenis_pelayanan', ['Rawat jalan', 'Rawat inap', 'UGD']);
            $table->enum('spesialis', ['Poliklinik Umum', 'Poliklinik Anak', 'Poliklinik Gigi', 'UGD']);
            $table->enum('jenis_pembayaran', ['Umum', 'BPJS']);

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
        Schema::dropIfExists('pendaftaran');
    }
}
