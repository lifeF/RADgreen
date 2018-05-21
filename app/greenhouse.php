<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class greenhouse extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function section()
    {
        return $this->hasMany(section::class);
    }
}
