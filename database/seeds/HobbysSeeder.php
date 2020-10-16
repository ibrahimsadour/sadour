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
                'translation_of' => '0',
                'name' => 'Muziek',
                'slug' => 'ltr',
                'active' => '1',
            ],
            [
                'translation_lang' => 'en',
                'translation_of' => '0',
                'name' => 'Gaming',
                'slug' => 'ltr',
                'active' => '1',
            ],           
            [
                'translation_lang' => 'en',
                'translation_of' => '0',
                'name' => 'Photography',
                'slug' => 'ltr',
                'active' => '1',
            ],           
            [
                'translation_lang' => 'en',
                'translation_of' => '0',
                'name' => 'Lezen',
                'slug' => 'ltr',
                'active' => '1',
            ],           [
                'translation_lang' => 'en',
                'translation_of' => '0',
                'name' => 'Reizen',
                'slug' => 'ltr',
                'active' => '1',
            ],           
            [
                'translation_lang' => 'en',
                'translation_of' => '0',
                'name' => 'Sport',
                'slug' => 'ltr',
                'active' => '1',
            ]       

        ]);

    }
}
