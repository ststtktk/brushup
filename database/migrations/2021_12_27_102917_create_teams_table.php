<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('main_name');
            $table->string('team_menber1')->nullable();
            $table->string('email_menber1')->nullable();
            $table->string('team_menber2')->nullable();
            $table->string('email_menber2')->nullable();
            $table->string('team_menber3')->nullable();
            $table->string('email_menber3')->nullable();
            $table->string('team_menber4')->nullable();
            $table->string('email_menber4')->nullable();
            $table->string('team_menber5')->nullable();
            $table->string('email_menber5')->nullable();
            $table->string('team_menber6')->nullable();
            $table->string('email_menber6')->nullable();
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
        Schema::dropIfExists('teams');
    }
}
