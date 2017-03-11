<?php
namespace App\Http\Controllers;
use App\ArmrestTypes;
use App\CushionDimensions;
use App\CushionTypes;
use App\InpatientWcBrands;
use App\InpatientWcModels;
use App\WheelchairBacks;
use App\WheelchairDimensions;
use App\WheelchairHeights;
use App\WheelchairTypes;
use App\Diagnosis;
use App\Gender;
use App\TherapistNames;
use App\TherapistTitles;
use Illuminate\Http\Request;
use App\PatientNames;
use App\Rooms;
use App\Units;
class TestAutoController extends Controller {
    // TestController - API Function
    public function index() {
        return view('testauto');//sent data to view
    }
    // This function controls the Unit Input Field #1
    public function findUnits(Request $request) {
        $term=$request->term; // JQuery
        $data = Units::where('unit', 'LIKE', '%'.$term.'%')->take(10)->get();
        $results=array();
        foreach ($data as $key => $value) {
            $results[]=['id'=>$value->id,'value'=>$value->unit];
        }
        return response()->json($results);
    }
    // This function controls the Patient Names Input Field #2
    public function findPatientNames(Request $request) {
        $term=$request->term; // JQuery
        $data = PatientNames::where('patient_name', 'LIKE', '%'.$term.'%')->take(10)->get();
        $results=array();
        foreach ($data as $key => $value) {
            $results[]=['id'=>$value->id,'value'=>$value->patient_name];
        }
        return response()->json($results);
    }
    // This function controls the Rooms Input Field #3
    public function findRooms(Request $request) {
        $term=$request->term; // JQuery
        $data = Rooms::where('room', 'LIKE', '%'.$term.'%')->take(10)->get();
        $results=array();
        foreach ($data as $key => $value) {
            $results[]=['id'=>$value->id,'value'=>$value->room];
        }
        return response()->json($results);
    }
    // This function controls the Gender Input Field #4
    public function findGender(Request $request) {
        $term=$request->term; // JQuery
        $data = Gender::where('gender', 'LIKE', '%'.$term.'%')->take(10)->get();
        $results=array();
        foreach ($data as $key => $value) {
            $results[]=['id'=>$value->id,'value'=>$value->gender];
        }
        return response()->json($results);
    }
    // This function controls the Diagnosis Input Field #5
    public function findDiagnosis(Request $request) {
        $term=$request->term; // JQuery
        $data = Diagnosis::where('diagnosis_type', 'LIKE', '%'.$term.'%')->take(10)->get();
        $results=array();
        foreach ($data as $key => $value) {
            $results[]=['id'=>$value->id,'value'=>$value->diagnosis_type];
        }
        return response()->json($results);
    }
    // This function controls the Therapist Titles Input Field #6
    public function findTherapistTitles(Request $request) {
        $term=$request->term; // JQuery
        $data = TherapistTitles::where('title', 'LIKE', '%'.$term.'%')->take(10)->get();
        $results=array();
        foreach ($data as $key => $value) {
            $results[]=['id'=>$value->id,'value'=>$value->title];
        }
        return response()->json($results);
    }
    // This function controls the Therapist Names Input Field #7
    public function findTherapistNames(Request $request) {
        $term=$request->term; // JQuery
        $data = TherapistNames::where('therapist_names', 'LIKE', '%'.$term.'%')->take(10)->get();
        $results=array();
        foreach ($data as $key => $value) {
            $results[]=['id'=>$value->id,'value'=>$value->therapist_names];
        }
        return response()->json($results);
    }
    // This function controls the Wheelchair Types Input Field #8
    public function findWcTypes(Request $request) {
        $term=$request->term; // JQuery
        $data = WheelchairTypes::where('wc_type', 'LIKE', '%'.$term.'%')->take(10)->get();
        $results=array();
        foreach ($data as $key => $value) {
            $results[]=['id'=>$value->id,'value'=>$value->wc_type];
        }
        return response()->json($results);
    }
    // This function controls the Inpatient Wheelchair Models Input Field #9
    public function findInpatientWcModels(Request $request) {
        $term=$request->term; // JQuery
        $data = InpatientWcModels::where('inpatient_wc_model', 'LIKE', '%'.$term.'%')->take(10)->get();
        $results=array();
        foreach ($data as $key => $value) {
            $results[]=['id'=>$value->id,'value'=>$value->inpatient_wc_model];
        }
        return response()->json($results);
    }
    // This function controls the Inpatient Wheelchair Brands Input Field #10
    public function findInpatientWcBrands(Request $request) {
        $term=$request->term; // JQuery
        $data = InpatientWcBrands::where('inpatient_wc_brand', 'LIKE', '%'.$term.'%')->take(10)->get();
        $results=array();
        foreach ($data as $key => $value) {
            $results[]=['id'=>$value->id,'value'=>$value->inpatient_wc_brand];
        }
        return response()->json($results);
    }
    // This function controls the Wheelchair Dimensions Input Field #11
    public function findWcDimensions(Request $request) {
        $term=$request->term; // JQuery
        $data = WheelchairDimensions::where('wc_dimensions', 'LIKE', '%'.$term.'%')->take(10)->get();
        $results=array();
        foreach ($data as $key => $value) {
            $results[]=['id'=>$value->id,'value'=>$value->wc_dimensions];
        }
        return response()->json($results);
    }
    // This function controls the Wheelchair Heights Input Field #12
    public function findWcHeights(Request $request) {
        $term=$request->term; // JQuery
        $data = WheelchairHeights::where('wc_height', 'LIKE', '%'.$term.'%')->take(10)->get();
        $results=array();
        foreach ($data as $key => $value) {
            $results[]=['id'=>$value->id,'value'=>$value->wc_height];
        }
        return response()->json($results);
    }
    // This function controls the Wheelchair Backs Input Field #13
    public function findWcBacks(Request $request) {
        $term=$request->term; // JQuery
        $data = WheelchairBacks::where('wc_back_type', 'LIKE', '%'.$term.'%')->take(10)->get();
        $results=array();
        foreach ($data as $key => $value) {
            $results[]=['id'=>$value->id,'value'=>$value->wc_back_type];
        }
        return response()->json($results);
    }
    // This function controls the Cushion Types Input Field #14
    public function findCushionTypes(Request $request) {
        $term=$request->term; // JQuery
        $data = CushionTypes::where('cushion_type', 'LIKE', '%'.$term.'%')->take(10)->get();
        $results=array();
        foreach ($data as $key => $value) {
            $results[]=['id'=>$value->id,'value'=>$value->cushion_type];
        }
        return response()->json($results);
    }
    // This function controls the Cushion Dimensions Input Field #15
    public function findCushionDimensions(Request $request) {
        $term=$request->term; // JQuery
        $data = CushionDimensions::where('cushion_dimensions', 'LIKE', '%'.$term.'%')->take(10)->get();
        $results=array();
        foreach ($data as $key => $value) {
            $results[]=['id'=>$value->id,'value'=>$value->cushion_dimensions];
        }
        return response()->json($results);
    }
    // This function controls the Armrest Types Input Field #16
    public function findArmrestTypes(Request $request) {
        $term=$request->term; // JQuery
        $data = ArmrestTypes::where('armrest_type', 'LIKE', '%'.$term.'%')->take(10)->get();
        $results=array();
        foreach ($data as $key => $value) {
            $results[]=['id'=>$value->id,'value'=>$value->armrest_type];
        }
        return response()->json($results);
    }
}
