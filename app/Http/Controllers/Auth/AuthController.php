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

 

    
    /**
     * show login form
     *
     * @return void
     */
    public function show()
    {
        if (Auth::check()) {
          return view('auth.dashboard');
      }else{
        return view('auth.login');

      }
    }  
     
    /**
     * register , This is made to show registertion form for the user
     *
     * @return void
     */
    public function register()
    {
        return view('auth.register');
    }


   
         
    /**
     * postLogin , Check whether the user uses the correct email and password
     * @identify is for(email and phone number)
     * @$field controller if the user has written email or mobile number
     * @$value grab the content of the input here
     * @param  mixed $request
     * @return void
     */
    public function postLogin(Request $request)
    {
        request()->validate([
        'identify' => 'required',
        'password' => 'required',
        ]);
 
      $value = request() ->input('identify'); 

      $field = filter_var($value,FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile'; 

      request() -> merge([$field => $value ]);
      
        $credentials = $request->only($field, 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/auth/dashboard');
        }

        return Redirect::to("/auth/login")->withSuccess('Oppes! You have entered invalid credentials');

    }
     
    /**
     * postRegister
     * Here to add a new user to the date base and check is it too added already or no
     * @param  mixed $request
     * @return void
     */
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
         
    /**
     * dashboard , check if the user allowd to see the dashboard
     *
     * @return void
     */
    public function dashboard()
    {
 
      if(Auth::check()){
        return view('auth.dashboard');
      }
       return Redirect::to("/auth/login")->withSuccess('Opps! You do not have access');

    }
     
    /**
     * create
     *
     * @param  mixed $data
     * @return void
     */
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'mobile' => $data['mobile'],
        'password' => Hash::make($data['password']),
      ]);
    }
         
    /**
     * logout
     *
     * @return void
     */
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('/auth/login');
    }

    
}
?>