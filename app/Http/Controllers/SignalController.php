<?php

namespace App\Http\Controllers;

use App\Gold;
use Illuminate\Http\Request;
use App\Signal;
use App\Binery;
use Carbon\Carbon;
use App\User;
class SignalController extends Controller
{
    public function store(Signal $signal){
        $a = request()->info;
        return $signal->create(array_merge(request()->all(), [
            'year' => Carbon::now()->year,
            'month' => carbon::now()->month,
            'day' => Carbon::now()->day,
            'city' => 'Tehran',
            'time' => Carbon::now()->format('H:i'),
            'status' => $a[0] == 'b' ? 'green' : 'red',
        ]));
    }

    public function Filter(Signal $signal){
        return $signal->latest()->get();
    }

    public function SignalFree(Signal $signal, $id)
    {
        return $signal->where('id', $id)->first();
    }
    public function SignalSilver(Signal $signal)
    {
        if(auth()->user()->rate == 'silver'){
            return $signal->latest()->take(3)->get();
        }
    }

    public function SignalDiamond(Signal $signal)
    {
        if(auth()->user()->rate == 'diomond'){
            return $signal->latest()->take(15)->get();
        }
    }

    public function Rate(User $user){
        return auth()->user()->rate;
    }

    public function Binery(Binery $binery){
        // $this->validator(request(), [
        //     'name' => 'string|require|min:5'
        // ]);
        $time = Carbon::now()->timezone('Asia/Tehran')->minute + request()->time;
        $hour = Carbon::now()->timezone('Asia/Tehran')->hour;
        if($time >= 60){
            $time -= 60;
            $hour = $hour + 1;
        }
        $binery->create(array_merge(request()->all(), [
            'time' => 0,
            'hour' => Carbon::now()->timezone('Asia/Tehran')->month . ' ' . Carbon::now()->timezone('Asia/Tehran')->day . ' '. Carbon::now()->timezone('Asia/Tehran')->year . ' ' . $hour . ':' . $time . ':10 GMT+04:30',
            'date' => 0,
            'number' => 0,
        ]));
        return 'Done';
    }

    public function getBinery(Binery $binery){
        // $ta = $binery->where('number',  1])->first();
        // $tb = $binery->where(['number' => 5, 'number' => 6, 'number' => 7, 'number' => 8])->get();
        // $tc = $binery->where(['number' => 9, 'number' => 10, 'number' => 11, 'number' => 12])->get();
        // return ['ta' => $ta, 'tb' => $tb, 'tc' => $tc];
        return $binery->oldest()->get();
    }
    public function GoGo(Binery $binery, Request $request){
        $binery->where('id', $request->number)->update(['status' => 'go']);
            return $request->number;
    }
    public function GoGoGo(Binery $binery, Request $request){
        $binery->where('id', $request->number)->update(['status' => 'end']);
            return 'END';
    }

}
