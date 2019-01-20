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
        'name', 'email', 'password','address','phone','location',
        'degree','specialties',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];



    public function appointments(){
            return $this->hasMany('App\Appointment');
        }

        public function review(){
            return $this->hasMany('App\Review');
        }
}
