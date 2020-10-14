<?php
namespace App\Http\Controllers\ShowStringController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,Session;
Use App\User;
Use App\Models\Ervaring;
Use App\Models\Contact;
Use App\Models\Sociaal_Contact;

class ShowStringController extends Controller
{
    
  /**
   * Show the application dashboard.
   * this is important function on the site becuse her show all string on the site
   * @website_strings to show all website string from datebase to the site
   * @ervaring_strings to show all website string from datebase to the site
   * @website_watikdoe to show all website string from datebase to the site
   * @website_hobbys to show all website string from datebase to the site
   * @website_sociaal_contact to show all website string from datebase to the site
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function show_string()
  {
    $website_strings = DB::select('select * from admin_informatie where id = ?', [1]);

    $ervaring_strings = DB::select('select * from ervaring ');

    $website_watikdoe = DB::select('select * from wat_ik_doe ');

    $website_hobbys = DB::select('select * from  hobbys');

    $website_sociaal_contact = DB::select('select * from  sociaal_contact');

    return view('sadour',
    [
      'website_strings'=>$website_strings,
      'ervaring_strings'=>$ervaring_strings,
      'website_watikdoe'=>$website_watikdoe,
      'website_hobbys'=>$website_hobbys,
      'website_sociaal_contact'=>$website_sociaal_contact
    ]);
  }
}
