<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_agenda')->nullable();
            $table->text('desc_agenda')->nullable();
            $table->date('tanggalmulai');
            $table->date('tanggalselesai')->nullable();
            $table->text('start');
            $table->text('end')->nullable();
            $table->text('alamat');
            $table->text('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda');
    }
}
