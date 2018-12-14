<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name', 'email', 'password','address','phone','chamber_location',
        'degree','sitting_time'
    ];

    public function degrees()
    {
        return $this->belongsToMany('App\Degree', 'doctor_degree', 'doctor_id', 'degree_id')->withTimestamps();
    }
}
