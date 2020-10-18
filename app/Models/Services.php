<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Services extends Model
{
   

    /**
     * @todo The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wat_ik_doe';

    /**
     * @todo The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titel', 'description'
    ];

    /**
     * scopeSelection
     *@todo this function to select some items from the database.
     * @param  mixed $query
     * @return void
     */
    public function scopeSelection($query)
    {

        return $query->select('id','translation_lang', 'titel','description','translation_of','slug','active');
    }
    
    public function scopeDefaultHobby($query){
        return  $query -> where('translation_of',0);
    }


    // get all translation Services
    public function Services()
    {
        return $this->hasMany(self::class, 'translation_of');
    }

}
