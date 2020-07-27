<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signal extends Model
{
    protected $fillable = ['name', 'pip', 'pips', 'price', 'stop', 'profit', 'status', 'year', 'month', 'day', 'number'];
}
