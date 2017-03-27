<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Image;
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
        /**
         * @method user
         */
        $user = Auth::user(User::all());
        return view('profiles/user-profile', array('user' => $user));
    }
    // Avatar Function
    public function avatarUpdate(Request $request) {
        /**
         * @var $user
         */
        // Handle the user upload of avatar profile image.
        if($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(150, 150)->save( public_path('/defaults/avatars/' . $filename ) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('profiles/user-profile', array('user' => $user));
        }
}
