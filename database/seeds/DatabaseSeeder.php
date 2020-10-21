<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
// use database\seeds\ServiceSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(Admin_informatieSeeder::class);
        $this->call(OpleidingSeeder::class);
        $this->call(ErvaringSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(sociaalContactSeeder::class);
        $this->call(HobbysSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(LanguageSeeder::class);

        
    }
}
