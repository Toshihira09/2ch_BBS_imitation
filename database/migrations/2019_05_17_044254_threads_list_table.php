<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ThreadsListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('threads_list', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->integer('responses_number');
        $table->dateTime('created_at');
        $table->dateTime('last_responses_date');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      schema::dropIfExists('threads_list');
    }
}
