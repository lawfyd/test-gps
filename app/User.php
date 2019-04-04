<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'email', 'country_id'];

    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
