<?php

use App\Models\Destitute;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBirthDateToDestitutes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('destitutes', function (Blueprint $table) {
            Schema::table('destitutes', function (Blueprint $table) {
                $table->date('date_of_birth')->nullable()->comment('Children with unknown date I write as being born in 2099');
            });
            $destitutes = \App\Models\Destitute::all();

            // \App\Models\Destitute::query()->chunk(10, function (\Illuminate\Database\Eloquent\Collection $destitutes){
                foreach ($destitutes as $original_destitute) {
                    if($original_destitute->year_of_birth) {
                        $original_destitute->date_of_birth = \Carbon\Carbon::create($original_destitute->year_of_birth);
                    }
                    if($original_destitute->family_members) {
                        $family_members = $original_destitute->family_members ? array_filter($original_destitute->family_members) : [];
                        foreach ($family_members as &$member) {
                            if(@$member['is_child']){
                                unset($member['is_child']);
                                $member['date_of_birth'] = strtotime(@$member['comment']?:'') ?:\Carbon\Carbon::now();
                            }
                        }
                        $original_destitute->family_members = $family_members;
                    }
                    // if($original_destitute->year_of_birth || @$original_destitute->family_members){
                        $original_destitute->save();
                    // }
                }
            // });
            Schema::table('destitutes', function (Blueprint $table) {
                $table->dropColumn('year_of_birth');
            });
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
            //
        });
    }
}
