<?php
namespace App\Http\Controllers\User_Management;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,Session;
Use App\User;
use App\Http\Requests\RoleStoreRequest;

use Auth;

/**
 * Importing laravel-permission models
 *
 * @return Spatie\Permission\Models\Role;
 * @return Spatie\Permission\Models\Permission;
 */
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller {

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

        $roles = Role::all();//Get all roles
        return view('pages.admin.Website_String.Roles.index')->with('roles', $roles);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        $permissions = Permission::all();//Get all permissions

        return view('pages.admin.Website_String.Roles.create', ['permissions'=>$permissions]);
    }

    /**
     * Store a newly created resource in storage.
     * @foreach Looping thru selected permissions
     * Fetch the newly created role and assign permission
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleStoreRequest $request) {

        $name = $request['name'];
        $role = new Role();
        $role->name = $name;

        $permissions = $request['permissions'];

        $role->save();
        
        foreach ($permissions as $permission) {
            $p = Permission::where('id', '=', $permission)->firstOrFail(); 
         
            $role = Role::where('name', '=', $name)->first(); 
            $role->givePermissionTo($p);
        }

        return redirect()->route('auth.dashboard.roles')->with('success','Role '. $role->name.' added!'); 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        return redirect('roles');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();

        return view('pages.admin.Website_String.Roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     * @param $role Get role with the given id
     * @param $p_all Get all permissions
     * @param revokePermissionTo Remove all permissions associated with role
     * @param $p Get corresponding form //permission in db
     * @param givePermissionTo Assign permission to role
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleStoreRequest $request, $id) {

        $role = Role::findOrFail($id);
    
        $input = $request->except(['permissions']);
        $permissions = $request['permissions'];
        $role->fill($input)->save();

        $p_all = Permission::all();

        foreach ($p_all as $p) {
            $role->revokePermissionTo($p); 
        }

        foreach ($permissions as $permission) {
            $p = Permission::where('id', '=', $permission)->firstOrFail(); 
            $role->givePermissionTo($p);  
        }

        return redirect()->route('auth.dashboard.roles')->with('success','Role '. $role->name.' updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('auth.dashboard.roles')->with('success','Role deleted!');

    }
}