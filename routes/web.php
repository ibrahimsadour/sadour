<?php
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('sadour');
});


Route::get('/sadour', function () {

    return view('sadour');
});

// deze Route is gemaakt door Ibrahim om (CV van ibrahim sadour door de butten te downloaden)
Route::get('/download', function () {

    $file = public_path()."/CV Ibrahim Sadour.docx";
    $headers = array(
        'Content-Type:application/docx'
    );
    return Response::download($file,"Cv Ibrahim Sadour.docx", $headers);
})->name('Download_Cv');


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
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('.dashboard');


    // URL: /auth/logout
    // Route name: auth.logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('.logout');

});