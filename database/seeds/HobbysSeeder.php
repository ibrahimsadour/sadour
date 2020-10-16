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

        DB::table('hobbys')->insert([
            [
                'translation_lang' => 'en',
                'name' => 'Muziek',
                'slug' => 'ltr',
                'active' => '1',
            ],
            [
                'translation_lang' => 'en',
                'name' => 'Gaming',
                'slug' => 'ltr',
                'active' => '1',
            ],           
            [
                'translation_lang' => 'en',
                'name' => 'Photography',
                'slug' => 'ltr',
                'active' => '1',
            ],           
            [
                'translation_lang' => 'en',
                'name' => 'Lezen',
                'slug' => 'ltr',
                'active' => '1',
            ],           [
                'translation_lang' => 'en',
                'name' => 'Reizen',
                'slug' => 'ltr',
                'active' => '1',
            ],           
            [
                'translation_lang' => 'en',
                'name' => 'Sport',
                'slug' => 'ltr',
                'active' => '1',
            ]       

        ]);

    }
}
