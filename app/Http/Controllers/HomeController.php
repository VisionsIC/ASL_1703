<?php
namespace App\Http\Controllers;
use App\Gender;
use App\InpatientDiagnosis;
use App\InpatientWcBrand;
use App\InpatientWcModel;
use App\TherapistName;
use App\PatientName;
use App\Room;
use Illuminate\Http\Request;
class HomeController extends Controller {
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct() {
        $this->middleware('auth:user');
    }
    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     */
    /** This function controls the Select Fields for the Dependant Dynamic Form Wizard:
     *  Select Fields 2, 3, 4, 5, 7, 9, 10 are controlled through the 'ajaxJsonResponse'
     *  Function.
     *
     **/
    public function index() {
            return view('home'); //sent data to view
    }
    public function findPatientName(Request $request) {
        // This variable controls the Rooms Select Field #2
        $inpatients = PatientName::select('patient_name','id')->where('unit_id',$request->id)->take(100)->get();
        return response()->json($inpatients); // Then sent this data to ajax success.
    }
    public function findRoom(Request $request) {
        // This variable controls the Rooms Select Field #3
        $rooms = Room::select('room','id')->where('inpatient_id',$request->id)->take(100)->get();
        return response()->json($rooms); // Then sent this data to ajax success.
    }
    public function findGender(Request $request) {
        // This variable controls the Rooms Select Field #4
        $gender = Gender::select('gender','id')->where('room_id',$request->id)->take(100)->get();
        return response()->json($gender); // Then sent this data to ajax success.
    }
    public function findDiagnosis(Request $request) {
        // This variable controls the Diagnosis Select Field #5
        $diagnosis = InpatientDiagnosis::select('diagnosis_abbreviation','id')->where('gender_id',$request->id)->take(100)->get();
        return response()->json($diagnosis); // Then sent this data to ajax success.
    }
    public function findTherapistNames(Request $request) {
        // This variable controls the Rooms Select Field #7
        $therapist_names = TherapistName::select('therapist_names','id')->where('title_id',$request->id)->take(100)->get();
        return response()->json($therapist_names); // Then sent this data to ajax success.
    }
    public function findInpatientWcModels(Request $request) {
        // This variable controls the Rooms Select Field #9
        $wc_models = InpatientWcModel::select('inpatient_wc_model','id')->where('inpatient_wc_type_id',$request->id)->take(100)->get();
        return response()->json($wc_models); // Then sent this data to ajax success.
    }
    public function findInpatientWcBrands(Request $request) {
        // This variable controls the Rooms Select Field #10
        $wc_brands = InpatientWcBrand::select('inpatient_wc_brand','id')->where('wc_model_id',$request->id)->take(100)->get();
        return response()->json($wc_brands); // Then sent this data to ajax success.
    }
}