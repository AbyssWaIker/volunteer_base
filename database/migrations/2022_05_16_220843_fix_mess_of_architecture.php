<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixMessOfArchitecture extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Trying to kinda fix the mess (created by constantly changing goals)
        // so the final architecture becomes a bit more sane, while data in production - intact

        //Each person is recorded in separate row instead of json,
        // So we bind families together by the fact they've received help together
        Schema::create('destitute_help_given', function (Blueprint $table) {
            $table->id();
            $table->foreignId('destitute_id');
            $table->foreignId('help_given_id');
        });
        Schema::table('help_givens', function (Blueprint $table) {
            $table->string('address')->nullable();
        });
        Schema::table('destitutes', function (Blueprint $table) {
            $table->date('date_of_birth')->nullable()->comment('Children with unknown date I write as being born in 2099');
        });
        \App\Models\Destitute::query()->chunkById(10, function (\Illuminate\Database\Eloquent\Collection $destitutes){
            foreach ($destitutes as $original_destitute) {
                if($original_destitute->year_of_birth) {
                    $original_destitute->date_of_birth = \Carbon\Carbon::create($original_destitute->year_of_birth);
                    $original_destitute->save();
                }
                $family = [$original_destitute->id];
                if($original_destitute->family_members) {
                    $family_members = array_filter(array_values($original_destitute->family_members));
                    foreach ($family_members as $member) {
                        if(@$member['is_child']){
                            unset($member['is_child']);
                            $member['date_of_birth'] = \Carbon\Carbon::create(2099,12,31);
                        }
                        $family[] = \App\Models\Destitute::query()->create($member)->id;
                    }
                }
                $help = $original_destitute->helpGiven;
                foreach ($help as $item) {
                    $item->destitutes()->sync($family);
                    $item->address = $original_destitute->address;
                    $item->save();
                }
            }
        });
        Schema::table('help_givens', function (Blueprint $table) {
            $table->dropColumn('destitute_id');
        });
        Schema::table('destitutes', function (Blueprint $table) {
            $table->dropColumn('year_of_birth');
            $table->dropColumn('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
