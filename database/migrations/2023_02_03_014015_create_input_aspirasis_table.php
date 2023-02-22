<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputAspirasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_aspirasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nis')->length(10);
            $table->foreignId('id_kategori')->length(5);
            $table->string('lokasi')->length(50);
            $table->string('ket')->length(50);
            $table->string('image');
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
        Schema::dropIfExists('input_aspirasis');
    }
}