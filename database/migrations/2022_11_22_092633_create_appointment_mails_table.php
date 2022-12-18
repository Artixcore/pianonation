<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_mails', function (Blueprint $table) {
            $table->id();
            $table->string('shop_number')->nullable();
            $table->string('lead_name')->nullable();
            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('zip')->nullable();
            $table->string('address')->nullable();
            $table->string('day')->nullable();
            $table->string('start')->nullable();
            $table->string('end')->nullable();
            $table->string('virtual_platform')->nullable();
            $table->string('level_of_piano')->nullable();
            $table->string('specific_brand')->nullable();
            $table->string('details')->nullable();
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
        Schema::dropIfExists('appointment_mails');
    }
}
