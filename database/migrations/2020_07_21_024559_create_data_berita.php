<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataBerita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_berita', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_berita')->nullable();
            $table->string('path_thumbnail')->nullable();
            $table->text('isi_berita')->nullable();
            $table->text('isi_thumbnail')->nullable();
            $table->date('tanggalpublish');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_berita');
    }
}
