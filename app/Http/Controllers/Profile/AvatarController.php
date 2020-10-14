<?php

namespace App\Http\Controllers\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Validator,Redirect,Response,Session;
Use App\Models\Profile;
Use App\User;
use Alert;
use App\Http\Requests\AdminDashboard\AvatarRequest;

class AvatarController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avatars = auth()->user()->getMedia('avatar');
        $user_profile = Profile::all()->toArray();

        return view('pages.admin.Website_String.profile.Show_user_profile',compact('avatars'), compact('user_profile'));
        
       
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
 
        Alert::success('Your Image is added');
        return redirect()->back();
        
    }
        
    /**
     * sendData
     * to inser new profile to database
     * @param  mixed $request
     * @return void
     */
    public function sendData(AvatarRequest $request)
    {


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
 
        Alert::success('success!', 'Your information is updated');
        return redirect()->back();
    }
        



    /**
     * Update the specified resource in storage.
     * to edit user profile info
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   $user = auth()->user();
        $user->avatar_id = $request-> selectedAvatar;
        $user->save();

        Alert::info('Your image avatar is updated');
        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     * to delet user profile avatar
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $user = auth()->user($id);
        $user->clearMediaCollectionExcept('avatar', $user->getFirstMedia());

        Alert::error('success!', 'Your Image is deleted');
        return redirect()->back();


    }
}
