<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class watikdoe extends Model
{
   

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wat_ik_doe';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titel', 'description'
    ];

}
