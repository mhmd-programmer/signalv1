<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Binery extends Model
{
    protected $fillable = ['name', 'time', 'hour', 'date', 'status'];
}
