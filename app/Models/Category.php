<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
Use App\Models\Projects;
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
        'name', 'weergeven','description','created_at','updated_at'
    ];

    ################## Begin Relation #####################

   

        public function Projects()
        {
            return $this->hasMany('App\Models\Projects', 'category_id');
        }

    ################## End Relation   #####################
}