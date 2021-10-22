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
            $table->string('name_en');
            $table->string('name_ru');
            $table->string('price');
            $table->string('sale');
            $table->text('description_en');
            $table->text('description_ru');
            $table->integer('count');
            $table->string('size');
            $table->string('number');
            $table->string('img');
            $table->enum('show', ['0', '1']);
            $table->enum('best_product', ['0', '1']);
            $table->integer('category_id');
            $table->string('imgs');
            $table->timestamps();
            $table->softDeletes();
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
