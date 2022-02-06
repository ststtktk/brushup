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
            $table->string('name')->nullable();
            $table->string('class')->nullable();
            $table->string('workyears')->nullable();
            $table->text('task')->nullable();
            $table->string('chief_name')->nullable();
            $table->string('chief_class')->nullable();
            $table->string('chief_workyears')->nullable();
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
            $table->text('free')->nullable();
            $table->text('chief_free')->nullable();
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
        Schema::dropIfExists('tasks');
    }
}
