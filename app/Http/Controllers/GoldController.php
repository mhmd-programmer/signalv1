<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gold;
use Carbon\Carbon;

class GoldController extends Controller
{
    public function Gold(Gold $gold) {
        return $gold->create(array_merge(request()->all(), [
            'year' => Carbon::now()->year,
            'month' => carbon::now()->month,
            'day' => Carbon::now()->day,
            'city' => 'Tehran',
            'time' => Carbon::now()->format('H:i'),
            'status' => 'ready',
        ]));
    }

    public function filter(Gold $gold, $id)
    {
        return $gold->where('id', $id)->first();
    }

    public function GoldBox(Gold $gold)
    {
        return $gold->latest()->get();
    }
}
