<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bs_member extends Model
{
    //
    protected $fillable = [
        'name', 'gender','dob', 'residence','phoneno', 'email','status', 'group'
    ];
}
