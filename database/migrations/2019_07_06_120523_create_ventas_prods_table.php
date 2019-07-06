<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasProdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas_prods', function (Blueprint $table) {
            $table->integer('id_prod')->unsigned();
            $table->integer('id_ventas')->unsigned();
            $table->integer('cantidad_prod');
            $table->foreign('id_prod')->references('id_prod')->on('products');
            $table->foreign('id_ventas')->references('id_ventas')->on('ventas');
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
        Schema::dropIfExists('ventas_prods');
    }
}
