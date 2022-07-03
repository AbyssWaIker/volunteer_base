<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TurnVolunteerCategoriesToTree extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('volunteer_categories', function (Blueprint $table) {
            $table->bigInteger('parent_id')->nullable();
            $table->integer('order')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('volunteer_categories', function (Blueprint $table) {
            $table->dropColumn('parent_id');
            $table->dropColumn('order');
        });
    }
}
