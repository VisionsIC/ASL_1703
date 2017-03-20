<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use View;

class ProfilesController extends Controller {
    /**
     * Create a Profiles controller instance.
     * @return void
     */
    public function __construct() {
        $this->middleware('auth:user');
    }
    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     * @param $slug
     */

    public function index($slug) {
        $user = User::where('slug', $slug)->first();
        return View::route('profiles/user-profile')
            ->with('user', $user);
    }
}
