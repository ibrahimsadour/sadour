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

    /**
     * __construct 
     * @todo with this function only the index method page should be shown for normal user
     * @todo isAdmin middleware lets only users with a //specific permission permission to access these resources
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

        $website_sociaal_contact= Sociaal_Contact::all()->toArray();

        return view('pages.admin.Website_String.Sociaal_Contact.Alle', compact('website_sociaal_contact'));
    
   
    }   
        
    /**
     * @method  show
     *
     * @param  mixed $id
     * @return void
     */
    public function show($id)
    {

    }

    /**
     * @todo Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.Website_String.Sociaal_Contact.Add');
    }
    
    /**
     * store
     * @todo to insert new social links to database
     * @todo validation=>SociaalRequest
     * @param  mixed $request
     * @return void
     */
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
       
    /**
     * edit
     * @todo show edit form
     * @param  mixed $id
     * @return void
     */
    public function edit($id)
    {

        $website_sociaal_contact = Sociaal_Contact::find($id);

        return view('pages.admin.Website_String.Sociaal_Contact.Edit', compact('website_sociaal_contact', 'id'));  

    }
        
    /**
     * @method update
     * @todo to edit the current social links
     * @var  mixed $request
     * @var  mixed $id
     * @return void
     */
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
       
    /**
     * @method destroy
     * @todo to remove current social links
     * @var  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $website_sociaal_contact = Sociaal_Contact::findOrFail($id);
        $website_sociaal_contact->delete();

        return redirect()->route('auth.dashboard.sociaal_contact')->with('success','sociaal_contact deleted!');

    }
}