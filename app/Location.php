<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'name',
        'address'
    ];

    public function session()
    {
        return $this->HasOne('App\Session');
    }
}
