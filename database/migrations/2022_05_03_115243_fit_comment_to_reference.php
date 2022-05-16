<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FitCommentToReference extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('destitutes', function (Blueprint $table) {
            $table->renameColumn('comment', 'reference_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('destitutes', function (Blueprint $table) {
            $table->renameColumn('reference_id', 'comment');
        });
    }
}
