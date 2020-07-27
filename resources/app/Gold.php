<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gold extends Model
{
    protected $fillable = ['name', 'status', 'price', 'stop', 'profit'];
}
