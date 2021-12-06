<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Admin;
use App\models\Roles;
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
        $this->call(RolesTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
