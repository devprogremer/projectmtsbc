<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Siswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('siswa', function (Blueprint $table){
        $table->id();
        $table->string('nama_siswa');
        $table->string('no_telp');
        $table->string('Agama');
        $table->date('tanggal_lahir');
        $table->string('tempat_lahir');
        $table->string('asal_sekolah');
        $table->text('Alamat');
        $table->enum('gender', ['pria','wanita']);
        // $table->unsignedBigInteger('id_ayah');
        // $table->unsignedBigInteger('id_ibu');
        $table->string('status', 100)->nullable()->default('MENUNGGU');
        $table->rememberToken();
        $table->timestamps();

        // $table->foreign('id_ayah')
        //   ->references('id_ayah')
        //   ->on('ayah')
        //   ->onDelete('cascade');
        //   $table->foreign('id_ibu')
        //   ->references('id_ibu')
        //   ->on('ibu')
        //   ->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
