<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
             $table->foreignId("user_id")->nullable();
             $table->foreign('user_id')->references('id')->on("users")->cascadeOnDelete()->cascadeOnUpdate();
             $table->string('name');
             $table->foreignId("product_id")->nullable();
            $table->foreign('product_id')->references('id')->on("products")->cascadeOnDelete()->cascadeOnUpdate();
             $table->string('image');
             $table->longText('note');
             $table->integer('quantity');
             $table->integer('order_status_id')->default(0);
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
        Schema::dropIfExists('orders');
    }
}
