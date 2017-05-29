<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
    protected $fillable = ['cause'];
    
    public function volunteers()
    {
        return $this->belongsToMany('App\Volunteer');
    }
}
