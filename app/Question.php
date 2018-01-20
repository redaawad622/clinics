<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function user()
    {
        return $this->belongsTo('User::class');
    }
    public function replay()
    {
        return $this->hasMany(Replay::class);
    }
}
