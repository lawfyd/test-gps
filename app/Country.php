<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name'];

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
