<?php

use Illuminate\Database\Seeder;
Use App\Models\Opleiding;
use Illuminate\Support\Facades\DB;
class OpleidingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       
        DB::table('opleiding')->insert([
            [
                'education_name' => 'ICT-Opleiding Applicatieontwikkelaar Niveau 4',
                'period' => '01-09-2018 Tot Nu ( Nog Bezig )',
                'place' => 'In Nederland',
            ],
            [
                'education_name' => 'Middelbaarschool',
                'period' => '2009 Tot 2012',
                'place' => 'In Syrie',
            ],

        ]);


    }
}
