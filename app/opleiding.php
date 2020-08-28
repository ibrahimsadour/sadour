<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class opleiding extends Model
{
   

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'opleiding';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'education_name', 'period','place'
    ];

}
