<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPengeluaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pengeluaran', function (Blueprint $table) {
            $table->increments('id_detailPengeluaran');
            $table->integer('id_user')->unsigned();
            $table->integer('id_pengeluaran')->unsigned();
            $table->integer('id_suplaier')->unsigned();
            $table->float('qty');
            $table->float('jumlah_bayar');
            $table->timestamps();
 
            $table->foreign('id_user')->references('id_user')->on('user');
            $table->foreign('id_suplaier')->references('id_suplaier')->on('suplaier');
            $table->foreign('id_pengeluaran')->references('id_pengeluaran')->on('pengeluaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pengeluaran');
    }
}
