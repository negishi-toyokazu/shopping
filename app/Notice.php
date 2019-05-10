<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
      'content' => 'required',
    );

    protected $fillable = [
      'content'
    ];
}
