<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    
     /**
     * @var table table associated with the model.
     *
     * @var string
     */
    protected $table = 'profiles';

    /**
     * @todo The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name','birthday','gender','email','phone','address','number','city','zip','user_id'
    ];
    
    /**
     * @method user
     * @todo ralation on to one wirh the User tabel
     * @return void
     */
    public function user (){

        return $this->belongsTo(User::class);
 
    }
}
