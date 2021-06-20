<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAkun extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_akun', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip',40)->nullable();
            $table->string('nama_pegawai',60)->nullable();
            $table->string('foto_pegawai')->default('defaultimage.png');
            $table->string('password');
            $table->enum('tipe_admin',['Master','User']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_akun');
    }
}
