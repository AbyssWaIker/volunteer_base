<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks_sents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stock_id')->constrained();
            $table->foreignId('quantity_unit_id')->constrained();
            $table->foreignId('sending_id')->constrained()->cascadeOnDelete();
            $table->integer('quantity')->unsigned();
            $table->boolean('deficit_status')->default(\App\Models\Stock::DEFICIT_STATUS_NO_DEFICIT);
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
        Schema::dropIfExists('stocks_sents');
    }
};
