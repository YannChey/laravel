<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reference');
            $table->string('name');
            $table->string('description');
            $table->integer('price');
            $table->integer('weight');
            $table->string('img_url');
            $table->integer('quantity_stock');
            $table->tinyInteger('available');
            $table->integer('category_id');
            $table->tinyInteger('discount');
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
};
