<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PostgreFix extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Needed because after seeding, sequence is out of sync
        $tables = DB::connection()->getDoctrineSchemaManager()->listTableNames();
        $tables_without_id = [
            'password_resets',
            'admin_role_menu',
            'admin_role_permissions',
            'admin_role_users',
            'admin_user_permissions',
        ];
        $tables = array_filter($tables, function ($table) use($tables_without_id){return !in_array($table,$tables_without_id);});
        foreach ($tables as $table) {
            DB::select(DB::raw(<<<SQL
SETVAL((SELECT PG_GET_SERIAL_SEQUENCE('"{$table}"', 'id')), (SELECT (MAX("id") + 1) FROM "$table"), FALSE);
SQL));
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
