<?php
namespace App\Http\Controllers\opleiding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,Session;
Use App\Models\Opleiding;
use App\Http\Requests\AdminDashboard\OpleidingRequest;



class OpleidingUsersController extends Controller
{


    /**
     * __construct 
     * with this function only the index method page should be shown for normal user
     * isAdmin middleware lets only users with a //specific permission permission to access these resources
     * @return void
     */

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

        $website_opleiding= Opleiding::all()->toArray();

        return view('pages.admin.Website_String.Opleiding.AlleOpleiding', compact('website_opleiding'));

   
    }   
        
    /**
     * show
     * to show on eduction
     * @param  mixed $id
     * @return void
     */
    public function show($id)
    {
        $website_opleiding = Opleiding::find($id);
        return view('pages.admin.Website_String.Opleiding.ShowOpleiding', compact('website_opleiding', 'id'));
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
    
    /**
     * store
     * validation => OpleidingRequest
     * @param  mixed $request
     * @return void
     */
    public function store(OpleidingRequest $request)
    {
        $this->validate($request, [
            'education_name'    =>  'required',
            'period'     =>  'required',
            'place'     =>  'required'
            
        ]);
        $add_user = new Opleiding([
            'education_name'    =>  $request->get('education_name'),
            'period'     =>  $request->get('period'),
            'place'     =>  $request->get('place')
        ]);
        $add_user->save();
     
        return redirect()->route('auth.dashboard.opleiding')->with('success',' opleiding bij '.$add_user->education_name.' Added!');

    }
       
    /**
     * edit
     * to show edit form
     * @param  mixed $id
     * @return void
     */
    public function edit($id)
    {
        $website_opleiding = Opleiding::find($id);
        return view('pages.admin.Website_String.Opleiding.EditOpleiding', compact('website_opleiding', 'id'));
    }    

    /**
     * update
     * to edit the eduction
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function update(OpleidingRequest $request, $id)
    {

        $this->validate($request, [
            'education_name'    =>  'required',
            'period'     =>  'required',
            'place'     =>  'required'
            
        ]);

        $opleiding = Opleiding::find($id);
        $opleiding->education_name = $request->get('education_name');
        $opleiding->place = $request->get('period');
        $opleiding->period = $request->get('place');


        $opleiding->save();
       
        return redirect()->route('auth.dashboard.opleiding')->with('success',' opleiding bij '.$opleiding->education_name.' Updated!');

    }
       
    /**
     * destroy
     * to remove the eduction
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $ervaring = Opleiding::findOrFail($id);
        $ervaring->delete();

        return redirect()->route('auth.dashboard.opleiding')->with('success','opleiding deleted!');

    }

}