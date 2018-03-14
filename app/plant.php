<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plant extends Model
{
	 public function section()
	    {
	        return $this->belongsTo(section::class);
	    }
}
