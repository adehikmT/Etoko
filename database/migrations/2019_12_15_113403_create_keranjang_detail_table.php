<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeranjangDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keranjang_detail', function (Blueprint $table) {
            $table->increments('id_keranjangDetail');
            $table->integer('id_keranjang')->unsigned();
            $table->integer('id_satuan')->unsigned();
            $table->float('qty');
            $table->float('jumlah_harga');
            $table->timestamps();

            $table->foreign('id_keranjang')->references('id_keranjang')->on('keranjang');
            $table->foreign('id_satuan')->references('id_satuan')->on('satuan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keranjang_detail');
    }
}
