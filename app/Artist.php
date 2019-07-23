<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $guarded = [];

    protected $with = [
    	'comebacks',
    	
    ];


    public function comebacks() {
    	return $this->hasMany(Comeback::class)->latest();
    }
}
