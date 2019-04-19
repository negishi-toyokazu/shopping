<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
      'name' => 'required',
      'price' => 'integer',
      'image' => 'image',
    );
}
