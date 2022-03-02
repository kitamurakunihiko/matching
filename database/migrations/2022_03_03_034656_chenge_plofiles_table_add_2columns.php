<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChengePlofilesTableAdd2columns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            //
            $table->string('mood')->after('count');
        });
        
        Schema::table('profiles', function (Blueprint $table) {
            //
            $table->text('word')->nullable()->after('count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            //
            $table->dropColumn('mood');
        });
        
        Schema::table('profiles', function (Blueprint $table) {
            //
            $table->dropColumn('word');
        });
    }
}
