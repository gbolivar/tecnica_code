<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpdateSuscripcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('suscripcions', function (Blueprint $table) {
            $table->integer('cliente_id')->unsigned()->after('id');
            // $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->integer('servicio_id')->unsigned()->after('cliente_id');
            // $table->foreign('servicio_id')->references('id')->on('servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('suscripcions', function(Blueprint $table) {
            $table->dropColumn('servicio_id');
        });
    }
}
