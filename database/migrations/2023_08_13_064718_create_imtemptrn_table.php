<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImtemptrnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imtemptrn', function (Blueprint $table) {
            $table->id();
            $table->string('ztime')->nullable();
            $table->string('zutime')->nullable();
            $table->string('zid')->nullable();
            $table->string('ximtmptrn')->nullable();
            $table->string('xref')->nullable();
            $table->date('xdate')->nullable();
            $table->integer('xyear')->nullable();
            $table->integer('xper')->nullable();
            $table->date('xdatecom')->nullable();
            $table->string('xrem')->nullable();
            $table->string('xstatustor')->nullable();
            $table->string('xdiv')->nullable();
            $table->string('xsec')->nullable();
            $table->string('xproj')->nullable();
            $table->string('xwh')->nullable();
            $table->integer('xsign')->nullable();
            $table->string('xaction')->nullable();
            $table->string('zemail')->nullable();
            $table->string('xemail')->nullable();
            $table->string('xdept')->nullable();
            $table->string('xtrnimf')->nullable();
            $table->string('xtrnimt')->nullable();
            $table->string('xglref')->nullable();
            $table->string('xsup')->nullable();
            $table->string('xcus')->nullable();
            $table->string('xteam')->nullable();
            $table->string('xmember')->nullable();
            $table->string('xmanager')->nullable();
            $table->string('xtyperec')->nullable();
            $table->date('xdateinv')->nullable();
            $table->string('xstatustrn')->nullable();
            $table->string('xapprover')->nullable();
            $table->string('xemail1')->nullable();
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
        Schema::dropIfExists('imtemptrn');
    }
}
