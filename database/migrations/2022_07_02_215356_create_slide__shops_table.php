<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlideShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slide__shops', function (Blueprint $table) {
            $table->id();
            $table->string('slide_number')->nullable();
            $table->string('shop_number')->nullable();
            $table->string('slide_1')->nullable();
            $table->string('slide_1_header')->nullable();
            $table->string('slide_1_desc')->nullable();
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
        Schema::dropIfExists('slide__shops');
    }
}
