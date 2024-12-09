<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mailRequest extends Model
{
    protected $fillable = [
        'service',
        'name',
        'email',
        'phone',
        'mesg'
    ];
}
