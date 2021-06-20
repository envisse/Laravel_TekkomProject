<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBahanAjar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahan_ajar', function (Blueprint $table) {
            $table->id();
            $table->string('judul_bahan_ajar')->nullable();
            $table->string('url_bahan_ajar')->nullable();
            $table->string('thumbnail_bahan_ajar')->nullable();
            $table->string('kategori')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_bahan_ajar');
    }
}
