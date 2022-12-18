<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('shop_id')->nullable();
            $table->string('camp_number')->nullable();
            $table->string('camp_name')->nullable();
            $table->string('camp_title')->nullable();
            $table->string('camp_image')->nullable();
            $table->string('message')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            // $table->string('')->nullable();
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
        Schema::dropIfExists('campaigns');
    }
}
