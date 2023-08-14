<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImtemptdtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imtemptdt', function (Blueprint $table) {
            $table->id();
            $table->string('ztime')->nullable();
            $table->string('zutime')->nullable();
            $table->integer('zid')->nullable();
            $table->string('ximtmptrn')->nullable();
            $table->integer('xtorlno')->nullable();
            $table->integer('xitem')->nullable();
            $table->float('xqtyord' , 18 , 6)->nullable();
            $table->string('xunit')->nullable();
            $table->string('ximtrnnum')->nullable();
            $table->string('xdocnum')->nullable();
            $table->float('xrate' , 18 , 6)->nullable();
            $table->float('xval',18 , 6)->nullable();
            $table->string('zemail')->nullable();
            $table->string('xemail')->nullable();
            $table->string('xbatch')->nullable();
            $table->string('xbin')->nullable();
            $table->float('xqtyreq',18,6)->nullable();
            $table->date('xdatesch')->nullable();
            $table->float('xfrslnum',18 ,6)->nullable();
            $table->float('xstdprice', 18,6)->nullable();
            $table->float('xlineamt',18,6)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
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
        Schema::dropIfExists('imtemptdt');
    }
}
