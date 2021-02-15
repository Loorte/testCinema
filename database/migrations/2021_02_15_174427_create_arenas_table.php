<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arenas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->text('name');
            $table->integer('count_line')->nullable()->default(3);
            $table->integer('count_point')->nullable()->default(5);
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
        Schema::dropIfExists('arenas');
    }
}
