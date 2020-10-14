<?php
namespace App\Http\Controllers\User_Management;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,Session;
Use App\User;
use App\Http\Requests\PermissionRequest;

use Auth;


/**
 * Importing laravel-permission models
 *
 * @return Spatie\Permission\Models\Role;
 * @return Spatie\Permission\Models\Permission;
 */
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class PermissionController extends Controller {

    /**
     * __construct 
     * with this function only the index method page should be shown for normal user
     * isAdmin middleware lets only users with a //specific permission permission to access these resources
     * @return void
     */
    public function __construct() {
        $this->middleware(['auth', 'role:Admin'])->except('index'); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    
    
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index() {
        $permissions = Permission::all(); //Get all permissions

        return view('pages.admin.Website_String.Permissions.index')->with('permissions', $permissions);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create() {
        $roles = Role::get(); //Get all roles

        return view('pages.admin.Website_String.Permissions.create
        ')->with('roles', $roles);
    }

    /**
    * Store a newly created resource in storage.
    * If one or more role is selected
    * Match input role to db record
    * Match input //permission to db record
    * validation => PermissionRequest
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(PermissionRequest $request) {


        $name = $request['name'];
        $permission = new Permission();
        $permission->name = $name;

        $roles = $request['roles'];

        $permission->save();

        if (!empty($request['roles'])) { 
            foreach ($roles as $role) {
                $r = Role::where('id', '=', $role)->firstOrFail(); 

                $permission = Permission::where('name', '=', $name)->first(); 
                $r->givePermissionTo($permission);
            }
        }

        return redirect()->route('auth.dashboard.permission')->with('success','Permission '. $permission->name.' added!');

    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id) {
        
        return redirect('permissions');
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id) {

        $permission = Permission::findOrFail($id);

        return view('pages.admin.Website_String.Permissions.edit
        ', compact('permission'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(PermissionRequest $request, $id) {

        $permission = Permission::findOrFail($id);
        $input = $request->all();
        $permission->fill($input)->save();
        return redirect()->route('auth.dashboard.permission')->with('success','Permission '. $permission->name.' updated!');

    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id) {

        $permission = Permission::findOrFail($id);

        $permission->delete();

        return redirect()->route('auth.dashboard.permission')->with('success','Permission deleted!');

    }
}