<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   // protected $table = "sach";
    protected $fillable= ["name", 'description', 'image', 'quantity', 'price', 'author_id'];

}
