<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reques extends Model
{
    //
    protected $fillable = [
        'user_id', 'bloodgroup',
    ];
}
