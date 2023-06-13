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
        Schema::create('caitem', function (Blueprint $table) {
            $table->id();

            $table->string('ztime')->nullable();
            $table->string('zutime')->nullable();
            $table->integer('zid')->nullable();
            $table->string('xitem')->nullable();
            $table->string('xalias')->nullable();
            $table->string('xitemnew')->nullable();
            $table->string('xitemold')->nullable();
            $table->string('xdrawing')->nullable();
            $table->string('xscode')->nullable();
            $table->string('xdesc')->nullable();
            $table->string('xlong')->nullable();
            $table->string('xlinks')->nullable();
            $table->string('xgitem')->nullable();
            $table->string('xcitem')->nullable();
            $table->string('xcat')->nullable();
            $table->string('xpricecat')->nullable();
            $table->string('xtaxcat')->nullable();
            $table->string('xduty')->nullable();
            $table->string('xorigin')->nullable();
            $table->string('xdiv')->nullable();
            $table->string('xwh')->nullable();
            $table->string('xsup')->nullable();
            $table->string('xtypeserial')->nullable();
            $table->string('xbatchman')->nullable();
            $table->string('xabc')->nullable();
            $table->string('xlife')->nullable();
            $table->float('xwtunit',18,3)->nullable();
            $table->float('xunitwt',18,3)->nullable();
            $table->float('xminordqty',18,3)->nullable();
            $table->float('xminordval',18,3)->nullable();
            $table->float('xordmult',18,3)->nullable();
            $table->float('xyleld',18,3)->nullable();
            $table->integer('xdtf')->nullable();
            $table->integer('xptf')->nullable();
            $table->integer('xleadf')->nullable();
            $table->integer('xleadv')->nullable();
            $table->integer('xleadt')->nullable();
            $table->float('xstdcost',18,3)->nullable();
            $table->float('xstdprice',18,3)->nullable();
            $table->string('xunitstk')->nullable();
            $table->string('xunitalt')->nullable();
            $table->string('xunitiss')->nullable();
            $table->string('xunitpck')->nullable();
            $table->string('xunitsta')->nullable();
            $table->float('xcfiss',18,6)->nullable();
            $table->float('xcfpck',18,6)->nullable();
            $table->float('xcfsta',18,6)->nullable();
            $table->string('xtypestk')->nullable();
            $table->string('xhide')->nullable();
            $table->float('xwtnet',18,3)->nullable();
            $table->string('xunit')->nullable();
            $table->float('xl',18,3)->nullable();
            $table->float('xw',18,3)->nullable();
            $table->float('xh',18,3)->nullable();
            $table->date('xdateeff')->nullable();
            $table->date('xdateexp')->nullable();
            $table->string('xnote')->nullable();
            $table->string('xexcisecat')->nullable();
            $table->string('xbrand')->nullable();
            $table->string('xstoporder')->nullable();
            $table->float('xs',18,4)->nullable();
            $table->string('xcatful')->nullable();
            $table->string('xmatrix')->nullable();
            $table->string('xcutpcs')->nullable();
            $table->string('xtypedim')->nullable();
            $table->float('xminprice',18,4)->nullable();
            $table->float('xmargincost', 5,2)->nullable();
            $table->string('xbarcode')->nullable();
            $table->float('xmultisel',18,6)->nullable();
            $table->float('xmultipur',18,6)->nullable();
            $table->float('xstrip',18,3)->nullable();
            $table->string('xloc')->nullable();
            $table->string('xcurcost')->nullable();
            $table->string('xcurprice')->nullable();
            $table->float('xdisc',5,2)->nullable();
            $table->float('xcomm',5,2)->nullable();
            $table->string('xstype')->nullable();
            $table->string('xunitpur')->nullable();
            $table->string('xunitsel')->nullable();
            $table->float('xcfpur',18,6)->nullable();
            $table->float('xcfsel',18,6)->nullable();
            $table->text('zemail')->nullable();
            $table->text('xemail')->nullable();
            $table->string('xbin')->nullable();
            $table->string('xmanufacturer')->nullable();
            $table->string('xtitem')->nullable();
            $table->string('xwarranty')->nullable();
            $table->string('xmethserial')->nullable();
            $table->string('xcostmeth')->nullable();
            $table->string('xbinman')->nullable();
            $table->date('xdatearr')->nullable();
            $table->date('xdateacq')->nullable();
            $table->float('xratio',18,2)->nullable();
            $table->float('xqtydor',18,2)->nullable();
            $table->float('xqtyrem',18,2)->nullable();
            $table->float('xnetrate',18,2)->nullable();
            $table->float('xremrate',18,2)->nullable();
            $table->float('xremamt',18,2)->nullable();
            $table->string('xflagrfq')->nullable();
            $table->float('xprice',20,4)->nullable();
            $table->string('xremark')->nullable();
            $table->string('xcolor')->nullable();
            $table->string('xmaterial')->nullable();
            $table->string('xeccnum')->nullable();
            $table->string('xeccrange')->nullable();
            $table->string('xrandom')->nullable();
            $table->string('xnameonly')->nullable();
            $table->string('xresponse')->nullable();
            $table->string('xslot')->nullable();
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
        Schema::dropIfExists('caitem');
    }
};
