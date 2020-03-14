<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    //
    protected $fillable = [
        'name','bloodgroup','contactno','address', 'mime', 'original_filename', 'filename'
    ];
}
