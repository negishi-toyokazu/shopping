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

    public function cart()
    {
        return $this->hasMany('App\Cart');
    }

    public function order()
    {
        return $this->hasMany('App\Order');
    }
}
