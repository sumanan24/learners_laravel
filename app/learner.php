<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class learner extends Model
{
    protected $fillable = [
        'firstname', 'lastname'
    ];
}
