<?php
namespace App\Http\Controllers\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,Session;
Use App\contact;


class ContactController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $contact_strings = contact::all()->toArray();

        return view('pages.admin.Website_String.Contact.AlleContact', compact('contact_strings'));
   
    }   
    
    public function show($id)
    {
        //
    }



    public function create (Request $request)
    {
        $this->validate($request, [
            'name'    =>  'required',
            'email'     =>  'required',
            'message'     =>  'required'
            
        ]);
        $add_user = new contact([
            'name'    =>  $request->get('name'),
            'email'     =>  $request->get('email'),
            'message'     =>  $request->get('message')
        ]);
        $add_user->save();
        
        // deze variabel is gemaakt bij het insert van de contact form blijvet de string van de site
        $website_strings = DB::select('select * from admin_informatie where id = ?', [1]);
        $ervaring_strings = DB::select('select * from ervaring ');
    

        return view('sadour',['website_strings'=>$website_strings,'ervaring_strings'=>$ervaring_strings]);
    }
   
 


        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post =contact::where('id',$id)->first();

        if ($post != null) {
            $post->delete();
            return redirect()->route('auth.dashboard.contact')->with(['success'=> 'Successfully deleted!!']);
        }
    
        return redirect()->route('auth.dashboard.contact')->with(['message'=> 'Wrong ID!!']);

        
    }


}