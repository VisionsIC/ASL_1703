<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\User;
class UserController extends Controller {
    /**
     * Where to redirect users after login.
     * @var string
     */
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct() {
        $this->middleware('auth:user');
    }
    // Profile Function
    public function profile(Request $request) {
        $user = Auth::user(User::all());
        return view('profiles/user-profile', array('user' => $user));
    }
    // Avatar Function
    public function avatar(Request $request) {
        }
}
