<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use BeyondCode\EmailConfirmation\Traits\AuthenticatesUsers;
use Socialite;
use App\User;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $users = User::where('email', $user->getEmail())->first();
        if(! $users){
            $users = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => bcrypt($user->getId()),
                'role' => 'admin',
            ]);
        }
        
            $users->update([
                'confirmation_code' => NULL,
                'confirmed_at' => '2020-05-03 20:31:57',
            ]);
            $users = User::where('email', $user->getEmail())->first();
            
            auth()->loginUsingId($users->id);
            return redirect('/');
        
        
        // try {
        //     $user = Socialite::driver('google')->stateless()->user();
        // } catch (\Exception $e) {
        //     return redirect('/login');
        // }
        // // only allow people with @company.com to login
        // if(explode("@", $user->email)[1] !== 'company.com'){
        //     return redirect()->to('/');
        // }
        // // check if they're an existing user
        // $existingUser = User::where('email', $user->email)->first();
        // if($existingUser){
        //     // log them in
        //     auth()->login($existingUser, true);
        // } else {
        //     // create a new user
        //     $newUser                  = new User;
        //     $newUser->name            = $user->getName;
        //     $newUser->email           = $user->getEmail;
        //     $newUser->google_id       = $user->getId;
        //     $newUser->save();
        //     auth()->login($newUser, true);
        // }
        // return redirect()->to('/');
    }
}
