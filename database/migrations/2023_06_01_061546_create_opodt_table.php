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
        Schema::create('opodt', function (Blueprint $table) {
            $table->id();
            $table->integer('member_id');
            $table->integer('product_id');
            $table->integer('stock_id');
            $table->string('ztime')->nullable();
            $table->string('zutime')->nullable();
            $table->integer('zid')->nullable();
            $table->string('xordernum')->nullable();
            $table->integer('xrow')->nullable();
            $table->string('xcode')->nullable();
            $table->string('xcodebasis')->nullable();
            $table->string('xitem')->nullable();
            $table->string('xlong')->nullable();
            $table->string('xstype')->nullable();
            $table->string('xwh')->nullable();
            $table->string('xbotype')->nullable();
            $table->string('xdropship')->nullable();
            $table->float('xqtyreq',18,3)->nullable();
            $table->float('xqtyord',18,3)->nullable();
            $table->float('xqtyalc',18,3)->nullable();
            $table->float('xqtybac',18,3)->nullable();
            $table->float('xqtydel',18,3)->nullable();
            $table->float('xqtyinv',18,3)->nullable();
            $table->string('xunitsel')->nullable();
            $table->float('xcfsel',18,3)->nullable();
            $table->float('xwtunit',18,3)->nullable();
            $table->string('xunitwt')->nullable();
            $table->string('xcur')->nullable();
            $table->float('xrate',18,4)->nullable();
            $table->float('xdisc',18,4)->nullable();
            $table->float('xdiscf',18,4)->nullable();
            $table->float('xcomm',18,4)->nullable();
            $table->float('xexch',18,4)->nullable();
            $table->string('xpricebasis')->nullable();
            $table->string('xcurprice')->nullable();
            $table->float('xexchsell',18,4)->nullable();
            $table->float('xprice',18,4)->nullable();
            $table->string('xstatusodt')->nullable();
            $table->string('xtaxcat')->nullable();
            $table->string('xtaxcode1')->nullable();
            $table->float('xtaxrate1',18,4)->nullable();
            $table->string('xtaxcode2')->nullable();
            $table->float('xtaxrate2',18,4)->nullable();
            $table->string('xtaxcode3')->nullable();
            $table->float('xtaxrate3',18,4)->nullable();
            $table->string('xtaxcode4')->nullable();
            $table->float('xtaxrate4',18,4)->nullable();
            $table->string('xtaxcode5')->nullable();
            $table->float('xtaxrate5',18,4)->nullable();
            $table->float('xlineamt',18,4)->nullable();
            $table->string('zemail')->nullable();
            $table->string('xemail')->nullable();
            $table->float('xdtwotax',18,4)->nullable();
            $table->float('xdtdisc',18,4)->nullable();
            $table->float('xdttax',18,4)->nullable();
            $table->string('xbatch')->nullable();
            $table->float('xdtcomm',18,4)->nullable();
            $table->string('xtypeserial')->nullable();
            $table->float('xaitp',18,4)->nullable();
            $table->float('xaitamt',18,4)->nullable();
            $table->string('ximtrnnum')->nullable();
            $table->string('xdept')->nullable();
            $table->float('xcost',18,4)->nullable();
            $table->integer('xsign')->nullable();
            $table->string('xtype')->nullable();
            $table->string('xcompwh')->nullable();
            $table->string('xbin')->nullable();
            $table->float('xdisval',18,4)->nullable();
            $table->string('xdesc')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down():void
    {
        Schema::dropIfExists('opodt');
    }
};
