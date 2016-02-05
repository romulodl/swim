<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'name'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function swimmers()
    {
        return $this->belongsToMany('App\Swimmer');
    }

    public function getSwimmerListAttribute()
    {
        return $this->swimmers->lists('id')->all();
    }
}
