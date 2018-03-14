<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    public function greenhouse()
    {
        return $this->belongsTo(greenhouse::class);
    }

    public function plant()
    {
        return $this->hasMany(plant::class);
    }

}
