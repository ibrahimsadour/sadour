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
   *
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
