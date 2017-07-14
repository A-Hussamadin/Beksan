<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['order_number', 'patient_name', 'patient_file_number' ,'doctor_id','clinic_id','color',
    'work_type_id', 'user_id', 'delivery_date'];
    public function user(){

    return $this->belongsTo('App\User');
  }
    public function clinic(){
      return $this->belongsTo('App\Clinic');
    }
    public function doctor(){
      return $this->belongsTo('App\Doctor');
    }

    public function workType(){
      return $this->belongsTo('App\WorkType');
    }
}
