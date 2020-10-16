<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Ervaring extends Model
{
   

    /**
     * @todo The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ervaring';

    /**
     * @todo The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_name', 'place','period','description','slug','translation_lang','translation_of','active'
    ];

    public $timestamps = true;
    /**
     * scopeSelection
     *@todo this function to select some items from the database.
     * @param  mixed $query
     * @return void
     */
    public function scopeSelection($query)
    {

        return $query->select('id','place','period','translation_lang', 'company_name','translation_of','slug','active','description');
    }

    public function scopeDefaultErvaring($query){
        return  $query -> where('translation_of',0);
    }

    // get all translation Hobbies
    public function Experiences()
    {
        return $this->hasMany(self::class, 'translation_of');
    }
}
