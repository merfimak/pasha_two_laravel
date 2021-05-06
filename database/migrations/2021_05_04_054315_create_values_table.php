<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('values', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('minut');
            $table->string('ujecia_z_drona');
            $table->string('fpv');
            $table->string('reclama');
            $table->string('teledysk');

            $table->string('art_clip');
            $table->string('ciecie');
            $table->string('zlozona');
            $table->string('wibor');
            $table->string('licencji');

            $table->string('lektor');
            $table->string('chrom');
            $table->string('promout');
            

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
        Schema::dropIfExists('values');
    }
}
