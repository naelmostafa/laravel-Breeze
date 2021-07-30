<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_item', function (Blueprint $table) {
            $table->unsignedInteger('cart_id');
            $table->unsignedInteger('item_id');

            $table->foreign('cart_id')
                ->references('id')
                ->on('items')
                ->onDelete('cascade');

            $table->foreign('item_id')
                ->references('id')
                ->on('carts')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_item');
    }
}
