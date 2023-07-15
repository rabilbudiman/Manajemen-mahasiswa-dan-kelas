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
        Schema::create('kelas', function (Blueprint $table) {
            $table->integer('nim');
            $table->unique('nim');
            $table->string('nama');
            $table->string('jurusan');
            $table->string('angkatan');
            $table->enum('kelamin', ['pria', 'wanita']);
            $table->string('semester');
            $table->string('kelas');
            $table->string('status');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas');
    }
};