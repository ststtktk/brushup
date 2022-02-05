<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abilities', function (Blueprint $table){
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('name');
            $table->string('ability1');
            $table->string('ability2');
            $table->string('ability3');
            $table->string('ability4');
            $table->string('ability5');
            $table->string('chief_ability1');
            $table->string('chief_ability2');
            $table->string('chief_ability3');
            $table->string('chief_ability4');
            $table->string('chief_ability5');
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
        Schema::dropIfExists('abilities');
    }
}
