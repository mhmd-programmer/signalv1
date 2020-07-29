<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Binery;
use Carbon\Carbon;

class BineryController extends Controller
{
    public function save(Binery $binery){
        $time = Carbon::now()->timezone('Asia/Tehran')->minute + request()->time;
        $hour = Carbon::now()->timezone('Asia/Tehran')->hour;
        if($time >= 60){
            $time -= 60;
            $hour = $hour + 1;
        }
        $binery->create(array_merge(request()->all(), [
            'time' => 0,
            'hour' => Carbon::now()->timezone('Asia/Tehran')->format('M') . ' ' . Carbon::now()->timezone('Asia/Tehran')->day . ', '. Carbon::now()->timezone('Asia/Tehran')->year . ' ' . $hour . ':' . $time . ':0',
            'date' => 0,
            'status' => 'ready',
        ]));
        return 'Done';
    }

    public function binery(Binery $binery) {
        return $binery->latest()->get();
    }
    public function ready(Binery $binery) {
        return $binery->where('status', 'ready')->get();
    }

    public function change(Binery $binery)
    {
        $id = request()->id;
        return $binery->where('id', $id)->update([
            'status' => 'go',
        ]);
    }
}
