<?php
namespace App\Http\Controllers\Auth;
use App\User;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;
class RegisterController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    */
    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     * @var string
     */
    protected $redirectTo = 'home';
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }
    /**
     * Get a validator for an incoming registration request.
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
            'username' => 'required|max:100|unique:users',
            'sex' => 'required|boolean',
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'title' => 'required|max:255',
            'email' => 'required|email|max:100|unique:users',
            'password' => 'required|min:6|max:60|confirmed',
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     * @param  array  $data
     * @return User
     */
    protected function create(array $data) {
        if ($data['sex']) {
            $avatar = 'male.png';
        }
        else {
            $avatar = 'female.png';
        }
        return User::create([
            'username' => $data['username'],
            'sex' => $data['sex'],
            'slug' => str_slug($data['username']),
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'title' => $data['title'],
            'avatar' => $avatar,
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);
    }
    /**
     * Show the application registration form.
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm() {
        return view('auth.user-register');
    }
    /**
     * Get the guard to be used during registration.
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard() {
        return Auth::guard('user');
    }
}