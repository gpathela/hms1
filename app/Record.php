<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public function doctors()
    {
        return $this->belongsTo('App\Employee', 'doctor');
    }

    public function nurses()
    {
        return $this->belongsTo('App\Employee', 'nurse');
    }

    public function patients()
    {
        return $this->belongsTo('App\Patient', 'patient');
    }
}
