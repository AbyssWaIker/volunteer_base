<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGranniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grannies', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'UTF8_general_ci';
            $table->id();
            $table->string('granny_name');
            $table->string('address')->nullable();
            $table->string('granny_phone')->nullable();
            $table->string('passport_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grannies');
    }
};
