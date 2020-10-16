<?php

use Illuminate\Database\Seeder;
Use App\Models\Language;
use Illuminate\Support\Facades\DB;
class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ervaring')->insert([
            [
                'abbr' => 'en',
                'locale' => 'en',
                'name' => 'English',
                'direction' => 'ltr',
                'active' => '1',
            ],
            [
                'abbr' => 'nl',
                'locale' => 'nl',
                'name' => 'Netherland',
                'direction' => 'ltr',
                'active' => '1',
            ]      

        ]);
    }
}
