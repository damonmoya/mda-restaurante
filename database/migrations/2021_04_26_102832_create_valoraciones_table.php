<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValoracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valoraciones', function (Blueprint $table) {
            $table->id('idRating'); #pk
            $table->integer('idClient')->nullable();
            $table->foreign('idClient')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->integer('idOrder')->nullable();
            $table->foreign('idOrder')->references('idOrder')->on('Pedidos')->onDelete('set null')->onUpdate('cascade');
            $table->integer('rating');
            $table->string('comment');
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
        Schema::dropIfExists('valoraciones');
    }
}
