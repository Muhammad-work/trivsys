<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    protected $fillable = [
      'img',
      'title',
      'des'
    ];
}
