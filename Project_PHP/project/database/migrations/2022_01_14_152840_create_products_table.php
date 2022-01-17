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
       // Schema::dropIfExists('products');
        //if(!Schema::hasTable('categories')) {
            Schema::create('products', function (Blueprint $table) {
                $table->BigIncrements('id');

                $table->string('brand');
                $table->string('model');
                $table->integer('price');
                $table->text('description');
                $table->unsignedBigInteger('category_id');
                $table->foreign('category_id')->references('id')->on('categories') ;

                $table->unsignedBigInteger('image_id');
                $table->foreign('image_id')->references('id')->on('images');

                $table->timestamps();
            });
        //}

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*
       Schema::table('products', function (Blueprint $table)
        {
            $table->dropForeign('category_id_foreign');
            $table->dropColumn('category_id');
            $table->dropForeign('image_id_foreign');
            $table->dropColumn('image_id');
        });
        */
        Schema::dropIfExists('products');
    }
}
