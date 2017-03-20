<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Auth;
use Password;
use Request;
use View;
class ResetPasswordController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    */
    use ResetsPasswords;
    /**
     * Where to redirect users after resetting their password.
     * @var string
     */
    protected $redirectTo = '/home';
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }
    /**
     * Display the password reset view for the given token.
     * If no token is present, display the link request form.
     * @param  \Illuminate\Http\Request $request
     * @param  string|null $token
     * @return \Illuminate\Http\Response $response
     */
    public function showResetForm (Request $request, $token = null) {
        return View::class('auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
    /**
     * Get the broker to be used during password reset.
     * @return \Illuminate\Contracts\Auth\PasswordBroker
     */
    public function broker() {
        return Password::broker('users');
    }
    /**
     * Get the guard to be used during password reset.
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard() {
        return Auth::guard('user');
    }
}