<?php

use Illuminate\Database\Seeder;

//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

// connection with database
use Illuminate\Support\Facades\DB;

// users Models
Use App\User;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'write post']);
        Permission::create(['name' => 'see post']);
        Permission::create(['name' => 'delete post']);
        Permission::create(['name' => 'edit post']);


        // create roles and assign created permissions
        $role = Role::create(['name' => 'Admin']);
        $role->givePermissionTo(Permission::all());   
    
    }
}
