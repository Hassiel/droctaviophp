<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('subtitulo1')->nullable();
            $table->longText('subdesc1')->nullable();
            $table->string('subtitulo2')->nullable();
            $table->longText('subdesc2')->nullable();
            $table->mediumText('quote')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('subtitulo1');
            $table->dropColumn('subdesc1');
            $table->dropColumn('subtitulo2');
            $table->dropColumn('subdesc2');
            $table->dropColumn('quote');
        });
    }
}
