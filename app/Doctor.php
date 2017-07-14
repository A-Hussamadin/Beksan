<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
   protected $fillable = ['name', 'email', 'phone' ,'address','clinic_id','user_id'];
    public function user(){

      return $this->belongsTo('App\User');
    }

    public function clinic(){
      return $this->belongsTo('App\Clinic');
    }

    public function orders(){
      return $this->hasMany('App\Order');
    }


}
