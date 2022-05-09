<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD:database/migrations/2022_05_03_115244_add_comment copy.php
class MakeComment extends Migration
=======
class AddCommentCopy extends Migration
>>>>>>> 2b00b683ad037aa0551780383d23816dfc301cf8:database/migrations/2022_03_12_173722_create_sendings_table.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('destitutes', function (Blueprint $table) {
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
        Schema::table('destitutes', function (Blueprint $table) {
            $table->dropColumn('comment');
        });
    }
}
