<?php
namespace App\Http\Controllers\WatIkDoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,Session;
Use App\Models\Watikdoe;
use App\Http\Requests\AdminDashboard\WatIkdoeRequest;


class WatIkDoeController extends Controller
{


    //met deze functie mag alle de index method pagina getoond worden voor gewoon gebruiker 

    public function __construct()
    {
        $this->middleware(['role:Admin|Editor'])->except('index','show');;
    }
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $website_watikdoe= Watikdoe::all()->toArray();

        return view('pages.admin.Website_String.WatIkDoe.AlleTexten', compact('website_watikdoe'));

   
    }   
    
    public function show($id)
    {
        $website_watikdoe = Watikdoe::find($id);
        return view('pages.admin.Website_String.WatIkDoe.show', compact('website_watikdoe', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.Website_String.WatIkDoe.Add');
    }

    public function store(WatIkdoeRequest $request)
    {

        $add_user = new Watikdoe([
            'titel'    =>  $request->get('titel'),
            'description'     =>  $request->get('description')
        ]);
        $add_user->save();
        return redirect()->route('auth.dashboard.watikdoe')->with('success', 'Data Added');
    }
   
    public function edit($id)
    {

    
    $website_watikdoe = Watikdoe::find($id);
    return view('pages.admin.Website_String.watikdoe.Edit', compact('website_watikdoe', 'id'));
    

    }
    public function update(WatIkdoeRequest $request, $id)
    {

        $watikdoe = Watikdoe::find($id);
        $watikdoe->titel = $request->get('titel');
        $watikdoe->description = $request->get('description');



        $watikdoe->save();
        // return redirect()->route('auth.dashboard.watikdoe.edit',['watikdoe' => $watikdoe->id])->with('success', 'Data Updated');
        return redirect()->route('auth.dashboard.watikdoe')->with('success',' watikdoe bij '.$watikdoe->titel.' Updated!');

    }

    public function destroy($id)
    {
        
        // dd($id);
        $watikdoe = Watikdoe::find($id);
        
        if ($watikdoe != null) {
        $watikdoe->delete();
        return redirect()->route('auth.dashboard.watikdoe')->with(['success'=> 'Successfully deleted!!']);
        }else{

            return redirect()->route('auth.dashboard.watikdoe')->with(['message'=> 'Wrong ID!!']);

        }

    }
   


}