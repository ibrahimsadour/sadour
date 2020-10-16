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
                'translation_of' => 'en',
                'name' => 'Muziek',
                'slug' => 'ltr',
                'active' => '1',
            ],
            [
                'translation_lang' => 'en',
                'translation_of' => 'en',
                'name' => 'Gaming',
                'slug' => 'ltr',
                'active' => '1',
            ],           
            [
                'translation_lang' => 'en',
                'translation_of' => 'en',
                'name' => 'Photography',
                'slug' => 'ltr',
                'active' => '1',
            ],           
            [
                'translation_lang' => 'en',
                'translation_of' => 'en',
                'name' => 'Lezen',
                'slug' => 'ltr',
                'active' => '1',
            ],           [
                'translation_lang' => 'en',
                'translation_of' => 'en',
                'name' => 'Reizen',
                'slug' => 'ltr',
                'active' => '1',
            ],           
            [
                'translation_lang' => 'en',
                'translation_of' => 'en',
                'name' => 'Sport',
                'slug' => 'ltr',
                'active' => '1',
            ]       

        ]);

    }
}
