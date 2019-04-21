<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'user_id' => 'required',
        'product_id' => 'required',
        'number' => 'required',
    );
    protected $fillable = [
        'number', 'user_id','product_id'
      ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
