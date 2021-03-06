<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    /**
     * @todo The table associated with the model.
     *
     * @var string
     */
    protected $table = 'calendars';

    /**
     * @todoThe attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'start','end','allDay','backgroundColor','textColor'
    ];
    
    /**
     * @method user
     * @todo relation one to one with the User tabel
     * @return void
     */
    public function user (){

        return $this->belongsTo(User::class);
 
    }
}
