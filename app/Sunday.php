<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sunday extends Model
{
    //
    protected $fillable = [
        'birthday', 'tithes','offering', 'total'
    ];
}