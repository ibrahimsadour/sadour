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

class User extends Authenticatable implements HasMedia
{
    use Notifiable,HasRoles,InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','mobile', 'password',
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

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('avatar') // deze code om een nieuw avatar te toevoegen.
            //  ->acceptsFile(function (File $file) { //deze functie is voor alle type JPEG wordt gesturd.
            //   return $file->mimeType === 'image/jpeg';
        

        ->registerMediaConversions(function (Media $media){
        
            $this->addMediaConversion('card')
            ->width(500)
            ->height(500);
            
            $this->addMediaConversion('thumb')
            ->width(100)
            ->height(100);
        });
    }

    public function avatar(){
        return $this ->hasOne(Media::class,'id','avatar_id');
    }

    public function getAvatarUrlAttribute () {




       return $this->avatar->getUrl('thumb');

        // $img_src= $this->media[1]->getUrl();
        // if($img_src != " "){

        // return  $img_src;
        // @dd($img_src);
        // return $this->avatar->getUrl('thumb');
        //  return  $this->media[0]->getUrl();
        

        

    }
    public function profile (){

        return $this->hasOne(profile::class);
 
    }

    public function setPasswordAttribute($password){   
        
        $this->attributes['password'] = bcrypt($password);
    }
    
}

