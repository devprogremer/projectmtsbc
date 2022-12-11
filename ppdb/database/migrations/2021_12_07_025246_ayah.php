<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ayah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

          Schema::create('ayah', function (Blueprint $table){
            $table->id('id_ayah');
            $table->string('nama_ayah');
            $table->string('Pekerjaan');
            $table->string('Penghasilan');
            $table->rememberToken();
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
          Schema::dropIfExist('ayah');
    }
}
