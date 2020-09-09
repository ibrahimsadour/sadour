<?php

use Illuminate\Database\Seeder;
Use App\Models\Admin;
use Illuminate\Support\Facades\DB;
class Admin_informatieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $add_admin_informatie = new Admin;
        $add_admin_informatie ->name = "Ibrahim Sadour";
        $add_admin_informatie ->description  = "Ibrahim Sadour is a material CV / Resume / Vcard / Portfolio HTML5 template by Sadour.";
        $add_admin_informatie ->keywords = "material design, resume, responsive template, cv, multipurpose, portfolio, html5 template, themeforest.net, bootstrap, html5, creative, landing page, sass, clean, design, modern, angular js,";
        $add_admin_informatie ->date = "1995";
        $add_admin_informatie ->Address = "Jan Bestevaerstraat 6 , 1541KP Koog aan de zaan";
        $add_admin_informatie ->Email = "i.m.s.1995@hotmail.com";
        $add_admin_informatie ->Phone = "+31 685 125822";
        $add_admin_informatie ->function = "BACK END & FRONT END DEVELOPER";
        $add_admin_informatie ->view = "1";
        $add_admin_informatie->save();
    }
}
