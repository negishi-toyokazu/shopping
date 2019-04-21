<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
          $table->Increments('id');
          $table->integer('product_id')->unsigned()->nullable();
          $table->integer('user_id')->unsigned()->nullable();
          $table->integer('number')->unsigned()->nullable();
          $table->timestamps();

          $table->index('user_id');
          $table->index('product_id');
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
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
