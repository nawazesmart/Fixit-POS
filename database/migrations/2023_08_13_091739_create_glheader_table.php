<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGlheaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('glheader', function (Blueprint $table) {
            $table->id();
            $table->string('ztime')->nullable();
            $table->string('zutime')->nullable();
            $table->integer('zid')->nullable();
            $table->string('xvoucher')->nullable();
            $table->string('xref')->nullable();
            $table->date('xdate')->nullable();
            $table->string('xlong')->nullable();
            $table->string('xpostflag')->nullable();
            $table->integer('xyear')->nullable();
            $table->integer('xper')->nullable();
            $table->date('xstatussjv')->nullable();
            $table->string('xdesc01')->nullable();
            $table->string('xdesc02')->nullable();
            $table->string('xdesc03')->nullable();
            $table->string('xdesc04')->nullable();
            $table->string('xdesc05')->nullable();
            $table->string('xictrnno')->nullable();
            $table->string('dumzid')->nullable();
            $table->string('zemail')->nullable();
            $table->string('xemail')->nullable();
            $table->string('xaccdr')->nullable();
            $table->string('xsubdr')->nullable();
            $table->integer('xnumofper')->nullable();
            $table->string('xcheque')->nullable();
            $table->string('xpaytype')->nullable();
            $table->string('xstatus')->nullable();
            $table->string('xtrngl')->nullable();
            $table->string('xnote')->nullable();
            $table->string('xteam')->nullable();
            $table->string('xmember')->nullable();
            $table->string('xmanager')->nullable();
            $table->string('xapproved')->nullable();
            $table->string('xaction')->nullable();
            $table->string('xcus')->nullable();
            $table->string('xaccar')->nullable();
            $table->float('xamount', 18 ,6)->nullable();
            $table->date('xdateiss')->nullable();
            $table->string('xconuser')->nullable();
            $table->string('xconfirmt')->nullable();
            $table->string('xfailer')->nullable();
            $table->string('xfailedt')->nullable();


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
        Schema::dropIfExists('glheader');
    }
}
