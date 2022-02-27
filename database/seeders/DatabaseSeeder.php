<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('data_rows')->truncate();
        DB::table('data_types')->truncate();
        $this->call(AboutMallTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(EntertainmentsTableSeeder::class);
        $this->call(EsentaiAppInfoTableSeeder::class);
        $this->call(FoodAndBeverageTableSeeder::class);
        $this->call(NewsAndEventsTableSeeder::class);
        $this->call(ShopsAndBoutiquesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(BrandsHandbookTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
