<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramdarwisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programdarwis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bidang_id');
            $table->string('program');
            // $table->string('tahun');
            $table->enum('status', ['Rencana', 'Sedang Berjalan', 'Selesai']);
            $table->date('dimulai')->nullable();
            $table->date('selesai')->nullable();
            $table->string('lokasi');
            $table->string('luas_area')->nullable();
            $table->string('keterangan');
            $table->integer('jumlah_anggaran');
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
        Schema::dropIfExists('programdarwis');
    }
}
