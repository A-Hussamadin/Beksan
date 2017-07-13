<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    protected $fillable = ['name', 'phone' ,'address','user_id'];


    public function user(){

      return $this->belongsTo('App\User');
    }

    public function doctors(){
      return  $this->hasMany('App\Doctor');
    }

    public function orders(){
      return $this->hasMany('App\Order');
    }
}
