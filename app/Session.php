<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [
        'title',
        'description',
        'date',
        'start_time',
        'finish_time',
        'related_videos',
        'location_id'
    ];

    protected $dates = ['date'];

    public function getStartTimeAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('H:i');
    }

    public function getFinishTimeAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('H:i');
    }

    public function getDateAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('Y-m-d');
    }

    public function getSessionDateAttribute($value)
    {
        return \Carbon\Carbon::parse($this->attributes['date'])->format('d/m/Y');
    }

    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
