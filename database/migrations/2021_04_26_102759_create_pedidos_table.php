<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id('idOrder'); #pk
            // $table->increments('idInvoice');
            
            # FK con id del cliente que hace el pedido
            $table->foreign('idClient')->references('id')->on('users'); 

            /* Pedido se compone de Productos ¿Cómo? Usando entradas en tabla '_productos_pedido' */
                        
            $table->date('date_send'); # Fecha de envío del pedido
            $table->string('address'); # Dirección del envío
            $table->decimal('cost'); # Coste total del pedido (y factura)
            $table->date('dateInvoice'); # Fecha de emisión de la factura

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
        Schema::dropIfExists('pedidos');
    }
}
