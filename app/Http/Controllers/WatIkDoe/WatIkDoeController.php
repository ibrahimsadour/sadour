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


    /**
     * @method __construct 
     * @todo with this function only the index method page should be shown for normal user
     * @todo isAdmin middleware lets only users with a //specific permission permission to access these resources
     * @return void
     */

    public function __construct()
    {
        $this->middleware(['role:Admin|Editor'])->except('index','show');;
    }

    /**
     * @todo Display a listing of the resource.
     * @param Watikdoe get all array waht i doe
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $website_watikdoe= Watikdoe::all()->toArray();

        return view('pages.admin.Website_String.WatIkDoe.AlleTexten', compact('website_watikdoe'));

   
    }   
        
    /**
     * @method show
     *
     * @param  mixed $website_watikdoe return one itmes
     * @return void
     */
    public function show($id)
    {
        $website_watikdoe = Watikdoe::find($id);
        return view('pages.admin.Website_String.WatIkDoe.show', compact('website_watikdoe', 'id'));
    }

    /**
     * @todo Show the form for creating a new resource.
     *  @todo to inser the new info to database
     * @return \Illuminate\Http\redirect
     */
    public function create()
    {
        return view('pages.admin.Website_String.WatIkDoe.Add');
    }
    
    /**
     * store
     *@todo to inser data
     * @param  mixed $request
     * @return void
     */
    public function store(WatIkdoeRequest $request)
    {

        $add_user = new Watikdoe([
            'titel'    =>  $request->get('titel'),
            'description'     =>  $request->get('description')
        ]);
        $add_user->save();
        return redirect()->route('auth.dashboard.watikdoe')->with('success', 'Data Added');
    }
       
    /**
     * @method edit
     * @todo  show edit form
     * @param  mixed $id
     * @return void
     */
    public function edit($id)
    {
    
        $website_watikdoe = Watikdoe::find($id);
        return view('pages.admin.Website_String.watikdoe.Edit', compact('website_watikdoe', 'id'));
    
    }    
    /**
     * update
     * @todo to edit the info
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function update(WatIkdoeRequest $request, $id)
    {

        $watikdoe = Watikdoe::find($id);
        $watikdoe->titel = $request->get('titel');
        $watikdoe->description = $request->get('description');



        $watikdoe->save();
        return redirect()->route('auth.dashboard.watikdoe')->with('success',' watikdoe bij '.$watikdoe->titel.' Updated!');

    }
    
    /**
     * destroy
     * @todo to delet the info
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        
        $watikdoe = Watikdoe::find($id);
        
        if ($watikdoe != null) {
        $watikdoe->delete();
        return redirect()->route('auth.dashboard.watikdoe')->with(['success'=> 'Successfully deleted!!']);
        }else{

            return redirect()->route('auth.dashboard.watikdoe')->with(['message'=> 'Wrong ID!!']);

        }

    }

}