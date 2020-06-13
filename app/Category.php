<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/* connecting category with product */ 

class Category extends Model
{
    public function products()
    {

      return $this->belongsToMany('App\Product');  


    }
}
