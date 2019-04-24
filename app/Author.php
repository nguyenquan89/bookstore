<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name', 'iamge', 'phone']; //$fillable: thao tac den cac truong trong csdl
}
