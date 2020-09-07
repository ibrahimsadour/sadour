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

    //met deze functie mag alle de index method pagina getoond worden voor gewoon gebruiker 

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

        return view('pages.admin.Website_String.Users.AllUsers', compact('website_strings'));

   
    }   
    
    public function show($id)
    {
        $website_strings = Admin::find($id);
        return view('pages.admin.Website_String.Users.show', compact('website_strings', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.Website_String.Users.Add');
    }

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
   
    public function edit($id)
    {

    
        $website_strings = Admin::find($id);
        return view('pages.admin.Website_String.Users.Edit', compact('website_strings', 'id'));
    

    }
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