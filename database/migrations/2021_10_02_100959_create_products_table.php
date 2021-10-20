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
            $table->string('name');
            $table->string('price');
            $table->string('sale');
            $table->text('description');
            $table->string('size');
            $table->string('number');
            $table->string('img');
            $table->string('imgs');
            $table->enum('show', ['0', '1']);
            $table->enum('bestProduct', ['0', '1']);
            $table->integer('category_id');
            $table->integer('count');
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
