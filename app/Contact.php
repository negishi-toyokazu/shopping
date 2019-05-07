<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $guarded = array('id');

  public static $rules = array(
    'name' => 'required',
    'email' => 'required',
    'title' => 'required',
    'content' => 'required',
  );

  protected $fillable = [
      'name', 'email','title','content'
    ];
}
