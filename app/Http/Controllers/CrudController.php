<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Request;
use App\RequestWheelchair;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
class CrudController extends Controller {
    public function __construct() {
        //
        $this->middleware('auth:user');
    }
    public function index() {
        // We need to show all data from "wheelchair_requests" table.
        $reqs = RequestWheelchair::all();
        // Show request data to our view.
        return view('crud.index',['wheelchair_requests' => $reqs]);
    }
    public function show() {
        return view('crud.index');
    }
    // Edit Request function.
    public function editRequest($req) {
        $crud = RequestWheelchair::find($req->id);
        $crud->wcrequest = $req->wcrequest;
        $crud->unit = $req->unit;
        $crud->room= $req->room;
        $crud->patient_name = $req->patientname;
        $crud->gender = $req->gender;
        $crud->diagnosis = $req->diagnosis;
        $crud->therapisttitle = $req->therapisttitle;
        $crud->therapistname = $req->therapistname;
        $crud->description = $req->description;
        $crud->save();
        return response()->json($crud);
    }
    // Add Request into the database.
    public function addRequest($req) {
        $preceptor = array(
            'wcrequest' => 'required',
            'unit' => 'required',
            'room' => 'required',
            'patientname' => 'required',
            'gender' => 'required',
            'diagnosis' => 'required',
            'therapisttitle' => 'required',
            'therapistname' => 'required',
            'description' => 'required'
        );
        /**
         * Illuminate/Support/Facades
         * @property $req
         * @property  $wcrequest
         *
         */
        // Validator.
        $validator = Validator::make(Input::all(), $preceptor);
        if ($validator->fails())
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));

        else {
            $crud = new RequestWheelchair();
            $crud->wcrequest = $req->wcrequest;
            $crud->unit = $req->unit;
            $crud->room= $req->room;
            $crud->patientname = $req->patientname;
            $crud->gender = $req->gender;
            $crud->diagnosis = $req->diagnosis;
            $crud->therapisttitle = $req->therapisttitle;
            $crud->therapistname = $req->therapistname;
            $crud->description = $req->description;
            $crud->save();
            return response()->json($crud);
        }
    }
    // Delete Request.
    public function deleteItem($req) {
        RequestWheelchair::find($req->id)->delete();
        return response()->json();
    }
}