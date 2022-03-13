<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSwipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('swipes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('from_user_id');
            $table->unsignedBigInteger('to_user_id');
            $table->boolean('is_like');
            $table->foreign('from_user_id')->references('id')->on('profiles')->onDelete('cascade');
            //$table->foreignId('from_user_id')->constrained('profiles')->cascadeOnDelete();に書き換え可能
            $table->foreign('to_user_id')->references('id')->on('profiles')->onDelete('cascade');
            //$table->foreignId('to_user_id')->constrained('profiles')->cascadeOnDelete();に書き換え可能
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
        Schema::dropIfExists('swipes');
    }
}
