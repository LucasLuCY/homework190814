<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billboard extends Model
{
    protected $table = "billboard";
    protected $primaryKey = "userId";

    function user(){
        return $this->hasOne(User::class, 'id');
    }

}
