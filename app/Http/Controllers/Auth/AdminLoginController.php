<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Validation\ValidatesRequests;
class AdminLoginController extends Controller {

    //inside the controller class
    use ValidatesRequests;
    /*
    |--------------------------------------------------------------------------
    | Admin Login Controller
    |--------------------------------------------------------------------------
    | This controller handles authenticating admin users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    */
    /**
     * Create a new controller instance.
     * @return void
     */
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     * @var string
     */
    protected $redirectTo = 'admin';
    /**
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    /**
     * Show the application's admin login form.
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }
    public function username()
    {
        return 'username';
    }
    public function login(Request $request) {
        // Validate the data.
        $this->validate($request, [
            'username' => 'required|username',
            'password' => 'required|min:6'
        ]);
        // Attempt to log in the Admin user.
        if (Auth::gaurd('admin')
         /**
         * In the If statement the variable below is used.
         * @var $remember
         * As well as these attributes:
         *
         */
            ->attempt( ['username' => $request->username,
                        'password' => $request->password], $request->$remember)) {
            // If successful, then redirect to intended app location.
                return redirect()->intended(route('admin.dashboard'));
        }
        // If not successful, then redirect back to login.
        return redirect()->back()->withInput($request->only('username', 'remember'));
    }
}