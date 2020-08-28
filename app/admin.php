<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class admin extends Model
{
   

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'website_strings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description','keywords','date','Address','Email','Phone','function','view'
    ];

}
