<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baptised_member extends Model
{
    //
    protected $fillable = [
        'name', 'phoneno','email', 'gender','dob', 'dbaptised'
    ];
}
