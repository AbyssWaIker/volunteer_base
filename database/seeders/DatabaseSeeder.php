<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(DestituteCategoriesTableSeeder::class);
        // $this->call(DestitutesTableSeeder::class);
        // $this->call(DestituteDestituteCategoryTableSeeder::class);
        // $this->call(HelpGivensTableSeeder::class);
        $this->call(AdminUsersTableSeeder::class);
        $this->call(AdminRolesTableSeeder::class);
        $this->call(AdminMenuTableSeeder::class);
        $this->call(AdminPermissionsTableSeeder::class);
        $this->call(AdminRolePermissionsTableSeeder::class);
        $this->call(AdminRoleUsersTableSeeder::class);
        $this->call(AdminUserPermissionsTableSeeder::class);
        $this->call(AdminOperationLogTableSeeder::class);
        $this->call(AdminRoleMenuTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(StocksTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VolunteerCategoriesTableSeeder::class);
        // $this->call(VolunteersTableSeeder::class);
        // $this->call(VolunteerVolunteerCategoryTableSeeder::class);
        $this->call(AdminConfigTableSeeder::class);
        $this->call(RefugeeSheltersTableSeeder::class);
        $this->call(BorderCrossingOptionsTableSeeder::class);
        $this->call(StockCategoriesTableSeeder::class);

        //Needed because after seeding, sequence is out of sync in pgsql
        $tables = \DB::connection()->getDoctrineSchemaManager()->listTableNames();
        $tables_without_id = [
            'password_resets',
            'admin_role_menu',
            'admin_role_permissions',
            'admin_role_users',
            'admin_user_permissions',
        ];
        $tables = array_filter($tables, function ($table) use($tables_without_id){return !in_array($table,$tables_without_id);});
        foreach ($tables as $table) {
            \DB::select(\DB::raw(<<<SQL
SELECT SETVAL((SELECT PG_GET_SERIAL_SEQUENCE('"{$table}"', 'id')), (SELECT (MAX("id") + 1) FROM "$table"), FALSE);
SQL));
        }
    }
}
