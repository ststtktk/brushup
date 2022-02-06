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
            $table->string('name')->nullable();
            $table->string('ability1')->nullable();
            $table->string('ability2')->nullable();
            $table->string('ability3')->nullable();
            $table->string('ability4')->nullable();
            $table->string('ability5')->nullable();
            $table->string('chief_ability1')->nullable();
            $table->string('chief_ability2')->nullable();
            $table->string('chief_ability3')->nullable();
            $table->string('chief_ability4')->nullable();
            $table->string('chief_ability5')->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
            $table->timestamp('created_at')->useCurrent()->nullable();
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
