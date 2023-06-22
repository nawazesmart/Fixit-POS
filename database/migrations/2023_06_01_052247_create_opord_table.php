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
    public function up():void
    {
        Schema::create('opord', function (Blueprint $table) {
            $table->id();
            $table->string('sale_id');
            $table->foreignId('users_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamp('ztime')->useCurrent();
            $table->timestamp('zutime')->useCurrent();
            $table->integer('zid')->nullable();
            $table->string('xordernum')->nullable();
            $table->date('xdate')->nullable();
            $table->text('xcus')->nullable();
            $table->string('xcus')->nullable();
            $table->string('xcuspo')->nullable();
            $table->date('xdatecus')->nullable();
            $table->string('xdiv')->nullable();
            $table->string('xsec')->nullable();
            $table->string('xprog')->nullable();
            $table->string('xstatusord')->nullable()->default('Confirmed');
            $table->float('xappamt')->nullable();
            $table->string('xappcode')->nullable();
            $table->string('xcur')->nullable()->default('BDT');
            $table->float('xexch',18,10)->nullable();
            $table->float('xdisc',5,2)->nullable();
            $table->float('xdiscf',18,2)->nullable();
            $table->string('xwh')->nullable();
            $table->string('zemail')->nullable();
            $table->string('xemail')->nullable();
            $table->float('xdtwotax',18,2)->nullable();
            $table->float('xdtdisc',18,2)->nullable()->default('0.00%');
            $table->float('xdttax',18,2)->nullable()->default('0.00%');
            $table->float('xval',18,2)->nullable();
            $table->float('xdiscamt',18,2)->nullable();
            $table->float('xtotamt',18,2)->nullable();
            $table->string('xsp')->nullable();
            $table->string('xremark')->nullable();
            $table->string('xsltype')->nullable();
            $table->string('xsalescat')->nullable();
            $table->string('xtrnord')->nullable();
            $table->string('xdocnum')->nullable();
            $table->float('xdtcomm',18,2)->nullable();
            $table->string('xteam')->nullable();
            $table->string('xmember')->nullable();
            $table->string('xmanager')->nullable();
            $table->string('xinvrule')->nullable();
            $table->string('xquoteby')->nullable();
            $table->string('xref')->nullable();
            $table->string('xcounterno')->nullable();
            $table->integer('xyear')->nullable();
            $table->integer('xper')->nullable();
            $table->string('xdept')->nullable();
            $table->string('xemp')->nullable();
            $table->string('xpflag')->nullable();
            $table->string('xtaxed')->nullable();
            $table->string('xstr01')->nullable();
            $table->string('xinvnum')->nullable();
            $table->string('xdornum')->nullable();
            $table->string('xwhoption')->nullable();
            $table->string('xthana')->nullable();
            $table->string('xmobile')->nullable();
            $table->text('xname')->nullable();
            $table->integer('xadd1')->nullable();
            $table->timestamp('xdatecon')->nullable();
            $table->float('xamtpaid',20,2)->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down():void
    {
        Schema::dropIfExists('opord');
    }
};
