<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//class CreateImtrnTable extends Migration
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imtrn', function (Blueprint $table) {
            $table->id();
            $table->string('ztime')->nullable();
            $table->string('zutime')->nullable();
            $table->integer('zid')->nullable();
            $table->string('ximtrnnum')->nullable();
            $table->string('xitem')->nullable();
            $table->string('xitemrow')->nullable();
            $table->string('xitemcol')->nullable();
            $table->string('xwh')->nullable();
            $table->date('xdate')->nullable();
            $table->date('xyear')->nullable();
            $table->date('xper')->nullable();
            $table->float('xqty',18,6)->nullable();
            $table->float('xval',18,6)->nullable();
            $table->float('xvalpost',18,6)->nullable();
            $table->string('xdoctyp')->nullable();
            $table->string('xdocnum')->nullable();
            $table->integer('xdocrow')->nullable();
            $table->string('xnote')->nullable();
            $table->float('xaltqty',18,6)->nullable();
            $table->string('xdiv')->nullable();
            $table->string('xsec')->nullable();
            $table->string('xproj')->nullable();
            $table->string('xbatch')->nullable();
            $table->date('xdateexp')->nullable();
            $table->date('xdaterec')->nullable();
            $table->string('xlicense')->nullable();
            $table->string('xcus')->nullable();
            $table->string('xsup')->nullable();
            $table->string('xaction')->nullable();
            $table->integer('xsign')->nullable();
            $table->date('xtime')->nullable();
            $table->string('zemail')->nullable();
            $table->string('xemail')->nullable();
            $table->string('xtrnim')->nullable();
            $table->float('xfrslnum',18)->nullable();
            $table->float('xtoslnum')->nullable();
            $table->string('xrectrn')->nullable();
            $table->string('xbin')->nullable();
            $table->string('xteam')->nullable();
            $table->string('xmember')->nullable();
            $table->string('xmanager')->nullable();
            $table->string('xdept')->nullable();
            $table->float('xstdprice')->nullable();



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
        Schema::dropIfExists('imtrn');
    }
}
