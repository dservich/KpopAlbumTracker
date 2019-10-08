<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $guarded = [];

    protected $with = [];


    public function comebacks()
    {
    	return $this->hasMany(Comeback::class)->latest();
    }
}
