<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/* connecting product with category*/ 

class Product extends Model
{
    public function categories()
    {

      return $this->belongsToMany('App\Category');  


    }

    
}
