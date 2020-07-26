<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Binery extends Model
{
    protected $fillable = ['name', 'pips', 'number', 'time', 'hour', 'date', 'status'];
}
