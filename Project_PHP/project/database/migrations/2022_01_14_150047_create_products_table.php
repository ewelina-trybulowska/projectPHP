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
            $table->timestamps();

            $table->smallInteger('icon_id')->unsigned()->nullable();
            $table->smallInteger('photo_id')->unsigned()->nullable();
            $table->smallInteger('category_id')->unsigned()->nullable();
            $table->smallInteger('subcategory_id')->unsigned()->nullable();
            $table->string('brand');
            $table->string('model');
            $table->integer('price');
            $table->integer('size');
            $table->text('description');


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
