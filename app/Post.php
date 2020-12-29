<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    //this overrides automatic name creation so we can name it ourselves
    //posts plural would have been the name anyway
    protected $table = 'posts';
    //Primary Key
    public $primaryKey = 'id';
    //timestamps 
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

}
