<?php

namespace App\Http\Controllers\Auth;


use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    public $redirectTo = '/home';
    public $redirectToAdminSite = '/admin';
    public $redirectToDeveloperSite = '/developer';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);
        $user = $this->guard()->user();

        if ($user->hasRole(User::ROLE_ADMIN)) {
            $this->redirectTo = $this->redirectToAdminSite;
        }
        if ($user->hasRole(User::ROLE_DEVELOPER)) {
            $this->redirectTo = $this->redirectToDeveloperSite;
        }

        return $this->authenticated($request, $this->guard()->user())
            ? : redirect()->intended($this->redirectPath());


    }

}
