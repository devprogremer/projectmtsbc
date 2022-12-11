<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ibu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('ibu', function (Blueprint $table){
        $table->id('id_ibu');
        $table->string('nama_ibu');
        $table->string('pekerjaan_ibu');
        // $table->string('penghasilan_ibu');
        $table->string('no_telp_ortu');
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

            Schema::dropIfExist('ibu');
    }
}
