<?php

use Illuminate\Database\Seeder;
Use App\Models\Profile;
use Illuminate\Support\Facades\DB;
class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert(
            [
                'first_name' => 'Ibrahim',
                'last_name' => 'Sadour',
                'user_id' => '1',
                'birthday' => '01/01/1995',
                'gender' => 'Gender',
                'email' => 'i.m.s.1995@hotmail.com',
                'phone' => '0685125822',
                'address' => ' Jan Bestevaerstraat',
                'number' => ' 6',
                'city' => ' Koog aan de Zaan',
                'zip' => ' 1541KP',
            ]
          
        );
    }
}
