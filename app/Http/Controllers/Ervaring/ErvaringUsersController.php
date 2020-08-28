<?php
namespace App\Http\Controllers\Ervaring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,Session;
Use App\ervaring;


class ErvaringUsersController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $website_ervaring= ervaring::all()->toArray();

        return view('pages.admin.Website_String.Ervaring.AlleErvaring', compact('website_ervaring'));

   
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
        return redirect()->route('auth.dashboard.ervaing.create')->with('success', 'Data Added');
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
        return redirect()->route('auth.dashboard.ervaring.edit',['ervaring' => $ervaring->id])->with('success', 'Data Updated');
    }
   


}