<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Support;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function Date(){
        $date = Carbon::now()->timezone(auth()->user()->timezone)->format('Y.m.d');
        $time = Carbon::now()->timezone(auth()->user()->timezone)->format('H:i');
        $city = str_replace(['Asia/', 'America/', 'Australia/', 'Africa/', 'Europe/'], '', auth()->user()->timezone);
        return ['date' => $date, 'time' => $time, 'city' => $city];
    }

    public function Auth() {
        if(auth()->check()){
            if(auth()->user()->role == 'admin'){
                return ['role' => 20, 'email' => auth()->user()->email];
            }
            else {
                return ['role' => 1, 'email' => auth()->user()->email];
            }
        }
        else {
            return ['role' => 0, 'email' => ''];
        }
    }

    public function ChangePass(User $user){        
            $change = $user->where('id', auth()->user()->id)->first();
            $change->update([
            'password' => bcrypt(request()->password),
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,
        ]);
        return 'Done';

    }

    public function Change(User $user){
        $change = $user->where('id', auth()->user()->id)->first();
            $change->name = request()->name == "" ? auth()->user()->name : request()->name;
            $change->email = request()->email == "" ? auth()->user()->email : request()->email;
            $change->timezone = request()->timezone == "" ? auth()->user()->timezone : request()->timezone;
            $change->save();
        
        return "Done";
    }

    public function UserID(){
        return auth()->user()->id;
    }

    public function Auto(){
        auth()->loginUsingId(request()->id);
    }

    public function Rate(){
        return auth()->user()->rate;
    }

    public function Support(Support $support){
        $support->create(array_merge(request()->all(), [
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,
        ]));
        return 'Done';
    }

    public function chart() {
        $day1 = json_decode(file_get_contents('http://data.fixer.io/api/2019-05-10?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=USD&symbols=EUR'));
        $day2 = json_decode(file_get_contents('http://data.fixer.io/api/2019-05-11?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=USD&symbols=EUR'));
        return ['daya' => $day1, 'dayb' => $day2];
    }
}