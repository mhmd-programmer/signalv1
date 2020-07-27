<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gold;

class GoldController extends Controller
{
    public function Gold(Gold $gold) {
        return $gold->create(request()->all());
    }
}
