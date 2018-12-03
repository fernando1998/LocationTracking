<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $fillable = ['user_id', 'lat', 'long'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
