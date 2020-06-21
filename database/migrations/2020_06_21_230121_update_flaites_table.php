<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFlaitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flaites', function (Blueprint $table) {
            $table->foreign('provincia_id')->references('id')->on('provincias')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('comuna_id')->references('id')->on('comunas')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('cerro_id')->references('id')->on('cerros')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flaites', function (Blueprint $table) {
            //
        });
    }
}
