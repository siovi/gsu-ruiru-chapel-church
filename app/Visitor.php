<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    //
    protected $fillable = [
        'name', 'gender','dob', 'place_of_birth','residence', 'ministry','phoneno', 'email'
    ];
}
