<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class onlineClass extends Model
{
    protected $fillable = ['name', 'link', 'day', 'time', 'info'];
}
