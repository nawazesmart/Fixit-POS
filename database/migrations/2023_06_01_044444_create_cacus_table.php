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
        Schema::create('cacus', function (Blueprint $table) {
            $table->id();
            $table->string('ztime')->nullable();
            $table->string('zutime')->nullable();
            $table->integer('zid')->nullable();
            $table->text('xcus')->nullable();
            $table->text('xshort')->nullable();
            $table->text('xorg')->nullable();
            $table->integer('xadd1')->nullable();
            $table->integer('xadd2')->nullable();
            $table->text('xcity')->nullable();
            $table->text('xstate')->nullable();
            $table->integer('xzip')->nullable();
            $table->text('xcountry')->nullable();
            $table->string('xsalute')->nullable();
            $table->string('xfirst')->nullable();
            $table->string('xmiddle')->nullable();
            $table->string('xlast')->nullable();
            $table->string('xtitle')->nullable();
            $table->string('xemail')->nullable();
            $table->string('xphone')->nullable();
            $table->string('xmobile')->nullable();
            $table->string('xfax')->nullable();
            $table->string('xurl')->nullable();
            $table->string('xid')->nullable();
            $table->string('xtaxnum')->nullable();
            $table->string('xaccar')->nullable();
            $table->string('xacctd')->nullable();
            $table->string('xgcus')->nullable();
            $table->string('xprice')->nullable();
            $table->string('xsic')->nullable();
            $table->string('xtaxscope')->nullable();
            $table->string('xststuscus')->nullable();
            $table->float('xcrlimit')->nullable();
            $table->string('xcreditr')->nullable();
            $table->integer('xcrterms')->nullable();
            $table->float('xdisc')->nullable();
            $table->string('xagent')->nullable();
            $table->float('xcomm')->nullable();
            $table->string('xpayins')->nullable();
            $table->string('xindustry')->nullable();
            $table->date('xdatecra')->nullable();
            $table->date('xdateapp')->nullable();
            $table->date('xdateexp')->nullable();
            $table->date('xdatecorp')->nullable();
            $table->date('xdatecre')->nullable();
            $table->date('xdatefst')->nullable();
            $table->string('xbilladd')->nullable();
            $table->string('xlicense')->nullable();
            $table->string('xtypebo')->nullable();
            $table->string('xeccnum')->nullable();
            $table->string('xeccrange')->nullable();
            $table->string('xeccrdiv')->nullable();
            $table->string('xecccom')->nullable();
            $table->string('xvatnum')->nullable();
            $table->string('xcstnum')->nullable();
            $table->string('xpannum')->nullable();
            $table->string('xregoff')->nullable();
            $table->string('xmethodpay')->nullable();
            $table->string('xmethodship')->nullable();
            $table->string('xrem')->nullable();
            $table->float('xpoints')->nullable();
            $table->string('xsp')->nullable();
            $table->date('xdate')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('cacus');
    }
};
