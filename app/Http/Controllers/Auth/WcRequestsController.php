<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use Auth;
class WcRequestsController extends Controller {
    // When this controller is initiated through it's POST Route, it will redirect to the page below.
    protected $redirectTo = 'home';
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Get a validator for an incoming registration request.
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
            'unit' => 'required|max:255',
            'room' => 'required|max:255',
            'patient_name' => 'required|max:255',
            'gender' => 'required|max:255',
            'diagnosis' => 'required|max:255',
            'therapist_title' => 'required|max:255',
            'therapist_name' => 'required|max:255',
            'wc_type' => 'required|max:255',
            'wc_model' => 'required|max:255',
            'wc_brand' => 'required|max:255',
            'wc_dimensions' => 'required|max:255',
            'wc_height' => 'required|max:255',
            'wc_back' => 'required|max:255',
            'cushion_type' => 'required|max:255',
            'cushion_dimensions' => 'required|max:255',
            'armrest_type' => 'required|max:255'
        ]);
    }
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }
    /**
     * Create a new user instance after a validating data input.
     * @param array $data
     */
    protected function create(array $data) {
        return WcRequests::create([
            'unit' => $data['unit'],
            'room' => $data['room'],
            'patient_name' => $data['patient_name'],
            'gender' => $data['gender'],
            'diagnosis' => $data['diagnosis'],
            'therapist_title' => $data['therapist_title'],
            'therapist_name' => $data['therapist_name'],
            'wc_type' => $data['wc_type'],
            'wc_model' => $data['wc_model'],
            'wc_brand' => $data['wc_brand'],
            'wc_dimensions' => $data['wc_dimensions'],
            'wc_height' => $data['wc_height'],
            'wc_back' => $data['wc_back'],
            'cushion_type' => $data['cushion_type'],
            'cushion_dimensions' => $data['cushion_dimensions'],
            'armrest_type' => $data['armrest_type']
        ]);
    }
    /**
     * Show the application registration form.
     * @return \Illuminate\Http\Response
     */
    public function showWcRequestsForm() {
        return view('auth.wc-requests-form');
    }
    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }
    /**
     * Display the specified resource.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }
    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }
    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }
    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
    /**
     * Get the guard to be used during wheelchair request.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard() {
        return Auth::guard('user');
    }
}