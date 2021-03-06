<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteerVolunteerCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteer_volunteer_category', function (Blueprint $table) {
            $table->id();
            $table->foreignId('volunteer_id')->constrained()->cascadeOnDelete();
            $table->foreignId('volunteer_category_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volunteer_volunteer_category');
    }
}
