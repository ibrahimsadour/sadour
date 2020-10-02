<?php
namespace App\Http\Controllers\User_Management;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
Use App\User;
use App\Http\Requests\SetiingUsersStoreRequest;

//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SettingUsersController extends Controller
{


    //met deze functie mag alle de index method pagina getoond worden voor gewoon gebruiker 

    public function __construct() {
        $this->middleware(['auth', 'role:Admin'])->except('index'); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index() {
        //Get all users and pass it to the view
            $users = User::all(); 
            return view('pages.admin.Website_String.Users.index')->with('users', $users);
        }
    
        /**
        * Show the form for creating a new resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function create() {
        //Get all roles and pass it to the view
            $roles = Role::get();
            // dd($roles);
            return view('pages.admin.Website_String.Users.create', ['roles'=>$roles]);
        }
    
        /**
        * Store a newly created resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @return \Illuminate\Http\Response
        */
        public function store(SetiingUsersStoreRequest $request) {

            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
              ]); //Retrieving only the email and password data
    
            $roles = $request['roles']; //Retrieving the roles field
        //Checking if a role was selected
            if (isset($roles)) {
    
                foreach ($roles as $role) {
                $role_r = Role::where('id', '=', $role)->firstOrFail();            
                $user->assignRole($role_r); //Assigning role to user
                }
            }        
        //Redirect to the users.index view and display message
            return redirect()->route('auth.dashboard.users')->with('success','User successfully added.');
        }
    
        /**
        * Display the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function show($id) {
            return redirect('users'); 
        }
    
        /**
        * Show the form for editing the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function edit($id) {
            $user = User::findOrFail($id); //Get user with specified id
            $roles = Role::get(); //Get all roles
    
            return view('pages.admin.Website_String.Users.edit', compact('user', 'roles')); //pass user and roles data to view
    
        }
    
        /**
        * Update the specified resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function update(SetiingUsersStoreRequest $request, $id) {
            $user = User::findOrFail($id); //Get role specified by id
    
  
            $input = $request->only(['name', 'email', 'password']); //Retreive the name, email and password fields
            $roles = $request['roles']; //Retreive all roles
            $user->fill($input)->save();
    
            if (isset($roles)) {        
                $user->roles()->sync($roles);  //If one or more role is selected associate user to roles          
            }        
            else {
                $user->roles()->detach(); //If no role is selected remove exisiting role associated to a user
            }
            return redirect()->route('auth.dashboard.users')->with('success','User successfully edited.');
        }
    
        /**
        * Remove the specified resource from storage.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function destroy($id) {
        //Find a user with a given id and delete
            $user = User::findOrFail($id); 
            $user->delete();
    
            return redirect()->route('auth.dashboard.users')->with('success','User successfully deleted.');
        }
    }