<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id('idReservation'); #pk
            $table->integer('idClient');
            $table->foreign('idClient')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->integer('idTable');
            $table->foreign('idTable')->references('idTable')->on('mesas');
            $table->date('date');
            $table->string('time');
            $table->string('comments')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
