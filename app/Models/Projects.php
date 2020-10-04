<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
Use App\Models\Category;

class Projects extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'photo', 'name','description','category_id'
    ];
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    ################## Begin Relation  #####################
    public function category ()
    {

        return $this->belongsTo('App\Models\Category', 'category_id','id');
      
    }

    ################## End Relation    #####################
}
