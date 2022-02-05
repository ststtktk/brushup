<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('time');
            $table->string('name');
            $table->string('class');
            $table->string('workyears');
            $table->text('task');
            $table->string('chief_name');
            $table->string('chief_class');
            $table->string('chief_workyears');
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
            $table->text('free');
            $table->text('chief_free');
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
        Schema::dropIfExists('tasks');
    }
}
