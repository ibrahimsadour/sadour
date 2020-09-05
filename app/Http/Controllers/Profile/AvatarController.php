<?php

namespace App\Http\Controllers\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Validator,Redirect,Response,Session;
Use App\Models\Profile;
Use App\User;
class AvatarController extends Controller
{





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avatars=auth()->user()->getMedia('avatar');
        $user_profile = Profile::all()->toArray();

        // $edit_user_profile = profile::find($id);
        return view('pages.admin.Website_String.profile.Show_user_profile',compact('avatars'), compact('user_profile'));
        
       
        // return view('pages.admin.Website_String.profile.Show_user_profile', compact('edit_user_profile', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // auth()->user()->clearMediaCollection();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $user -> addMedia($request->avatar)->toMediaCollection('avatar');

        return redirect()->back();
        
        
    }
    public function sendData(Request $request)
    {

        $this->validate($request, [
            'first_name'    =>  'required',
            'birthday'     =>  'required',
            'gender'    =>  'required',
            'email'     =>  'required',
            'phone'     =>  'required',
            'address'    =>  'required',
            'city'     =>  'required',
            'zip'     =>  'required'
            
            
        ]);

        $user = auth()->user();
        $profile = $user->profile()->updateOrCreate (
            ['user_id' => $user->id],
        
            [
            'first_name'    =>  $request->get('first_name'),
            'last_name'     =>  $request->get('last_name'),
            'birthday'     =>  $request->get('birthday'),
            'gender'     =>  $request->get('gender'),
            'email'     =>  $request->get('email'),
            'phone'     =>  $request->get('phone'),
            'address'     =>  $request->get('address'),
            'number'     =>  $request->get('number'),
            'city'     =>  $request->get('city'),
            'zip'     =>  $request->get('zip')
        ]);

        // return redirect()->back(); 
        return redirect()->route('auth.dashboard.profile')->with('success', 'Your information is updated');
   
    }
        


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $edit_user_profile = profile::find($id);
        // return view('pages.admin.Website_String.profile.Show_user_profile', compact('edit_user_profile', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   $user = auth()->user();
        $user->avatar_id = $request-> selectedAvatar;
        $user->save();
        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        // $user = user::findOrFail($id);
        // $user->avatar_id -> deleteAvatar;
        // $user->delete();
        // return redirect()->back();    
    }
}
