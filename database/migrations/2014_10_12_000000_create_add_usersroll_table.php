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
        Schema::table('users', function (Blueprint $table) {
          $table->string('sale_roll')->default('0');
          $table->string('return_roll')->default('0');
          $table->string('user_roll')->default('0');

          $table->string('sale_option')->default('0');
          $table->string('sale_details')->default('0');
          $table->string('barcode_option')->default('0');

          $table->string('return_option')->default('0');
          $table->string('return_details')->default('0');
          $table->string('user_delete')->default('0');
          $table->string('user_edit')->default('0');
          $table->string('user_v')->default('0');
          $table->string('user_c')->default('0');
          $table->string('user_d')->default('0');
          $table->string('user_f')->default('0');
          $table->string('user_h')->default('0');
          $table->string('user_k')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
