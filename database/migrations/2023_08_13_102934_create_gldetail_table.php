<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGldetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gldetail', function (Blueprint $table) {
            $table->id();
            $table->string('ztime')->nullable();
            $table->string('zutime')->nullable();
            $table->integer('zid')->nullable();
            $table->string('xvoucher')->nullable();
            $table->integer('xrow')->nullable();
            $table->string('xacc')->nullable();
            $table->string('xaccusage')->nullable();
            $table->string('xaccsource')->nullable();
            $table->string('xsub')->nullable();
            $table->string('xdiv')->nullable();
            $table->string('xsec')->nullable();
            $table->string('xproj')->nullable();
            $table->string('xcur')->nullable();
            $table->float('xexch', 18,6)->nullable();
            $table->float('xprime' , 18 ,6)->nullable();
            $table->float('xbase',18,6)->nullable();
            $table->string('xlong')->nullable();
            $table->string('xicacc')->nullable();
            $table->string('xicsub')->nullable();
            $table->string('xacctype')->nullable();
            $table->string('zemail')->nullable();
            $table->string('xemail')->nullable();
            $table->string('xstatusrfp')->nullable();
            $table->string('xicdiv')->nullable();
            $table->string('xicproj')->nullable();
            $table->string('xvmcode')->nullable();
            $table->float('xamount',18 , 6)->nullable();
            $table->string('xrem')->nullable();
            $table->float('xallocation',16,6)->nullable();
            $table->string('xcheque')->nullable();
            $table->string('xpaytype')->nullable();
            $table->string('xstatus')->nullable();
            $table->string('xtypegl')->nullable();
            $table->string('xinvnum')->nullable();
            $table->string('xref')->nullable();
            $table->string('xoriginal')->nullable();
            $table->date('xdateapp')->nullable();
            $table->string('xpaycode')->nullable();
            $table->float('xexchval',16,6)->nullable();
            $table->date('xdateclr')->nullable();
            $table->string('xflag')->nullable();
            $table->date('xdatedue')->nullable();
            $table->string('xdoctype')->nullable();
            $table->string('xdocnum')->nullable();
            $table->string('xsp')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gldetail');
    }
}
