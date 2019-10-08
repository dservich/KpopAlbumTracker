<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comeback extends Model
{
    protected $guarded = [];

    protected $with = [];

    public function artist()
    {
    	return $this->belongsTo(Artist::class);
    }
}
