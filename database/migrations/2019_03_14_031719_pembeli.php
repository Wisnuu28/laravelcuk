<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pembeli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembeli', function (Blueprint $table) {
            $table->increments('id_pembeli');
            $table->string('nama_pembeli',50)->index();
            $table->string('nama_barang',50)->index();
            $table->integer('jumlah_beli')->unsigned();
            $table->integer('harga_barang')->unsigned();
            $table->integer('total_harga')->unsigned();
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
        Schema::dropIfExists('users');
    }
}
