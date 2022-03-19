<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestituteDestituteCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destitute_destitute_category', function (Blueprint $table) {
            $table->id();
            $table->foreignId('destitute_id')->constrained()->cascadeOnDelete();
            $table->foreignId('destitute_category_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destitute_destitute_category');
    }
}
