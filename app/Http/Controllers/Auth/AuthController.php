<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator,Redirect,Response,Session;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\DB;



class AuthController extends Controller
{

 


    public function show()
    {
        return view('auth.login');
    }  
 
    public function register()
    {
        return view('auth.register');
    }


   
     
    public function postLogin(Request $request)
    {
        request()->validate([
        'identify' => 'required',
        'password' => 'required',
        ]);
 

      // return 'mobile';
      $value = request() ->input('identify'); //hier pak de inhoud van de input

      //controller als de gebruiker email of mobilenummer heeft geschreven:

      $field = filter_var($value,FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile'; // ? perces zoals if statment

      /*  
      if(filter_var($value,FILTER_VALIDATE_EMAIL){

          $field = 'email';
      }else{
          $field = 'mobile';
      }
      */


      request() -> merge([$field => $value ]);

      
      
        $credentials = $request->only($field, 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/auth/dashboard');
        }

        return Redirect::to("/auth/login")->withSuccess('Oppes! You have entered invalid credentials');

    }
 
    public function postRegister(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'mobile' => 'required|min:6',
        'password' => 'required|min:6',
        ]);
         
        $data = $request->all();
 
        $check = $this->create($data);
       
        return Redirect::to("/auth/dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
     
    public function dashboard()
    {
 
      if(Auth::check()){
        return view('auth.dashboard');
      }
       return Redirect::to("/auth/login")->withSuccess('Opps! You do not have access');


    }
 
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'mobile' => $data['mobile'],
        'password' => Hash::make($data['password']),
      ]);
    }
     
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('/auth/login');
    }

    
}
?>
