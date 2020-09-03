<?php
namespace App\Http\Controllers\opleiding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,Session;
Use App\opleiding;


class OpleidingUsersController extends Controller
{


    //met deze functie mag alle de index method pagina getoond worden voor gewoon gebruiker 

        public function __construct()
    {
        $this->middleware(['role:Admin'])->except('index');;
    }
    
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $website_opleiding= opleiding::all()->toArray();

        return view('pages.admin.Website_String.Opleiding.AlleOpleiding', compact('website_opleiding'));

   
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
        return view('pages.admin.Website_String.Opleiding.AddOpleiding');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'education_name'    =>  'required',
            'period'     =>  'required',
            'place'     =>  'required'
            
        ]);
        $add_user = new opleiding([
            'education_name'    =>  $request->get('education_name'),
            'period'     =>  $request->get('period'),
            'place'     =>  $request->get('place')
        ]);
        $add_user->save();
        return redirect()->route('auth.dashboard.opleiding.create')->with('success', 'Data Added');
    }
   
    public function edit($id)
    {

    
    $website_opleiding = opleiding::find($id);
    return view('pages.admin.Website_String.Opleiding.EditOpleiding', compact('website_opleiding', 'id'));
    

    }
    public function update(Request $request, $id)
    {

        // dd($request);
        $this->validate($request, [
            'education_name'    =>  'required',
            'period'     =>  'required',
            'place'     =>  'required'
            
        ]);

        $opleiding = opleiding::find($id);
        $opleiding->company_name = $request->get('education_name');
        $opleiding->place = $request->get('period');
        $opleiding->period = $request->get('place');


        $opleiding->save();
        return redirect()->route('auth.dashboard.opleiding.edit',['opleiding' => $opleiding->id])->with('success', 'Data Updated');
    }
   


}