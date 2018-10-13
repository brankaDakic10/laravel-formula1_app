<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'first_name', 'last_name','nationality','email','imageUrl'
    ];
    public function team(){
        return $this->belongsTo('App\Team');
    }
}
