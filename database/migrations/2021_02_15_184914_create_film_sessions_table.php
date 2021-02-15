<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_sessions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('film_id');
            $table->integer('arena_id');
            $table->datetime('start_time');
            $table->integer('price')->nullable()->default(0);
            $table->boolean('is_delete')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film_sessions');
    }
}
