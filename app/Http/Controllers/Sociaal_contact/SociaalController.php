<?php
namespace App\Http\Controllers\Sociaal_contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,Session;
Use App\Models\Sociaal_Contact;
use App\Http\Requests\RoleStoreRequest;
use App\Http\Requests\AdminDashboard\SociaalRequest;

class SociaalController extends Controller
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

        $website_sociaal_contact= Sociaal_Contact::all()->toArray();

        return view('pages.admin.Website_String.Sociaal_Contact.Alle', compact('website_sociaal_contact'));
    
   
    }   
    
    public function show($id)
    {
        // $website_opleiding = Opleiding::find($id);
        // return view('pages.admin.Website_String.Opleiding.ShowOpleiding', compact('website_opleiding', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.Website_String.Sociaal_Contact.Add');
    }

    public function store(SociaalRequest $request)
    {
        $website_sociaal_contact = new Sociaal_Contact([
            'facebook'    =>  $request->get('facebook'),
            'twitter'     =>  $request->get('twitter'),
            'instagram'     =>  $request->get('instagram'),
            'linkedin'     =>  $request->get('linkedin'),

        ]);
        $website_sociaal_contact->save();
     
        return redirect()->route('auth.dashboard.sociaal_contact')->with('success',' Sociaal Contact bij '.$website_sociaal_contact->facebook.' Added!');

    }
   
    public function edit($id)
    {

    
    $website_sociaal_contact = Sociaal_Contact::find($id);

    return view('pages.admin.Website_String.Sociaal_Contact.Edit', compact('website_sociaal_contact', 'id'));
    

    }
    public function update(SociaalRequest $request, $id)
    {

        $website_sociaal_contact = Sociaal_Contact::find($id);
        $website_sociaal_contact->facebook = $request->get('facebook');
        $website_sociaal_contact->twitter = $request->get('twitter');
        $website_sociaal_contact->instagram = $request->get('instagram');
        $website_sociaal_contact->linkedin = $request->get('linkedin');


        $website_sociaal_contact->save();
       
        return redirect()->route('pages.admin.Website_String.Sociaal_Contact')->with('success',' Sociaal Contact bij '.$website_sociaal_contact->facebook.' Updated!');

    }
   
    public function destroy($id)
    {

        $website_sociaal_contact = Sociaal_Contact::findOrFail($id);
        $website_sociaal_contact->delete();

        return redirect()->route('auth.dashboard.sociaal_contact')->with('success','sociaal_contact deleted!');


        
    }

}