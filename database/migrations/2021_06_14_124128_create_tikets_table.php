<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tiket');
            $table->string('harga_tiket');
            $table->string('jenis_tiket');
            $table->bigInteger('id_kategori')->unsigned();
            $table->string('jumlah_tiket');
            $table->timestamps();
        });

        Schema::table('tikets', function($table) {
            $table->foreign('id_kategori')->references('id')->on('categoris');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tikets');
    }
}
