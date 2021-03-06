<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Admin extends Model
{
   

     /**
     * @todo The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admin_informatie';

    /**
     * @todo The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description','keywords','date','Address','Email','Phone','function','view'
    ];

}
