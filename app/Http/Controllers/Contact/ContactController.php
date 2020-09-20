<?php
namespace App\Http\Controllers\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,Session;
Use App\Models\Contact;
use App\Http\Requests\AdminDashboard\ContactRequest;
use Alert;

class ContactController extends Controller
{
    //met deze functie mag alle de index method pagina getoond worden voor gewoon gebruiker 

    public function __construct() {
        $this->middleware(['auth', 'role:Admin|Editor'])->except('index','show','create'); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $contact_strings = Contact::all()->toArray();

        return view('pages.admin.Website_String.Contact.AlleContact', compact('contact_strings'));
   
    }   
    
    public function show($id)
    {
        $contact_strings = Contact::find($id);
        return view('pages.admin.Website_String.Contact.show', compact('contact_strings', 'id'));
    }



    public function create (ContactRequest $request)
    {

        $add_user = new Contact([
            'name'    =>  $request->get('name'),
            'email'     =>  $request->get('email'),
            'message'     =>  $request->get('message')
        ]);
        
        $add_user->save();
        Alert::success('sended!', 'Your message with successfully sended');
        return redirect()->back();
       
        }
   
 


        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('auth.dashboard.contact')->with('success','contact deleted!');


        
    }


}