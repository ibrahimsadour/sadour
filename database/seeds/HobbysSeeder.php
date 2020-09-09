<?php

use Illuminate\Database\Seeder;
Use App\Models\Hobbys;
use Illuminate\Support\Facades\DB;
class HobbysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hobbys::create(['name' => 'Muziek']);
        Hobbys::create(['name' => 'Gaming']);
        Hobbys::create(['name' => 'Photography']);
        Hobbys::create(['name' => 'Lezen']);
        Hobbys::create(['name' => 'Reizen']);
        Hobbys::create(['name' => 'Sport']);

    }
}
