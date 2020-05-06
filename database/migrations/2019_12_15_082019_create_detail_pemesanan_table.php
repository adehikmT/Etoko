<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pemesanan', function (Blueprint $table) {
            $table->increments('id_detailPemesanan');
            $table->integer('id_pemesanan')->unsigned();
            $table->integer('id_satuan')->unsigned();
            $table->float('qty');
            $table->float('jumlah_harga');
            $table->timestamps();

            $table->foreign('id_satuan')->references('id_satuan')->on('satuan');
            $table->foreign('id_pemesanan')->references('id_pemesanan')->on('pemesanan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pemesanan');
    }
}
