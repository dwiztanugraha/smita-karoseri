<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPembelianDompulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pembelian_dompuls', function (Blueprint $table) {
            $table->increments('id_detail_pembelian_dompul');
            $table->string('id_pembelian_dompul');
            $table->integer('id_supplier');
            // $table->integer('id_harga_dompul');
            $table->string('produk');
            $table->integer('jumlah');
            $table->string('tipe_harga');
            $table->float('harga_satuan');
            $table->float('harga_total');
            $table->string('keterangan_detail_pd');
            $table->tinyInteger('status_detail_pd')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pembelian_dompuls');
    }
}