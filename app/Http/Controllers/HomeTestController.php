<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeTestController extends Controller {
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     */
    /** This function controls the Select Fields for the Dependant Dynamic Form Wizard:
     *  Select Fields 2, 3, 4, 5, 7, 9, 10 are controlled through the 'ajaxJsonResponse'
     *  Function.
     **/

    public function index() {
        return view('user.hometest'); //sent data to view
    }
}