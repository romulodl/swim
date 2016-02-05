<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Swimmer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'dob'
    ];

    protected $dates = ['dob'];

    public function getDobAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('Y-m-d');
    }

    public function getBirthAttribute($value)
    {
        return \Carbon\Carbon::parse($this->attributes['dob'])->format('d/m/Y');
    }

    public function groups()
    {
        return $this->belongsToMany('App\Group');
    }
}
