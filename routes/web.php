<?php
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminAddUsersController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
Auth::routes(['verify' =>true]);
use App\Http\Controllers\Projects\ProjectController;
use App\Http\Controllers\Category\CategoryController;

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

Route::resource('/auth/dashboard/users', 'User_Management\SettingUsersController')->names([
    'create' => 'auth.dashboard.users.create',
    'edit' => 'auth.dashboard.users.edit',
    'index' => 'auth.dashboard.users',
    'store' => 'users.store'
    ])->middleware('auth');
// =================================================================================



// =================================================================================
// deze Route is gemaakt door Ibrahim sadour
// hier kan jij een nieuw  roles voor de  gebruiker of schrijver van de site toevogen
Route::resource('/auth/dashboard/roles', 'User_Management\RoleController')->names([
    'create' => 'auth.dashboard.roles.create',
    'edit' => 'auth.dashboard.roles.edit',
    'show' =>'auth.dashboard.roles.show',
    'index' =>'auth.dashboard.roles'
    ])->middleware('auth');
// =================================================================================



// =================================================================================
// deze Route is gemaakt door Ibrahim sadour
// hier kan jij een nieuw  permission voor de  gebruiker of schrijver van de site toevogen   
Route::resource('/auth/dashboard/permission', 'User_Management\PermissionController')->names([
    'create' => 'auth.dashboard.permission.create',
    'edit' => 'auth.dashboard.permission.edit',
    'index' =>'auth.dashboard.permission'
    ])->middleware('auth');
// =================================================================================



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

// =================================================================================
// deze Route is gemaakt door Ibrahim sadour
// de Sociaal contact informatie van de site gebruiker aan te passen
// zoals ( facebook , instgraam, twitter,linkdin)
Route::resource('/auth/dashboard/sociaal_contact','Sociaal_contact\SociaalController')->names([
    'create' => 'auth.dashboard.sociaal_contact.create',
    'edit' => 'auth.dashboard.sociaal_contact.edit',
    'show' =>'auth.dashboard.sociaal_contact.show',
    'index' =>'auth.dashboard.sociaal_contact',
    'destroy' =>'auth.dashboard.sociaal_contact.destroy',
    'update' => 'sociaal_contact.update'
    

])->middleware('auth');
// =================================================================================

// =================================================================================
// Calendar
Route::group(['middleware' => ['auth']], function () {

    // deze route om het calendar te laat zien 
    Route::get('/auth/dashboard/calendar', function () {

        // deze stukje om te cheken als de gebruiker ingelogd of nee
        if(Auth::check()){
            return view('pages.admin.Website_String.Calendar.index');
        }

        // als de gebruiker niet ingelogd dan krijgt hij inlogen scherm
        return Redirect::to("/auth/login")->withSuccess('Opps! You do not have access');
    });
    // deze om de niewuw event te tonen op de calendar
    Route::get('index','Calendar\CalendarController@index')->name('allEvent');
    // deze route om een nieuw event te toevoegen op de calendar
    Route::post('/auth/dashboard/calendar','Calendar\CalendarController@store')->name('calendar.store');

    
    // URL: /auth/dashboard/calendar/allevent ( show and delet event)
    Route::get('/auth/dashboard/calendar/allevent','Calendar\CalendarController@show')->name('calendar.show');
    Route::delete('/auth/dashboard/calendar/allevent/{id}','Calendar\CalendarController@destroy')->name('delet.event');

});
// =================================================================================


// =================================================================================
// Project Admin Pages
Route::group( [
    'prefix' => '/auth/dashboard/projects', // deze om mijn code verkorter te maken dus niet nodig bij elke rout 
    'middleware' => 'auth', 
],function() {

    Route::get('',[ProjectController::class, 'index'])->name('project.all');
    Route::get('create',[ProjectController::class, 'create'])->name('project.create');
    Route::post('store',[ProjectController::class, 'store'])->name('ajax.project.store');
    Route::post('destroy',[ProjectController::class, 'destroy'])->name('ajax.project.destroy');
    Route::get('edit/{project_id}',[ProjectController::class, 'edit'])->name('ajax.project.edit');
    Route::post('update',[ProjectController::class, 'update'])->name('ajax.project.update');
    Route::get('show/{project_id}',[ProjectController::class, 'show'])->name('ajax.project.show');
    // get all project to show on home page

});
// =================================================================================

// Category Admin Pages
Route::group( [
    'prefix' => '/auth/dashboard/category', // deze om mijn code verkorter te maken dus niet nodig bij elke rout 
    'middleware' => 'auth', 
],function() {

    Route::get('',[CategoryController::class, 'index'])->name('category.all');
    Route::get('create',[CategoryController::class, 'create'])->name('category.create');
    Route::post('store',[CategoryController::class, 'store'])->name('ajax.category.store');
    Route::post('destroy',[CategoryController::class, 'destroy'])->name('ajax.category.destroy');
    Route::get('edit/{category_id}',[CategoryController::class, 'edit'])->name('ajax.category.edit');
    Route::post('update',[CategoryController::class, 'update'])->name('ajax.category.update');
    Route::get('show/{category_id}',[CategoryController::class, 'show'])->name('ajax.category.show');

    // get all category to show on admin page

});
// =================================================================================
// Project Sadour.nl Pages

Route::group( [
    'prefix' => 'category' // deze om mijn code verkorter te maken dus niet nodig bij elke rout 
],function() {

    // Route::get('',[ProjectController::class, 'getAllProject'])->name('git.all.category');
    Route::get('laravel_tutorial/{project_id}',[ProjectController::class, 'getOneProject'])->name('git.one.project');

});


Route::group( [
    'prefix' => 'categorys' // deze om mijn code verkorter te maken dus niet nodig bij elke rout 
],function() {

    Route::get('',[CategoryController::class, 'getAllProjects'])->name('git.all.category');
    Route::get('show/{id}',[CategoryController::class, 'getOneCategory'])->name('git.one.category');

});

