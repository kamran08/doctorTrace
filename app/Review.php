<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'doctor_id', 'user_id', 'date','details'
    ];

    public function doctors(){
        return $this->belongsTo('App\Doctor','doctor_id');
    }

    public function users(){
        
        return $this->belongsTo('App\User','user_id');
    }
}
