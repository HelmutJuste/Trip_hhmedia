<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLieuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('lieu', function(Blueprint $table) {
            $table->increments('numero');
            $table->string('nomdulieu', 100);
            $table->float('longitude');
            $table->float('latitude');
            $table->float('resultat');
            $table->primary('numero');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
