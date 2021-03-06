<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Sociaal_Contact extends Model
{
   

     /**
     * @todo The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sociaal_contact';

    /**
     * @todo The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'facebook', 'twitter','instagram','linkedin'
    ];

}
