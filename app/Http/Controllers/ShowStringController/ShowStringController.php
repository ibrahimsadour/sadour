<?php
namespace App\Http\Controllers\ShowStringController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,Session;
Use App\User;
Use App\ervaring;

class ShowStringController extends Controller
{
    
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function show_string()
  {
    $website_strings = DB::select('select * from website_strings where id = ?', [1]);

    $ervaring_strings = DB::select('select * from ervaring ');

    // dd($ervaring_strings);



    return view('sadour',['website_strings'=>$website_strings,'ervaring_strings'=>$ervaring_strings]);
    
  
    
  }

  
}
