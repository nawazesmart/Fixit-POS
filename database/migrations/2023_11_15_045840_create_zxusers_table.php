<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZxusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zxusers', function (Blueprint $table) {
            $table->string('ztime')->nullable();
            $table->string('zutime')->nullable();
            $table->integer('zid')->nullable();
            $table->string('zemail')->nullable();
            $table->string('xpassword')->nullable();
            $table->string('xaccess')->nullable();
            $table->string('xname')->nullable();
            $table->string('xphone')->nullable();
            $table->string('xmobile')->nullable();
            $table->string('xdformat')->nullable();
            $table->string('xdsep')->nullable();
            $table->string('zref')->nullable();
            $table->string('zchanged')->nullable();
            $table->string('xlanguage')->nullable();
            $table->string('xscprefix')->nullable();
            $table->string('xscexclude')->nullable();
            $table->string('xautoshow')->nullable();
            $table->string('xtooltips')->nullable();
            $table->string('xmodules')->nullable();
            $table->string('zactive')->nullable();
            $table->string('xassetid')->nullable();
            $table->string('xsingleses')->nullable();
            $table->string('xques')->nullable();
            $table->string('xans')->nullable();
            $table->string('xcustom')->nullable();
            $table->string('xaccessloc')->nullable();
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
        Schema::dropIfExists('zxusers');
    }
}
