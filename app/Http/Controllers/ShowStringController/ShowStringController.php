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
Use App\Models\Hobbys;
Use App\Models\Services;
Use App\Models\Sociaal_Contact;

class ShowStringController extends Controller
{
    
  /**
   * @todo Show the application dashboard.
   * @todo this is important function on the site becuse her show all string on the site
   * @todo website_strings to show all website string from datebase to the site
   * @todo ervaring_strings to show all website string from datebase to the site
   * @todo website_watikdoe to show all website string from datebase to the site
   * @todo website_hobbys to show all website string from datebase to the site
   * @todo website_sociaal_contact to show all website string from datebase to the site
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function show_string()
  {
    $default_lang = get_default_lang();

    $website_strings = DB::select('select * from admin_informatie where id = ?', [1]);

    $website_experience = Ervaring::where('translation_lang', $default_lang)
    ->selection()
    ->get();

    $website_services = Services::where('translation_lang', $default_lang)
    ->selection()
    ->get();

    $website_hobbys = Hobbys::where('translation_lang', $default_lang)
        ->selection()
        ->get();

    $website_sociaal_contact = DB::select('select * from  sociaal_contact');

    return view('sadour',
    [
      'website_strings'=>$website_strings,
      'website_experience'=>$website_experience,
      'website_services'=>$website_services,
      'website_hobbys'=>$website_hobbys,
      'default_lang' =>$default_lang ,
      'website_sociaal_contact'=>$website_sociaal_contact
    ]);
  }
}
