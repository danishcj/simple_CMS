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
            $table->increments('id');
            $table->integer('shops_id')->unsigned()->nullable();
            $table->string('product_name')->nullable();;
            $table->string('model_number')->nullable();
            $table->string('sku')->nullable();
            $table->string('ean')->nullable();
            $table->decimal('price')->nullable();
            $table->decimal('sale_price')->nullable();
            $table->text('description')->nullable();
            $table->string('product_images')->nullable();
            $table->string('user_manual')->nullable();
            $table->string('status')->nullable();
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
