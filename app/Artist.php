<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $guarded = [];


    public function comebacks() {
    	return $this->hasMany(Comeback::class);
    }
}
