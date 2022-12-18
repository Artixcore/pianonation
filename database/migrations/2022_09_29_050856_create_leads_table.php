<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('lead_number')->uniqid();
            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('user_id')->nullable();
            // $table->string('shop_id')->nullable();
            $table->string('company')->nullable();
            $table->string('location')->nullable();
            $table->string('source')->nullable();
            $table->string('tag')->nullable();
            $table->string('note')->nullable();
            $table->string('rating')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('leads');
    }
}
