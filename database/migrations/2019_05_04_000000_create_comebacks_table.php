<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComebacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comebacks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('artist_id');
            $table->string('type')->nullable();
            $table->boolean('is_debut');
            $table->dateTime('announcement_date');
            $table->dateTime('release_date');
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
        Schema::dropIfExists('comebacks');
    }
}
