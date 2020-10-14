<?php
namespace App\Http\Controllers\Hobbys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,Session;
Use App\Models\Hobbys;
use App\Http\Requests\AdminDashboard\HobbysRequest;


class HobbysController extends Controller
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
        
        $website_hobbyse= Hobbys::all()->toArray();

        return view('pages.admin.Website_String.Hobbys.AlleTexten', compact('website_hobbyse'));

   
    }   
        
    /**
     * show to show on hobby
     *
     * @param  mixed $id
     * @return void
     */
    public function show($id)
    {
        $website_hobbyse = Hobbys::find($id);
        return view('pages.admin.Website_String.Hobbys.show', compact('website_hobbyse', 'id'));
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
    
    /**
     * store
     * validation => HobbysRequest
     * to inser new hobby to datebase
     * @param  mixed $request
     * @return void
     */
    public function store(HobbysRequest $request)
    {

        $add_user = new Hobbys([
            'name'    =>  $request->get('name')
        ]);
        $add_user->save();
        return redirect()->route('auth.dashboard.hobbys')->with('success', 'Data Added');
    }
       
    /**
     * edit
     * to show edit form
     * @param  mixed $id
     * @return void
     */
    public function edit($id)
    {

    
    $website_hobbys = Hobbys::find($id);
    return view('pages.admin.Website_String.hobbys.Edit', compact('website_hobbys', 'id'));
    

    }    
    /**
     * update
     * to edit the hobby
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function update(HobbysRequest $request, $id)
    {

        $hobbys = Hobbys::find($id);
        $hobbys->name = $request->get('name');
        $hobbys->save();
        return redirect()->route('auth.dashboard.hobbys')->with('success', 'Data Updated');
    }
    
    /**
     * destroy
     * to remove the hobby
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        
        $watikdoe = Hobbys::find($id);
        
        if ($watikdoe != null) {
        $watikdoe->delete();
        return redirect()->route('auth.dashboard.hobbys')->with(['success'=> 'Successfully deleted!!']);
        }else{

            return redirect()->route('auth.dashboard.hobbys')->with(['message'=> 'Wrong ID!!']);

        }

    }
   


}