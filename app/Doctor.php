<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable
{
    use Notifiable;
    // The authentication guard for admin
        protected $guard = 'admin';
         /**
          * The attributes that are mass assignable.
          *
          * @var array
          */
    protected $fillable = [
        'name', 'email', 'password','address','phone','chamber_location',
        'degree','sitting_time'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function degrees()
    {
        return $this->belongsToMany('App\Degree', 'doctor_degree', 'doctor_id', 'degree_id')->withTimestamps();
    }

    public function appointments(){
            return $this->hasMany('App\Appointment');
        }
}
