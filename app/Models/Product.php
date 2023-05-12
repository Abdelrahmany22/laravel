<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table= 'products';
    protected $fillable= [
        'id','name','image','description','price','category_id'
    ];

}
