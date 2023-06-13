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
        Schema::create('zbusiness', function (Blueprint $table){
            $table->id();
            $table->string('ztime')->nullable();
            $table->string('zutime')->nullable();
            $table->integer('zid')->nullable();
            $table->text('xshort')->nullable();
            $table->text('xtaxnum')->nullable();
            $table->text('zorg')->nullable();
            $table->integer('xadd1')->nullable();
            $table->integer('xadd2')->nullable();
            $table->text('xcity')->nullable();
            $table->text('xstate')->nullable();
            $table->integer('xzip')->nullable();
            $table->text('xcountry')->nullable();
            $table->string('xphone')->nullable();
            $table->string('xfax')->nullable();
            $table->string('xcontact')->nullable();
            $table->string('xemail')->nullable();
            $table->string('xurl')->nullable();
            $table->string('xdformat')->nullable()->default('Month-Day-Year');
            $table->string('xdsep')->nullable();
            $table->text('xtimage')->nullable();
            $table->text('xbimage')->nullable();
            $table->string('xcoustom')->nullable();
            $table->tinyInteger('zactive')->default('1')->nullable();
            $table->text('zemail')->nullable();
            $table->integer('zcommand')->nullable();
            $table->text('ztextcap')->nullable();
            $table->string('xcur')->nullable();
            $table->string('zsinglecur')->nullable();
            $table->string('xid')->nullable();
            $table->string('xcss')->nullable();
            $table->string('xacterr')->nullable();
            $table->string('xactlog')->nullable();
            $table->string('xactsms')->nullable();
            $table->string('xactmail')->nullable();
            $table->string('xactact')->nullable();
            $table->string('xacthis')->nullable();
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
       Schema::dropIfExists('zbusiness');
    }
};
