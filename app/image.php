<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model

{

    
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'images';
    

    protected $fillable = [
        'title',
        'image_code',
        'image', 
        'description',
       ];
}
