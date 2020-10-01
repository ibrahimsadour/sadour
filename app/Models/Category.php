<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'category';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'weergeven','created_at	','updated_at'
    ];

    ################## Begin Relation       #####################

   

        public function projects()
        {

            return $this->belongsTo('App\Models\Projects','category_id ');

        }
       
 

    ################## End Relation       #####################
}
