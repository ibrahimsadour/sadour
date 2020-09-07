<?php
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminAddUsersController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
Auth::routes(['verify' =>true]);
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('sadour');
// });



// Route::get('/sadour', function () {

//     // $role = Role::create(['name' => 'user']);
//     // $permission = Permission::create(['name' => 'see post']);


//     // give perimission  to roles
//     // $role = Role:: findById(3);
//     // $permission = permission::findById(3);
//     // $role->givePermissionTo($permission);

//     // give the user perimission
//     // auth()-> user()->givePermissionTo('edit post');

//     // give the user roles
//     // auth()-> user()->assignRole('user');
    

//         return view('sadour');

// });


// =================================================================================
// deze Route is gemaakt door Ibrahim om (CV van ibrahim sadour door de butten te downloaden)
Route::get('/download', function () {

    $file = public_path()."/CV Ibrahim Sadour.docx";
    $headers = array(
        'Content-Type:application/docx'
    );
    return Response::download($file,"Cv Ibrahim Sadour.docx", $headers);
})->name('Download_Cv');
// =================================================================================



// =================================================================================
// deze Route is gemaakt door Ibrahim sadour  voor (login system)
Route::group( [
    'as' => '.auth', //Het is 'als'-gedeelte van de tweede parameter definieert de naam van de route.
    'prefix' => '/auth' // deze om mijn code verkorter te maken dus niet nodig bij elke rout /auth te typen.
],function() {

    // URL: /auth/login
    // Route name: auth.login
    Route::get('/login', [AuthController::class, 'show']) ->name('.login');


    // URL: /auth/attempt-login
    // Route name: auth.attempt-login
    Route::post('/post-login', [AuthController::class, 'postLogin'])->name('.attempt-login');


    // URL: /auth/register
    // Route name: auth.register
    Route::get('/register', [AuthController::class, 'register'])->name('.register');


    // URL: /auth/postRegister
    // Route name: auth.postRegister
    Route::post('/post-register', [AuthController::class, 'postRegister'])->name('.postRegister');


    // URL: /auth/dashboard
    // Route name: auth.dashboard
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('.dashboard')->middleware('verified');


    // URL: /auth/logout
    // Route name: auth.logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('.logout');

});
// =================================================================================




// =================================================================================
// deze route om de informatie van  gebruiker op de site te laatzien
Route::get('', 'ShowStringController\ShowStringController@show_string');
Route::get('sadour', 'ShowStringController\ShowStringController@show_string');
// ------------
Route::post('', 'ShowStringController\ShowStringController@store')->name('sadour.create');
Route::post('sadour', 'Contact\ContactController@create')->name('contact.create');

// =================================================================================


// =================================================================================
// deze Route is gemaakt door Ibrahim sadour
// de informatie van de site gebruiker aan te passen
// zoals ( name , description, keywords,date,Address,Email,Phone)
Route::resource('/auth/dashboard/admin','Admin\AdminAddUsersController')->names([
    'create' => 'auth.dashboard.admin.create',
    'edit' => 'auth.dashboard.admin.edit',
    'index' => 'auth.dashboard.admin',
    'show' =>'auth.dashboard.admin.show'
])->middleware('auth');
// =================================================================================


// =================================================================================
// deze Route is gemaakt door Ibrahim sadour
// de ervaring informatie van de site gebruiker aan te passen
// zoals ( company_name , place, period,description)
    Route::resource('/auth/dashboard/ervaring','Ervaring\ErvaringUsersController')->names([
        'create' => 'auth.dashboard.ervaing.create',
        'edit' => 'auth.dashboard.ervaring.edit',
        'index' =>'auth.dashboard.ervaring',
        'show' =>'auth.dashboard.ervaring.show',
        'destroy'=>'auth.dashboard.ervaring.delete'
    ])->middleware('auth');
// =================================================================================


// =================================================================================
// deze Route is gemaakt door Ibrahim sadour
// de Opleding informatie van de site gebruiker aan te passen
// zoals ( education_name , place, period )
Route::resource('/auth/dashboard/opleiding','Opleiding\OpleidingUsersController')->names([
    'create' => 'auth.dashboard.opleiding.create',
    'edit' => 'auth.dashboard.opleiding.edit',
    'index' =>'auth.dashboard.opleiding',
    'show' =>'auth.dashboard.opleiding.show'
])->middleware('auth');
// =================================================================================



// =================================================================================
// deze Route is gemaakt door Ibrahim sadour
// de Contact berichten van de site te laat zien
Route::resource('/auth/dashboard/contact', 'Contact\ContactController')->names([
    'create' => 'auth.dashboard.contact.create',
    'edit' => 'auth.dashboard.contact.edit',
    'index' =>'auth.dashboard.contact',
    'show' =>'auth.dashboard.contact.show',
    ])->middleware('auth');
// =================================================================================





// =================================================================================
// deze Route is gemaakt door Ibrahim sadour
// hier kan jij informatie van de gebruiker aanpassen.
Route::resource('/auth/dashboard/profile', 'Profile\AvatarController')->names([
    'create' => 'auth.dashboard.profile.create',
    'edit' => 'auth.dashboard.profile.edit',
    'index' =>'auth.dashboard.profile'
    ])->middleware('auth');
Route::put('/auth/dashboard/profile', 'Profile\AvatarController@sendData')->name('auth.dashboard.profile.sendData')->middleware('auth');
Route::post('/auth/dashboard/profile', 'Profile\AvatarController@store')->name('auth.dashboard.profile.store')->middleware('auth');
// ===========================================================================



// =================================================================================
// deze Route is gemaakt door Ibrahim sadour
// hier kan jij een nieuw  admin of gebruiker of schrijver voor de site toevogen

Route::resource('/auth/dashboard/setting', 'Setting\SettingUsersController')->names([
    'create' => 'auth.dashboard.setting.create',
    'edit' => 'auth.dashboard.setting.edit',
    'index' => 'auth.dashboard.setting',
    'store' => 'setting.store'
    ])->middleware('auth');
// =================================================================================



// =================================================================================
// deze Route is gemaakt door Ibrahim sadour
// hier kan jij een nieuw  roles voor de  gebruiker of schrijver van de site toevogen
Route::resource('/auth/dashboard/roles', 'Setting\RoleController')->names([
    'create' => 'auth.dashboard.roles.create',
    'edit' => 'auth.dashboard.roles.edit',
    'show' =>'auth.dashboard.roles.show',
    'index' =>'auth.dashboard.roles'
    ])->middleware('auth');
// =================================================================================



// =================================================================================
// deze Route is gemaakt door Ibrahim sadour
// hier kan jij een nieuw  permission voor de  gebruiker of schrijver van de site toevogen   
Route::resource('/auth/dashboard/permission', 'Setting\PermissionController')->names([
    'create' => 'auth.dashboard.permission.create',
    'edit' => 'auth.dashboard.permission.edit',
    'index' =>'auth.dashboard.permission'
    ])->middleware('auth');
// =================================================================================




// Route::get('/auth/dashboard/ibo', function () {
    

//     return view('pages.admin.Website_string.setting.Show_user');

    // Role::create(['name' => 'Admin']);
    // Permission::create(['name' => 'edit post']);


    // give perimission  to roles
    // $role = Role:: findById(2);
    // $permission = permission::findById(2);
    // $role->givePermissionTo($permission);

//     // give the user perimission
//     // auth()-> user()->givePermissionTo('edit post');

//     // give the user roles
    // auth()-> user()->assignRole('Admin');


// ===========================================================================


// =================================================================================
// deze Route is gemaakt door Ibrahim sadour
// de watikdoe informatie van de site gebruiker aan te passen
// zoals ( title , description)
Route::resource('/auth/dashboard/watikdoe','WatIkDoe\WatIkDoeController')->names([
    'create' => 'auth.dashboard.watikdoe.create',
    'edit' => 'auth.dashboard.watikdoe.edit',
    'show' =>'auth.dashboard.watikdoe.show',
    'index' =>'auth.dashboard.watikdoe'

])->middleware('auth');
// =================================================================================


// =================================================================================
// deze Route is gemaakt door Ibrahim sadour
// de hobbys informatie van de site gebruiker aan te passen
// zoals ( title , description)
Route::resource('/auth/dashboard/hobbys','Hobbys\HobbysController')->names([
    'create' => 'auth.dashboard.hobbys.create',
    'edit' => 'auth.dashboard.hobbys.edit',
    'show' =>'auth.dashboard.hobbys.show',
    'index' =>'auth.dashboard.hobbys',
    'destroy' =>'auth.dashboard.hobbys.destroy',
    'update' => 'hobbys.update'
    

])->middleware('auth');
// =================================================================================