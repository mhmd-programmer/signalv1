<?php

namespace App\Http\Controllers;

// require 'vendor/autoload.php';
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Jobs\SendMail;
use Mailgun\Mailgun;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;
use App\User;
use App\Support;
use App\Status;
use App\Signal;
use Illuminate\Database\Eloquent\Collection;

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

    public function QueueMail(){
        $user = User::where('confirmation_code', NULL)->get();
        $job = new SendMail($user);
        dispatch($job);
        return 'Done';
    }

    public function Telegram(){
        $user = User::where('id', 1)->first();
        $user->notify(new \App\Notifications\PostPublished());
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function welcome(Status $status) {
        return view('welcome');
    //  auth()->loginUsingId(3);
    //  Auth::logout();
    // $user = User::where('id', 1)->first();
    // Auth::login($user, true);
    // return Auth::user()->rate;
    // return User::where('confirmation_code', NULL)->get();
    }

    public function Date(User $user, $id, $slug, Signal $signal, $token){
        $udate = $user->where('id', $id)->first();
        $sig = $signal->where('id', $slug)->first();
        if($udate->email == $token){
            $date = Carbon::parse($sig->created_at)->timezone($udate->timezone)->format('Y.m.d');
            $time = Carbon::parse($sig->created_at)->timezone($udate->timezone)->format('H:i');
            $city = str_replace(['Asia/', 'America/', 'Australia/', 'Africa/', 'Europe/'], '', $udate->timezone);
            return ['date' => $date, 'time' => $time, 'city' => $city];
        }
        else {
            return 'Fail';
        }
    }

    public function Auth($id, $token) {
        if(auth()->check()){
            $user = User::where('id', $id)->first();

            if($user->email == $token){
                if($user->role == 'admin'){
                    return ['role' => 20, 'email' => $user->email];
                }
                else {
                    return ['role' => 1, 'email' => $user->email];
                }
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
        $id = auth()->user()->id;
        $token = auth()->user()->email;
        return ['id' => $id, 'token' => $token];
    }

    public function Auto(){
        $user = User::where('id', request()->id)->first();
        if($user->email == request()->token){
            auth()->loginUsingId(request()->id);
        }
        else {
            return 'Fail';
        }

    }



    public function Support(Support $support){
        $support->create(array_merge(request()->all(), [
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,
        ]));
        return 'Done';
    }

    public function chart() {
        $dt = Carbon::now()->format('d');
        $dty = Carbon::now()->format('Y-m-');
        $day1 = json_decode(file_get_contents('https://data.fixer.io/api/' . $dty . $dt . '?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day2 = json_decode(file_get_contents('https://data.fixer.io/api/' . $dty . --$dt . '?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day3 = json_decode(file_get_contents('https://data.fixer.io/api/' . $dty . --$dt . '?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day4 = json_decode(file_get_contents('https://data.fixer.io/api/' . $dty . --$dt . '?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day5 = json_decode(file_get_contents('https://data.fixer.io/api/' . $dty . --$dt . '?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day6 = json_decode(file_get_contents('https://data.fixer.io/api/' . $dty . --$dt . '?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day7 = json_decode(file_get_contents('https://data.fixer.io/api/' . $dty . --$dt . '?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day8 = json_decode(file_get_contents('https://data.fixer.io/api/' . $dty . --$dt . '?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day9 = json_decode(file_get_contents('https://data.fixer.io/api/' . $dty . --$dt . '?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day10 = json_decode(file_get_contents('https://data.fixer.io/api/' . $dty . --$dt . '?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day11 = json_decode(file_get_contents('https://data.fixer.io/api/' . $dty . $dt . '?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day12 = json_decode(file_get_contents('https://data.fixer.io/api/' . $dty . --$dt . '?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day13 = json_decode(file_get_contents('https://data.fixer.io/api/' . $dty . --$dt . '?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day14 = json_decode(file_get_contents('https://data.fixer.io/api/2020-03-31?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day15 = json_decode(file_get_contents('https://data.fixer.io/api/2020-03-30?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day16 = json_decode(file_get_contents('https://data.fixer.io/api/2020-03-29?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day17 = json_decode(file_get_contents('https://data.fixer.io/api/2020-03-28?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day18 = json_decode(file_get_contents('https://data.fixer.io/api/2020-03-27?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day19 = json_decode(file_get_contents('https://data.fixer.io/api/2020-03-26?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day20 = json_decode(file_get_contents('https://data.fixer.io/api/2020-03-25?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day21 = json_decode(file_get_contents('https://data.fixer.io/api/' . $dty . $dt . '?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day22 = json_decode(file_get_contents('https://data.fixer.io/api/2020-03-24?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day23 = json_decode(file_get_contents('https://data.fixer.io/api/2020-03-23?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day24 = json_decode(file_get_contents('https://data.fixer.io/api/2020-03-22?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day25 = json_decode(file_get_contents('https://data.fixer.io/api/2020-03-21?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day26 = json_decode(file_get_contents('https://data.fixer.io/api/2020-03-20?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day27 = json_decode(file_get_contents('https://data.fixer.io/api/2020-03-18?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day28 = json_decode(file_get_contents('https://data.fixer.io/api/2020-03-17?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day29 = json_decode(file_get_contents('https://data.fixer.io/api/2020-03-16?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        $day30 = json_decode(file_get_contents('https://data.fixer.io/api/2020-03-15?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD'));
        return ['daya' => $day1, 'dayb' => $day2, 'dayc' => $day3, 'dayd' => $day4, 'daye' => $day5, 'dayf' => $day6, 'dayg' => $day7, 'dayh' => $day8, 'dayi' => $day9, 'dayj' => $day10, 'dayk' => $day11, 'dayl' => $day12,
        'daym' => $day13, 'dayn' => $day14, 'dayo' => $day15, 'dayp' => $day16, 'dayq' => $day17, 'dayr' => $day18, 'days' => $day19, 'dayt' => $day20, 'dayu' => $day21, 'dayv' => $day22, 'dayw' => $day23, 'dayx' => $day24,
        'dayy' => $day25, 'dayz' => $day26, 'dayaa' => $day27, 'daybb' => $day28, 'daycc' => $day29, 'daydd' => $day30,
        ];
    }

    public function TestHttp(){
        // $client = new \GuzzleHttp\Client();
        // $response = $client->get('https://jsonplaceholder.typicode.com/users');
        // return $response;
        $response = file_get_contents('https://data.fixer.io/api/2020-03-15?access_key=c7605614102de2050e460bf6dcab60d6&format=1&base=EUR&symbols=USD');
        return $response;
    }

    public function getSupport(Support $support){
        return $support->where('answer', 0)->get();
    }

    public function SendAnswer(Support $support){
        $select = $support->where('id', request()->id)->first();
        $select->answer = 1;
        $select->text = request()->text;
        $select->save();
        return 'Done';
    }

    public function Upgrade(User $user){
        $val = $user->where('id', auth()->user()->id)->first();
        $val->rate = request()->plan;
        $val->save();
        return 'Done';
    }

    public function start(){
        return Auth::user()->google_id;
    }
    public function endStart(User $user){
        $end = $user->where('email', auth()->user()->email)->first();
        $end->google_id = '-';
        $end->save();
        return 'Done';
    }

    // public function ChangeTime(Signal $signal){
    //     $city = auth()->user()
    //     return $signal->where()
    // }
    public function SendEmail(){
        # Include the Autoloader (see "Libraries" for install instructions)

# Instantiate the client.
$mgClient = new Mailgun('b69103dd8f5a2e125b89fb50ea32e609-e5e67e3e-2f1294d3');
$domain = "https://api.mailgun.net/v3/sandbox0b80020eb39046e1981f52c6c311613e.mailgun.org";
# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
	'from'	=> 'Excited User <mailgun@YOUR_DOMAIN_NAME>',
	'to'	=> 'Baz <YOU@YOUR_DOMAIN_NAME>',
	'subject' => 'Hello',
	'text'	=> 'Testing some Mailgun awesomness!'
));
    }

    public function VerifyEmail(User $user)
    {
        return $user->where('confirmed_at', NULL)->get();
    }
}
