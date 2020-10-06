<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRematesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remates', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned(); 
            $table->foreign('user_id')->references('id')->on('users'); 
            $table->string('imagen')->nullable();
            $table->string('titulo')->nullable();
            $table->date('fecha')->nullable();
            $table->string('organiza')->nullable();
            $table->string('streaming')->nullable();
            $table->string('email')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
        });      

        Schema::create('lotes', function (Blueprint $table) {
            $table->id();
            $table->string('enlace');
            $table->bigInteger('remate_id')->unsigned();
            $table->foreign('remate_id')->references('id')->on('remates');
            $table->timestamps();
        });

        Schema::create('lote_imagenes', function (Blueprint $table) {
            $table->id();
            $table->string('imagen');
            $table->boolean('featured')->default(false);
            $table->bigInteger('lote_id')->unsigned();
            $table->foreign('lote_id')->references('id')->on('lotes');
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
        Schema::dropIfExists('remates');
        Schema::dropIfExists('lotes');
        Schema::dropIfExists('lote_imagenes');
    }
}
