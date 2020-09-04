<?php
namespace App\Http\Controllers\Ervaring;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator,Redirect,Response,Session;
Use App\ervaring;


class ErvaringUsersController extends Controller
{


    //met deze functie mag alle de index method pagina getoond worden voor gewoon gebruiker 

    public function __construct() {
        $this->middleware(['auth', 'role:Admin|Editor'])->except('index','show'); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            
            $website_ervaring= ervaring::all()->toArray();

            return view('pages.admin.Website_String.Ervaring.AlleErvaring', compact('website_ervaring'));          
        }
           return Redirect::to("/auth/login")->withSuccess('Opps! You do not have access');


   
    }   
    
    public function show($id)
    {
        $website_ervaring = ervaring::find($id);
        return view('pages.admin.Website_String.Ervaring.ShowErvaring', compact('website_ervaring', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.Website_String.Ervaring.AddErvaring');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'company_name'    =>  'required',
            'place'     =>  'required',
            'period'     =>  'required'
            
        ]);
        $add_user = new ervaring([
            'company_name'    =>  $request->get('company_name'),
            'place'     =>  $request->get('place'),
            'period'     =>  $request->get('period'),
            'description'     =>  $request->get('description')
        ]);
        $add_user->save();
        return redirect()->route('auth.dashboard.ervaring')->with('success',' Ervaring bij '.$add_user->company_name.' Added!');

    }
   
    public function edit($id)
    {

    
    $website_ervaring = ervaring::find($id);
    return view('pages.admin.Website_String.Ervaring.EditErvaring', compact('website_ervaring', 'id'));
    

    }
    public function update(Request $request, $id)
    {

        // dd($request);
        $this->validate($request, [
            'company_name'    =>  'required',
            'place'     =>  'required',
            'period'     =>  'required'
            
        ]);

        $ervaring = ervaring::find($id);
        $ervaring->company_name = $request->get('company_name');
        $ervaring->place = $request->get('place');
        $ervaring->period = $request->get('period');
        $ervaring->description = $request->get('description');


        $ervaring->save();
        // return redirect()->route('auth.dashboard.ervaring.edit',['ervaring' => $ervaring->id])->with('success', 'Data Updated');
        return redirect()->route('auth.dashboard.ervaring')->with('success',' Ervaring bij '.$ervaring->company_name.' Updated!');
    }
    public function destroy($id)
    {

        $ervaring = ervaring::findOrFail($id);
        $ervaring->delete();

        return redirect()->route('auth.dashboard.ervaring')->with('success','ervaring deleted!');


        
    }


}