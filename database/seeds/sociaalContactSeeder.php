<?php

use Illuminate\Database\Seeder;
Use App\Models\Sociaal_Contact;
use Illuminate\Support\Facades\DB;
class sociaalContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sociaal_contact')->insert(
            [
                'facebook' => 'https://www.facebook.com/sadour95',
                'twitter' => 'https://twitter.com/ibrahim_sadour',
                'instagram' => 'https://www.instagram.com/ims_1995',
                'linkedin' => 'https://www.linkedin.com/in/ibrahim-sadour-b7aa4a188/'

            ]
        );
    }
}
