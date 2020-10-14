<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,Session;
Use App\Models\Admin;
use App\Http\Requests\AdminDashboard\AdminStoreRequest;


class AdminAddUsersController extends Controller
{


    /**
     * __construct
     * With this function just the index method may show for ordinary user
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['role:Admin'])->except('index','show');;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $website_strings = Admin::all()->toArray();

        return view('pages.admin.Website_String.Admin_information.AllUsers', compact('website_strings'));


    }

    /**
     * show
     * this to show admin information on the dashboard
     * @param  mixed $id
     * @return void
     */
    public function show($id)
    {
        $website_strings = Admin::find($id);
        return view('pages.admin.Website_String.Admin_information.show', compact('website_strings', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.Website_String.Admin_information.Add');
    }

    /**
     * store
     * insert admin info to database
     * Validtion => AdminStoreRequest
     * @param  mixed $request
     * @return void
     */
    public function store(AdminStoreRequest $request)
    {

        $add_user = new Admin([
            'name'    =>  $request->get('name'),
            'description'     =>  $request->get('description'),
            'keywords'     =>  $request->get('keywords'),
            'date'     =>  $request->get('date'),
            'Address'     =>  $request->get('Address'),
            'Email'     =>  $request->get('Email'),
            'Phone'     =>  $request->get('Phone'),
            'function'     =>  $request->get('function'),
            'view'     =>  $request->get('view')
        ]);
        $add_user->save();
        return redirect()->route('auth.dashboard.admin.create')->with('success', 'Data Added');
    }

    /**
     * edit
     * To show Edit form
     * @param  mixed $id
     * @return void
     */
    public function edit($id)
    {

        $website_strings = Admin::find($id);
        return view('pages.admin.Website_String.Admin_information.Edit', compact('website_strings', 'id'));
 
    }
    /**
     * update
     * Edit user info
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function update(AdminStoreRequest $request, $id)
    {

        $student = Admin::find($id);
        $student->name = $request->get('name');
        $student->description = $request->get('description');
        $student->keywords = $request->get('keywords');
        $student->date = $request->get('date');
        $student->Address = $request->get('Address');
        $student->Email = $request->get('Email');
        $student->Phone = $request->get('Phone');
        $student->function = $request->get('function');
        $student->save();

        return redirect()->route('auth.dashboard.admin')->with('success',' Informatie bij '.$student->name.' Updated!');
    }



}
