<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestBloodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_bloods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->string('date');
            $table->string('hospital_name');
            $table->string('amount');
            $table->string('problem');
            $table->string('relationship');
            $table->string('bloodgroup');
            $table->string('phone');
            $table->string('email');
            $table->string('age');
            $table->string('address');
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
        Schema::dropIfExists('request_bloods');
    }
}
