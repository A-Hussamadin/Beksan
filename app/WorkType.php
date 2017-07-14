<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkType extends Model
{
    protected $fillable = ['name', 'user_id'];
   
   public function user(){

    return $this->belongsTo('App\User');
  }

  public function orders(){
      return $this->hasMany('App\Order');
    }
}
