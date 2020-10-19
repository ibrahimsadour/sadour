<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wat_ik_doe')->insert([
            [
                'titel' => 'Gebruikersomgeving',
                'description' => 'Een mobiele eerste responsieve sjabloon met materiaalontwerp.',
                'translation_lang' => 'en',
                'translation_of' => '0',
                'slug' => 'Gebruikersomgeving',
                'active' => '1'

            ],
            [
                'titel' => 'Branding',
                'description' => 'Wordt geleverd met lichte en donkere opties. Geschikt voor het universum.',
                'translation_lang' => 'en',
                'translation_of' => '0',
                'slug' => 'Branding',
                'active' => '1'
            ],
            [
                'titel' => 'Communicatie',
                'description' => 'Buitengewoon instellingspaneel met veel geweldige functies.',
                'translation_lang' => 'en',
                'translation_of' => '0',
                'slug' => 'Branding',
                'active' => '1'

            ],
            [
                'titel' => 'Strategie',
                'description' => 'Eenvoudig aanpasbaar framework met bootstrap sass.',
                'translation_lang' => 'en',
                'translation_of' => '0',
                'slug' => 'Branding',
                'active' => '1'

            ],

        ]);
    }
}
