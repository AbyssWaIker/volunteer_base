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
        $this->call(DestitutesTableSeeder::class);
        $this->call(HelpGivensTableSeeder::class);
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
        $this->call(QuantityUnitsTableSeeder::class);
        $this->call(ReceivingPointsTableSeeder::class);
        $this->call(SendingsTableSeeder::class);
        $this->call(StockCategoriesTableSeeder::class);
        $this->call(StocksTableSeeder::class);
        $this->call(StocksSentsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DestituteCategoriesTableSeeder::class);
    }
}
