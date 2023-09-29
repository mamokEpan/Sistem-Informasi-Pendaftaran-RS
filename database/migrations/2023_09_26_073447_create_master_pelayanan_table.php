<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterPelayananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_pelayanans', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('master_pelayanan');
    }
}
