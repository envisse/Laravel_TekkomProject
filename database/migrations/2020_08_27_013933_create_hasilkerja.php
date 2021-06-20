<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilkerja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasilkerja', function (Blueprint $table) {
            $table->increments('id');
            $table->text('judul')->nullable();
            $table->text('desc')->nullable();
            $table->text('thumbnail_desc')->nullable();
            $table->text('path')->nullable();
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
        Schema::dropIfExists('hasilkerja');
    }
}
