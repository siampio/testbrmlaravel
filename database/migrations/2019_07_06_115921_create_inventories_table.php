<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->increments('id_inventory');
            $table->integer('id_prod')->unsigned();
            $table->integer('cantidad_prod');
            $table->integer('lot_number');
            $table->date('fecha_ven');
            $table->integer('precio_prod');
            $table->foreign('id_prod')->references('id_prod')->on('products');
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
        Schema::dropIfExists('inventories');
    }
}
