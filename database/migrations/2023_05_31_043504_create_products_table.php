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
            $table->id();
            $table->string('product_id')->nullable();
            $table->string('stock_id')->nullable();
            $table->text('name')->nullable();
            $table->float('price')->nullable();
            $table->float('stock')->nullable();
            $table->text('image')->nullable();
            $table->tinyInteger('status')->default('1')->nullable();
            $table->string('var_code')->nullable();
            $table->string('refund')->nullable();
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
};
