<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Signal;
use App\Binery;
use Carbon\Carbon;
use App\User;
class SignalController extends Controller
{
    public function store(Signal $signal){
        return $signal->create(array_merge(request()->all(), [
            'year' => Carbon::now()->year,
            'month' => carbon::now()->month,
            'day' => Carbon::now()->day,
            'city' => 'Tehran',
            'time' => Carbon::now()->format('H:i'),
        ]));
    }

    public function Filter(Signal $signal, $year, $month, $day){
        return $signal->where(['year' => $year , 'month' => $month , 'day' => $day])->get();
    }

    public function SignalFree(Signal $signal)
    {
        $a = $signal->where('number', 1)->first();
        $b = $signal->where('number', 2)->first();
        $c = $signal->where('number', 3)->first();
        $d = $signal->where('number', 4)->first();
        $e = $signal->where('number', 5)->first();
        $f = $signal->where('number', 6)->first();
        $g = $signal->where('number', 7)->first();
        $h = $signal->where('number', 8)->first();
        $i = $signal->where('number', 9)->first();
        $j = $signal->where('number', 10)->first();
        $k = $signal->where('number', 11)->first();
        $l = $signal->where('number', 12)->first();
        $m = $signal->where('number', 13)->first();
        $n = $signal->where('number', 14)->first();
        $o = $signal->where('number', 15)->first();
        return ['a' => $a, 'b' => $b, 'c' => $c, 'd' => $d, 'e' => $e, 'f' => $f, 'g' => $g, 'h' => $h, 'i' => $i, 'j' => $j, 'k' => $k, 'l' => $l, 'm' => $m, 'n' => $n, 'o' => $o, ];
    }
    public function SignalSilver(Signal $signal)
    {
        if(auth()->user()->rate == 'silver'){
            return $signal->latest()->take(3)->get();
        }
    }
    public function SignalGold(Signal $signal)
    {
        if(auth()->user()->rate == 'gold'){
            return $signal->latest()->take(7)->get();
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
