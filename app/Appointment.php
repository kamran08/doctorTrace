<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //

    protected $fillable = [
        'doctor_id', 'user_id', 'date','serial','slotDetails'
    ];

    public function doctor()
    {
        return $this->belongsTo('App\Doctor','doctor_id');
    }
}
