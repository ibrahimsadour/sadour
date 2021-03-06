<?php

namespace App;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\File;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class User extends Authenticatable implements HasMedia , MustVerifyEmail
{
    use Notifiable,HasRoles,InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','mobile', 'password','provider','provider_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // in your model
    
    /**
     * registerMediaCollections
     * @param addMediaCollection this code to add a new avatar.
     * @param acceptsFile this function is for all type of JPEG sent.
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('avatar'); 
            //  ->acceptsFile(function (File $file) { //
            //   return $file->mimeType === 'image/jpeg';
        

        // ->registerMediaConversions(function (Media $media){
        
        //     $this->addMediaConversion('card')
        //     ->width(500)
        //     ->height(500);
            
        //     $this->addMediaConversion('thumb')
        //     ->width(100)
        //     ->height(100);
        // });
    }
    
    /**
     * avatar
     *
     * @return void
     */
    public function avatar(){
        return $this ->hasOne(Media::class,'id','avatar_id');
    }
    
    /**
     * getAvatarUrlAttribute
     * @param $img_src1 to check if the user has avatar or not
     * @return void
     */
    public function getAvatarUrlAttribute () {

        

        $img_src1= $this->media;
        $img_src2= $this->avatar;

        if(count($img_src1) > 0 ){
            if($img_src2){

                return $this->avatar->getFullUrl();
            }

        }else{
            return  asset('img/admin/user.png');
        }

        
    }
    
    ################## Begin Relation       #####################    
    /**
     * profile
     * relation one to one 
     * @return void
     */
    public function profile (){

        return $this->hasOne(Models\Profile::class);
 
    }    
    /**
     * calender
     * relation one to one 
     *
     * @return void
     */
    public function calender (){

        return $this->hasOne(Models\Calendar::class);
 
    }
    ################## End Relation       #####################

}

