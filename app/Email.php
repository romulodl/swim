<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = [
        'session_id'
    ];

    public function session()
    {
        return $this->belongsTo('App\Session');
    }
}
