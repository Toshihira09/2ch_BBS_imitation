<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('threads', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->string('content');
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
      schema::dropIfExists('threads');
    }
}
