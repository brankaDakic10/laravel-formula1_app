<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name', 'address','country'
    ];
    public function drivers(){
        return $this->hasMany('App\Driver');
    }
}
