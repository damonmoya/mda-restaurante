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
            $table->integer('idClient')->nullable();
            $table->foreign('idClient')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->integer('idTable')->nullable();
            $table->foreign('idTable')->references('idTable')->on('mesas');
            $table->date('date');
            $table->boolean('12:00-13:00')->default(false);
            $table->boolean('13:00-14:00')->default(false);
            $table->boolean('14:00-15:00')->default(false);
            $table->boolean('15:00-16:00')->default(false);
            $table->boolean('20:00-21:00')->default(false);
            $table->boolean('21:00-22:00')->default(false);
            $table->boolean('22:00-23:00')->default(false);
            $table->boolean('23:00-00:00')->default(false);
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
