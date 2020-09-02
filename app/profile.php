<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'profiles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name','birthday','gender','email','phone','address','number','city','zip','user_id'
    ];

    public function user (){

        return $this->belongsTo(User::class);
 
    }
}
