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
            $table->id();
            $table->integer('nim')->unique();
            $table->string('nama');
            $table->string('kelamin');
            $table->string('jurusan');
           $table->string('kelas');
           $table->string('status');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *php artiss
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
};