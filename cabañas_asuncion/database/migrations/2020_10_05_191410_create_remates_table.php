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
            $table->string('image')->nullable();
            $table->string('titulo')->nullable();
            $table->date('fecha')->nullable();
            $table->string('organiza')->nullable();
            $table->string('streaming')->nullable();
            $table->string('email')->nullable();
            $table->string('file')->nullable();
            $table->text('enlaces')->nullable();
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
    }
}
