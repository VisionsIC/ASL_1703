<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAbbreviationToPrimaryPt extends Migration
{
    public function up()
    {
        Schema::create('primary_pt', function (Blueprint $table) {
            $table->string('abbreviation', 5)->after('primary_pt');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pt_primary', function($table) {
            $table->dropColumn('abbreviation');
        });
    }
}
