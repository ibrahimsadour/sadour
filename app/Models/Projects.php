<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
Use App\Models\Category;

class Projects extends Model
{
    /**
     * @todo The table associated with the model.
     *
     * @var string
     */
    protected $table = 'projects';

    /**
     * @todo The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'photo', 'name','name_url','description','weergeven','category_id'
    ];
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    ################## Begin Relation  #####################    
    /**
     * @method category
     * @todo realtion on to one with category
     * @return void
     */
    public function category ()
    {

        return $this->belongsTo('App\Models\Category', 'category_id','id');
      
    }

    ################## End Relation    #####################
}
