<?php
namespace App\Http\Controllers\Hobbys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,Session;
Use App\hobbys;


class HobbysController extends Controller
{


    //met deze functie mag alle de index method pagina getoond worden voor gewoon gebruiker 
    public function __construct() {
        $this->middleware(['auth', 'role:Admin'])->except('index'); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $website_hobbyse= hobbys::all()->toArray();

        return view('pages.admin.Website_String.Hobbys.AlleTexten', compact('website_hobbyse'));

   
    }   
    
    public function show($id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.Website_String.Hobbys.Add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'    =>  'required'
            
        ]);
        $add_user = new hobbys([
            'name'    =>  $request->get('name')
        ]);
        $add_user->save();
        return redirect()->route('auth.dashboard.hobbys')->with('success', 'Data Added');
    }
   
    public function edit($id)
    {

    
    $website_hobbys = hobbys::find($id);
    return view('pages.admin.Website_String.hobbys.Edit', compact('website_hobbys', 'id'));
    

    }
    public function update(Request $request, $id)
    {

        // dd($request);

        $this->validate($request, [
            'name'    =>  'required',

            
        ]);

        $hobbys = hobbys::find($id);
        $hobbys->name = $request->get('name');




        $hobbys->save();
        return redirect()->route('auth.dashboard.hobbys')->with('success', 'Data Updated');
    }

    public function destroy($id)
    {
        
        // dd($id);
        $watikdoe = hobbys::find($id);
        
        if ($watikdoe != null) {
        $watikdoe->delete();
        return redirect()->route('auth.dashboard.hobbys')->with(['success'=> 'Successfully deleted!!']);
        }else{

            return redirect()->route('auth.dashboard.hobbys')->with(['message'=> 'Wrong ID!!']);

        }

    }
   


}