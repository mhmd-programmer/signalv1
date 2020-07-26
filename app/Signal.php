<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signal extends Model
{
    protected $fillable = ['name', 'pip', 'pips', 'symbol', 'price', 'stop', 'profit', 'status', 'year', 'month', 'day', 'city', 'time', 'number'];
}
