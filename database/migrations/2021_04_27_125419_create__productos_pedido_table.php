<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_productos_pedido', function (Blueprint $table) {
            $table->id('id');

            $table->integer('idOrder')->nullable();
            $table->foreign('idOrder')->references('idOrder')->on('pedidos')->onDelete('set null')->onUpdate('cascade'); #fk
            /* id+idOrder => pk */
            $table->integer('idProduct')->nullable();
            $table->foreign('idProduct')->references('idProduct')->on('productos')->onDelete('set null')->onUpdate('cascade'); #fk
            $table->double('price', 4, 3);
            $table->double('discount', 4, 3);
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
        Schema::dropIfExists('_productos_pedido');
    }
}
