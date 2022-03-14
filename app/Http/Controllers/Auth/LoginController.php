<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
    protected $redirectTo = '/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
            // 'name' => 'required'
        ]);

        if (Auth::attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->is_admin == 1) {
                // $user = $request->session()->get('data');
                return redirect()->route('admin.home');
            } else {
                return redirect()->route('login.profile');
            }
        } else {
            return redirect()->route('login')->with('error', 'Email and Password are wrong.');
        }
    }

    //All providers login
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    //All providers callback
    public function handleProviderCallback($provider)
    {
        $data = Socialite::driver($provider)->user();
        // print_r($user);
        $this->_registerOrLoginUser($data, $provider);
        // Return home after login
        return redirect()->intended();
    }
    //Register or Login
    protected function _registerOrLoginUser($data, $provider)
    {
        //GET USER 
        $user = User::where('email', $data->email)->first();

        //Create if not exists
        if (!$user) {
            //CREATE NEW USER
            $user = new User();
            $user->id = $data->id;
            $user->name = $data->name;
            $user->provider_id = $data->provider_id;
            $user->provider = $data->provider;
            $user->email = empty($data->email) ? "" : $data->email;
            $user->avatar = empty($data->avatar) ? "" : $data->avatar;
            $user->save();
        }
        //LOGIN by object user
        Auth::login($user);
    }
}
