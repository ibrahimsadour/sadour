<?php

use Illuminate\Database\Seeder;
Use App\Models\Ervaring;
use Illuminate\Support\Facades\DB;
class ErvaringSeeder extends Seeder
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
                'company_name' => 'Winkel ( Hardware En Software ) [ Monteur En Verkoper ]',
                'place' => 'In Syrie',
                'period' => '2009 Tot 2012',
                'description' => '****',
            ],
            [
                'company_name' => 'Bedrijf Al Rahman [Auto Onderdelen Verkoper]',
                'place' => 'In Syrie',
                'period' => 'Van 2011 Tot 2015',
                'description' => '*****',
            ],            
            [
                'company_name' => 'Didi Export En Autodemontage B.V. [ Verkoper Auto Onderdelen ]',
                'place' => 'In Nederland',
                'period' => 'Van 08-2016 Tot 11-2016',
                'description' => '****',
            ],            
            [
                'company_name' => 'Albert Heijn Distributie Centrum [Order Picker]',
                'place' => 'In Nederland',
                'period' => 'Van 04-2018 Tot 04-2019',
                'description' => '*****',
            ],
            [
                'company_name' => 'Jaspers Media [ ICT  Bedrijf ] ( stage)',
                'place' => 'In Nederland',
                'period' => 'Van 26-08-2019 tot 01-03-2020',
                'description' => '*****',
            ],
            [
                'company_name' => 'Yeagger  [ ICT Bedrijf ] ( Stage)',
                'place' => 'In Nederland',
                'period' => 'Van 17-08-2020 Tot heden',
                'description' => '*****',
            ],

        ]);
    }
}
