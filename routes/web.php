<?php
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminAddUsersController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
Auth::routes(['verify' =>true]);
define('PAGINATION_COUNT',10); // aantale items die op een pagina wordt getoond voor de heel website
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





/*=================================================================================
|--------------------------------------------------------------------------
| download Routes
|--------------------------------------------------------------------------
|this Route was made by Ibrahim to download (resume of ibrahim sadour through the butten)
*/
Route::get('/download', function () {

    $file = public_path()."/CV Ibrahim Sadour.docx";
    $headers = array(
        'Content-Type:application/docx'
    );
    return Response::download($file,"Cv Ibrahim Sadour.docx", $headers);
})->name('Download_Cv');
/*=================================================================================*/



/*=================================================================================
|--------------------------------------------------------------------------
| download Routes
|--------------------------------------------------------------------------
|this Route was created by Ibrahim sadour for (login system)
|'as' => '.auth', It's 'if' part of the second parameter defines the route name.
| 'prefix' => '/auth' this to shorten my code so no need to type / auth at every rout.
*/
Route::group( [
    'as' => '.auth', 
    'prefix' => '/auth'
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
 /*=================================================================================*/



/*=================================================================================
|--------------------------------------------------------------------------
| ShowString Routes
|--------------------------------------------------------------------------
|this route to display the user's information on the site
*/
Route::get('', 'ShowStringController\ShowStringController@show_string');
Route::get('sadour', 'ShowStringController\ShowStringController@show_string');

Route::post('', 'ShowStringController\ShowStringController@store')->name('sadour.create');
Route::post('sadour', 'Contact\ContactController@create')->name('contact.create');

/* =================================================================================*/


/*=================================================================================
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|this Route was made by Ibrahim sadour
|such as (name, description, keywords, date, Address, Email, Phone)
|edit the information of the site user
*/
Route::resource('/auth/dashboard/admin','Admin\AdminAddUsersController')->names([
    'create' => 'auth.dashboard.admin.create',
    'edit' => 'auth.dashboard.admin.edit',
    'index' => 'auth.dashboard.admin',
    'show' =>'auth.dashboard.admin.show'
])->middleware('auth');
/* =================================================================================*/

/*=================================================================================
|--------------------------------------------------------------------------
| experience Routes
|--------------------------------------------------------------------------
|this Route was made by Ibrahim sadour
|customize the site user's experience information
|like (company_name, place, period, description)
*/
    Route::resource('/auth/dashboard/ervaring','Ervaring\ErvaringUsersController')->names([
        'create' => 'auth.dashboard.ervaing.create',
        'edit' => 'auth.dashboard.ervaring.edit',
        'index' =>'auth.dashboard.ervaring',
        'show' =>'auth.dashboard.ervaring.show',
        'destroy'=>'auth.dashboard.ervaring.delete'
    ])->middleware('auth');
/* =================================================================================*/


/*=================================================================================
|--------------------------------------------------------------------------
| education Routes
|--------------------------------------------------------------------------
|this Route was made by Ibrahim sadour
|change the training information of the site user
|like (education_name, place, period)
*/
Route::resource('/auth/dashboard/opleiding','Opleiding\OpleidingUsersController')->names([
    'create' => 'auth.dashboard.opleiding.create',
    'edit' => 'auth.dashboard.opleiding.edit',
    'index' =>'auth.dashboard.opleiding',
    'show' =>'auth.dashboard.opleiding.show'
])->middleware('auth');
/* =================================================================================*/



/*=================================================================================
|--------------------------------------------------------------------------
| contact Routes
|--------------------------------------------------------------------------
|this Route was made by Ibrahim sadour
|showing the Contact messages from the site
*/
Route::resource('/auth/dashboard/contact', 'Contact\ContactController')->names([
    'create' => 'auth.dashboard.contact.create',
    'edit' => 'auth.dashboard.contact.edit',
    'index' =>'auth.dashboard.contact',
    'show' =>'auth.dashboard.contact.show',
    ])->middleware('auth');
// =================================================================================





/*=================================================================================
|--------------------------------------------------------------------------
| profile Routes
|--------------------------------------------------------------------------
this Route was made by Ibrahim sadour
here you can edit information profile of the user.
*/
Route::resource('/auth/dashboard/profile', 'Profile\AvatarController')->names([
    'create' => 'auth.dashboard.profile.create',
    'edit' => 'auth.dashboard.profile.edit',
    'index' =>'auth.dashboard.profile'
    ])->middleware('auth');
Route::put('/auth/dashboard/profile', 'Profile\AvatarController@sendData')->name('auth.dashboard.profile.sendData')->middleware('auth');
Route::post('/auth/dashboard/profile', 'Profile\AvatarController@store')->name('auth.dashboard.profile.store')->middleware('auth');
// ===========================================================================



/*=================================================================================
|--------------------------------------------------------------------------
| profile Routes
|--------------------------------------------------------------------------
this Route was made by Ibrahim sadour
here you can add a new admin or user or writer for the site
*/
Route::resource('/auth/dashboard/users', 'User_Management\SettingUsersController')->names([
    'create' => 'auth.dashboard.users.create',
    'edit' => 'auth.dashboard.users.edit',
    'index' => 'auth.dashboard.users',
    'store' => 'users.store'
    ])->middleware('auth');
// =================================================================================



/*=================================================================================
|--------------------------------------------------------------------------
| roles Routes
|--------------------------------------------------------------------------
this Route was made by Ibrahim sadour
here you can add new roles for the user or writer of the site
*/
Route::resource('/auth/dashboard/roles', 'User_Management\RoleController')->names([
    'create' => 'auth.dashboard.roles.create',
    'edit' => 'auth.dashboard.roles.edit',
    'show' =>'auth.dashboard.roles.show',
    'index' =>'auth.dashboard.roles'
    ])->middleware('auth');
// =================================================================================



/*=================================================================================
|--------------------------------------------------------------------------
| permission Routes
|--------------------------------------------------------------------------
this Route was made by Ibrahim sadour
here you can add a new permission for the user or writer of the site
*/
Route::resource('/auth/dashboard/permission', 'User_Management\PermissionController')->names([
    'create' => 'auth.dashboard.permission.create',
    'edit' => 'auth.dashboard.permission.edit',
    'index' =>'auth.dashboard.permission'
    ])->middleware('auth');
// =================================================================================



/*=================================================================================
|--------------------------------------------------------------------------
| watikdoe Routes
|--------------------------------------------------------------------------
this Route was made by Ibrahim sadour
modify the site user's what I do information
such as (title, description)
*/
Route::resource('/auth/dashboard/watikdoe','WatIkDoe\WatIkDoeController')->names([
    'create' => 'auth.dashboard.watikdoe.create',
    'edit' => 'auth.dashboard.watikdoe.edit',
    'show' =>'auth.dashboard.watikdoe.show',
    'index' =>'auth.dashboard.watikdoe'

])->middleware('auth');
// =================================================================================


/*=================================================================================
|--------------------------------------------------------------------------
| hobbys Routes
|--------------------------------------------------------------------------
deze Route is gemaakt door Ibrahim sadour
de hobbys informatie van de site gebruiker aan te passen
zoals ( title , description)
*/
Route::resource('/auth/dashboard/hobbys','Hobbys\HobbysController')->names([
    'create' => 'auth.dashboard.hobbys.create',
    'edit' => 'auth.dashboard.hobbys.edit',
    'show' =>'auth.dashboard.hobbys.show',
    'index' =>'auth.dashboard.hobbys',
    'destroy' =>'auth.dashboard.hobbys.destroy',
    'update' => 'hobbys.update'


])->middleware('auth');
// =================================================================================

/*=================================================================================
|--------------------------------------------------------------------------
| sociaal_contact Routes
|--------------------------------------------------------------------------
this Route was made by Ibrahim sadour
modify the site user's social contact information
such as (facebook, instgraam, twitter, linkdin)
*/
Route::resource('/auth/dashboard/sociaal_contact','Sociaal_contact\SociaalController')->names([
    'create' => 'auth.dashboard.sociaal_contact.create',
    'edit' => 'auth.dashboard.sociaal_contact.edit',
    'show' =>'auth.dashboard.sociaal_contact.show',
    'index' =>'auth.dashboard.sociaal_contact',
    'destroy' =>'auth.dashboard.sociaal_contact.destroy',
    'update' => 'sociaal_contact.update'


])->middleware('auth');
// =================================================================================

/*=================================================================================
|--------------------------------------------------------------------------
| calendar Routes
|--------------------------------------------------------------------------
this route to show the calendar
*/
Route::group(['middleware' => ['auth']], function () {

   
    Route::get('/auth/dashboard/calendar', function () {

        //this bit to check if the user is logged in or no
        if(Auth::check()){
            return view('pages.admin.Website_String.Calendar.index');
        }

        //if the user is not logged in, he will get the login screen
        return Redirect::to("/auth/login")->withSuccess('Opps! You do not have access');
    });
    // this to show the new event on the calendar
    Route::get('index','Calendar\CalendarController@index')->name('allEvent');
    // this route to add a new event to the calendar
    Route::post('/auth/dashboard/calendar','Calendar\CalendarController@store')->name('calendar.store');


    // URL: /auth/dashboard/calendar/allevent ( show and delet event)
    Route::get('/auth/dashboard/calendar/allevent','Calendar\CalendarController@show')->name('calendar.show');
    Route::delete('/auth/dashboard/calendar/allevent/{id}','Calendar\CalendarController@destroy')->name('delet.event');

});
// =================================================================================


/*=================================================================================
|--------------------------------------------------------------------------
| Project Routes
|--------------------------------------------------------------------------
get all project to show on home page
*/
Route::group( [
    'prefix' => '/auth/dashboard/projects', 
    'middleware' => 'auth',
],function() {

    Route::get('',[ProjectController::class, 'index'])->name('project.all');
    Route::get('create',[ProjectController::class, 'create'])->name('project.create');
    Route::post('store',[ProjectController::class, 'store'])->name('ajax.project.store');
    Route::post('destroy',[ProjectController::class, 'destroy'])->name('ajax.project.destroy');
    Route::get('edit/{project_id}',[ProjectController::class, 'edit'])->name('ajax.project.edit');
    Route::post('update',[ProjectController::class, 'update'])->name('ajax.project.update');
    Route::get('show/{project_id}',[ProjectController::class, 'show'])->name('ajax.project.show');

});
// =================================================================================

/*=================================================================================
|--------------------------------------------------------------------------
| category Routes
|--------------------------------------------------------------------------
get all project to show on home page
*/
Route::group( [
    'prefix' => '/auth/dashboard/category', 
    'middleware' => 'auth',
],function() {

    Route::get('',[CategoryController::class, 'index'])->name('category.all');
    Route::get('create',[CategoryController::class, 'create'])->name('category.create');
    Route::post('store',[CategoryController::class, 'store'])->name('ajax.category.store');
    Route::post('destroy',[CategoryController::class, 'destroy'])->name('ajax.category.destroy');
    Route::post('destroyCategoryWithAllProjects',[CategoryController::class, 'destroyCategoryWithAllProjects'])->name('ajax.CategoryWithAllProjects.destroy');
    Route::get('edit/{category_id}',[CategoryController::class, 'edit'])->name('ajax.category.edit');
    Route::post('update',[CategoryController::class, 'update'])->name('ajax.category.update');
    Route::get('show/{category_id}',[CategoryController::class, 'show'])->name('ajax.category.show');


});
// =================================================================================


/*=================================================================================
|--------------------------------------------------------------------------
| Project Sadour.nl Pages
|--------------------------------------------------------------------------
get all project to show onsite
*/
Route::group( [
    'prefix' => 'category'
],function() {

    Route::get('project/{project_id}',[ProjectController::class, 'getOneProject'])->name('git.one.project');
});

/*=================================================================================
|--------------------------------------------------------------------------
| categorys Sadour.nl Pages
|--------------------------------------------------------------------------
get all categorys to show onsite
*/
Route::group( [
    'prefix' => 'categorys' // deze om mijn code verkorter te maken dus niet nodig bij elke rout
],function() {

    Route::get('',[CategoryController::class, 'getAllProjects'])->name('git.all.category');
    Route::get('{id}',[CategoryController::class, 'getOneCategory'])->name('git.one.category');

});
// =================================================================================
