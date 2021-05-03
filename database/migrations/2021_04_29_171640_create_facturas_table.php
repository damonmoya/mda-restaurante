<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id('idInvoice');
            
            # FK con id del cliente que hace el pedido
            $table->integer('idClient')->nullable();
            $table->foreign('idClient')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade'); 

            # FK con id del pedido
            $table->integer('idOrder')->nullable();
            $table->foreign('idOrder')->references('idOrder')->on('pedidos')->onDelete('set null')->onUpdate('cascade'); 
                        
            $table->date('date_invoice'); # Fecha de expedición de factura
            $table->decimal('cost'); # Coste total de la factura

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
        Schema::dropIfExists('facturas');
    }
}
