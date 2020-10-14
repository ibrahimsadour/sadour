<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
Use App\Models\Projects;
class Category extends Model
{
    /**
     * @todo The table associated with the model.
     *
     * @var string
     */
    protected $table = 'category';

    /**
     * @todo The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','name_url', 'weergeven','description','title','keywords','description_back','created_at','updated_at'
    ];

    ################## Begin Relation #####################

   
        
        /**
         * @method Projects
         * @todo ralation on to many with project tabel
         * @return void
         */
        public function Projects()
        {
            return $this->hasMany('App\Models\Projects', 'category_id','id');
        }

    ################## End Relation   #####################
}
