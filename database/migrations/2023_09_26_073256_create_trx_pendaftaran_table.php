<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrxPendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trx_pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pasien');
            $table->unsignedBigInteger('id_dokter');
            $table->unsignedBigInteger('id_pelayanan');
            $table->date('tanggal_pendaftaran');
            $table->time('waktu_mulai_pelayanan');
            $table->time('waktu_selesai_pelayanan');
            $table->enum('status_kunjungan', ['Buka', 'Tutup']);
            $table->timestamps();

            // Definisi foreign key constraints
            $table->foreign('id_pasien')->references('id')->on('master_pasien');
            $table->foreign('id_dokter')->references('id')->on('master_dokter');
            $table->foreign('id_pelayanan')->references('id')->on('master_pelayanan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trx_pendaftaran');
    }
}
