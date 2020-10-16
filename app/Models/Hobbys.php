<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Hobbys extends Model
{
   

    /**
     * @todo The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hobbys';

    /**
     * @todo The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','translation_lang','translation_of','slug','active'
    ];
        
    /**
     * scopeSelection
     *@todo this function to select some items from the database.
     * @param  mixed $query
     * @return void
     */
    public function scopeSelection($query)
    {

        return $query->select('id', 'translation_lang', 'name','translation_of','slug','active');
    }
    public function scopeDefaultHobby($query){
        return  $query -> where('translation_of',0);
    }


    // get all translation Hobbies
    public function Hobbies()
    {
        return $this->hasMany(self::class, 'translation_of');
    }
}