<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'username' => 'required',
            'password' => 'required',
        ]);
   
        if(auth()->attempt(array('username' => $input['username'], 'password' => $input['password'])))
        {
            if (auth()->user()->is_auth == 'company') {
                return redirect()->route('company.dashboard');
            }
            elseif (auth()->user()->is_auth == 'individual') {
                return redirect()->route('individual.dashboard');
            }
            if (auth()->user()->is_auth == 'admin'){
                return redirect()->route('home');
            }
        }else{
            return redirect()->back()
                ->with('error','Username And Password Are Wrong.');
        }
    }
}
