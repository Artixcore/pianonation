<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_number');
            $table->string('name');
            $table->string('category');
            $table->string('sub_category');
            $table->string('shop_name');
            $table->string('photo');
            $table->string('short_desc');
            $table->string('description')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_desc')->nullable();
            $table->string('price');
            $table->string('discount')->nullable();
            $table->string('unit')->nullable();
            $table->string('status')->nullable();
            $table->string('weight')->nullable();
            $table->string('type')->nullable();
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
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
        Schema::dropIfExists('products');
    }
}
