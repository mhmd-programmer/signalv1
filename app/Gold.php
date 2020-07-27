<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gold extends Model
{
    protected $fillable = ['status', 'price', 'stop', 'profit', 'year', 'month', 'day', 'city', 'time', 'info'];
}
