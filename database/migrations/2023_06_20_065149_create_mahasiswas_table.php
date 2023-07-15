<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->integer('nim');
            $table->unique('nim');
            $table->string('nama');
            //$table->enum('kelamin', ['pria', 'wanita']);
            $table->string('jurusan');
           // $table->string('semester');
           // $table->string('kelas');
           // $table->string('status');
            // $table->string('gambar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
};