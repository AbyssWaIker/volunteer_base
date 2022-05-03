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
        Schema::table('destitute', function (Blueprint $table) {
            $table->renameColumn('comment', 'reference_id');
            $table->string('comment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('destitute', function (Blueprint $table) {
            $table->dropColumn('comment');
            $table->renameColumn('reference_id', 'comment');
        });
    }
}
