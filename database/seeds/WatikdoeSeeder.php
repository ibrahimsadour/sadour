<?php

use Illuminate\Database\Seeder;
Use App\Models\Watikdoe;
use Illuminate\Support\Facades\DB;
class WatikdoeSeeder extends Seeder
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
                'description' => 'Een mobiele eerste responsieve sjabloon met materiaalontwerp.'

            ],
            [
                'titel' => 'Branding',
                'description' => 'Wordt geleverd met lichte en donkere opties. Geschikt voor het universum.'
            ],
            [
                'titel' => 'Communicatie',
                'description' => 'Buitengewoon instellingspaneel met veel geweldige functies.'

            ],
            [
                'titel' => 'Strategie',
                'description' => 'Eenvoudig aanpasbaar framework met bootstrap sass.'

            ],

        ]);
    }
}
