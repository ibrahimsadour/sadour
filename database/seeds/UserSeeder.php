<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert Admin information to databse
        $add_admin = new App\User;
        $add_admin ->avatar_id = "1";
        $add_admin ->name = "Ibrahim Sadour";
        $add_admin ->email  = "i.m.s.1995@hotmail.com";
        $add_admin ->password = Hash::make('ibrahem810907');
        $add_admin->save();


        // give the user role "Admin"
        $add_admin->assignRole('Admin');
    }
}
