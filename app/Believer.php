<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Believer extends Model
{
    //
    protected $fillable = [
        'name', 'gender','dob', 'date','phoneno', 'email', 'status'
    ];
}
