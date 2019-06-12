<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('commandes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('iduser');
            $table->string('designation');
            $table->integer('prix');
            $table->integer('total');
            $table->integer('qte');
            $table->string('reference');
            $table->string('logo');
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
         Schema::dropIfExists('commandes');
    }
}
