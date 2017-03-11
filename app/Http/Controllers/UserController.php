<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
class UserController extends Controller {
    // This is the public 'profile' method.
    public function profile() {
        return view('user.profile', array('user' => Auth::user()) );
    }
}
