<?php
namespace App\Http\Controllers;
use App\ArmrestType;
use App\CushionDimension;
use App\CushionType;
use App\Gender;
use App\InpatientDiagnosis;
use App\InpatientWcBrand;
use App\InpatientWcModel;
use App\TherapistName;
use App\TherapistTitle;
use App\WheelchairBack;
use App\WheelchairDimension;
use App\WheelchairHeight;
use App\WheelchairType;
use Illuminate\Http\Request;
use App\PatientName;
use App\Room;
use App\Unit;
class TestController extends Controller {
    // TestController - API Function
    public function index() {
        // This variable controls the Units Select Field #1
        $units = Unit::all();//get data from table.
        // This variable controls the Therapist Title Select Field #6
        $therapist_title = TherapistTitle::all();//get data from table.
        // This variable controls the Wheelchair Types Select Field #8
        $wc_types = WheelchairType::all();//get data from table.
        // This variable controls the Rooms Select Field #11
        $wc_dimensions = WheelchairDimension::all();//get data from table.
        // This variable controls the Rooms Select Field #12
        $wc_heights = WheelchairHeight::all();//get data from table.
        // This variable controls the Rooms Select Field #13
        $wc_back_type = WheelchairBack::all();//get data from table.
        // This variable controls the Rooms Select Field #14
        $cushion_types = CushionType::all();//get data from table.
        // This variable controls the Rooms Select Field #15
        $cushion_dimensions = CushionDimension::all();//get data from table.
        // This variable controls the Rooms Select Field #16
        $armrest_types = ArmrestType::all();//get data from table.
        return view('testview', compact('units', 'therapist_title', 'wc_types', 'wc_dimensions', 'wc_heights',
                    'wc_back_type', 'cushion_types','cushion_dimensions', 'armrest_types' )); //sent data to view
    }
    public function findPatientName(Request $request) {
        // This variable controls the Rooms Select Field #2
        $inpatients = PatientName::select('patient_name','id')->where('unit_id',$request->id)->take(100)->get();
        return response()->json($inpatients); // Then sent this data to ajax success.
    }
    public function findRoom(Request $request){
        // This variable controls the Rooms Select Field #3
        $rooms = Room::select('room','id')->where('inpatient_id',$request->id)->take(100)->get();
        return response()->json($rooms); // Then sent this data to ajax success.
    }
    public function findGender(Request $request){
        // This variable controls the Rooms Select Field #4
        $gender = Gender::select('gender','id')->where('room_id',$request->id)->take(100)->get();
        return response()->json($gender); // Then sent this data to ajax success.
    }
    public function findDiagnosis(Request $request){
        // This variable controls the Diagnosis Select Field #5
        $diagnosis = InpatientDiagnosis::select('diagnosis_abbreviation','id')->where('gender_id',$request->id)->take(100)->get();
        return response()->json($diagnosis); // Then sent this data to ajax success.
    }
    public function findTherapistNames(Request $request){
        // This variable controls the Rooms Select Field #7
        $therapist_names = TherapistName::select('therapist_names','id')->where('title_id',$request->id)->take(100)->get();
        return response()->json($therapist_names); // Then sent this data to ajax success.
    }
    public function findInpatientWcModels(Request $request){
        // This variable controls the Rooms Select Field #9
        $wc_models = InpatientWcModel::select('inpatient_wc_model','id')->where('inpatient_wc_type_id',$request->id)->take(100)->get();
        return response()->json($wc_models); // Then sent this data to ajax success.
    }
    public function findInpatientWcBrands(Request $request){
        // This variable controls the Rooms Select Field #10
        $wc_brands = InpatientWcBrand::select('inpatient_wc_brand','id')->where('wc_model_id',$request->id)->take(100)->get();
        return response()->json($wc_brands); // Then sent this data to ajax success.
    }
}
