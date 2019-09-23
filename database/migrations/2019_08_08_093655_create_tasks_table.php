<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('email');
            $table->string('subject_name');
            $table->string('documentType_name');
            $table->dateTime('deadline_datetime');
            $table->string('level');
            $table->decimal('suggested_price', 8, 2);
            $table->decimal('budget', 8, 2);
            $table->string('title');
            $table->string('status')->default('Pending');
            $table->longText('task');
            $table->integer('pages');
            $table->string('spacing');
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
