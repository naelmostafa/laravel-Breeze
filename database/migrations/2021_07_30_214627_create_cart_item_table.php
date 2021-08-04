<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('cart_item', function (Blueprint $table) {
            $table->bigInteger('cart_id')->unsigned();
            $table->bigInteger('item_id')->unsigned();

            $table->foreign('cart_id')
                ->references('id')
                ->on('carts');

            $table->foreign('item_id')
                ->references('id')
                ->on('items')
                ->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_items');
    }
}
