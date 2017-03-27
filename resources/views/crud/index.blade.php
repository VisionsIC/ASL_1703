@extends('layouts.auth-modal')
@section('content')
    @parent
    <div class="row">
        <div class="col-md-12">
            <h1>WheelChair Request Dashboard</h1>
        </div>
    </div>
    <div class="form-group row add">
        <div class="col-md-5">
            <input type="text" class="form-control" id="wcrequest" name="wcrequest"
                   placeholder="Your Wheelchair Request Here" required>
            <p class="error text-center alert alert-danger hidden"></p>
        </div>
        <div class="col-md-5">
            <input type="text" class="form-control" id="unit" name="unit"
                   placeholder="Enter Unit Information Here" required>
            <p class="error text-center alert alert-danger hidden"></p>
        </div>
        <div class="col-md-5">
            <input type="text" class="form-control" id="room" name="room"
                   placeholder="Enter Room Information Here" required>
            <p class="error text-center alert alert-danger hidden"></p>
        </div>
        <div class="col-md-5">
            <input type="text" class="form-control" id="patientname" name="patientname"
                   placeholder="Enter Patient Name Information Here" required>
            <p class="error text-center alert alert-danger hidden"></p>
        </div>
        <div class="col-md-5">
            <input type="text" class="form-control" id="gender" name="gender"
                   placeholder="Enter Gender Information Here" required>
            <p class="error text-center alert alert-danger hidden"></p>
        </div>
        <div class="col-md-5">
            <input type="text" class="form-control" id="diagnosis" name="diagnosis"
                   placeholder="Enter Diagnosis Information Here" required>
            <p class="error text-center alert alert-danger hidden"></p>
        </div>
        <div class="col-md-5">
            <input type="text" class="form-control" id="therapisttitle" name="therapisttitle"
                   placeholder="Enter Therapist Title Information Here" required>
            <p class="error text-center alert alert-danger hidden"></p>
        </div>
        <div class="col-md-5">
            <input type="text" class="form-control" id="therapistname" name="therapistname"
                   placeholder="Enter Therapist Name Information Here" required>
            <p class="error text-center alert alert-danger hidden"></p>
        </div>
        <div class="col-md-5">
            <input type="text" class="form-control" id="description" name="description"
                   placeholder="Your Description Here" required>
            <p class="error text-center alert alert-danger hidden"></p>
        </div>
        <div class="col-md-2">
            <button class="btn btn-warning" type="submit" id="add">
                <span class="glyphicon glyphicon-plus"></span> Add New Data
            </button>
        </div>
    </div>

    <div class="row">
        <div class="table-responsive">
            <table class="table table-borderless" id="table">
                <tr>
                    <th>No.</th>
                    <th>Wheelchair Request</th>
                    <th>Unit</th>
                    <th>Room</th>
                    <th>Patient Name</th>
                    <th>Gender</th>
                    <th>Diagnosis</th>
                    <th>Therapist Title</th>
                    <th>Therapist Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                {{ csrf_field() }}
                <?php $no=1; ?>
                @foreach(App\RequestWheelchair::all() as $crud)
                    <tr class="req{{$crud->id}}">
                        <td>{{$no++}}</td>
                        <td>{{$crud->wcrquest}}</td>
                        <td>{{$crud->unit}}</td>
                        <td>{{$crud->room}}</td>
                        <td>{{$crud->patientname}}</td>
                        <td>{{$crud->gender}}</td>
                        <td>{{$crud->diagnosis}}</td>
                        <td>{{$crud->therapisttitle}}</td>
                        <td>{{$crud->therapistname}}</td>
                        <td>{{$crud->description}}</td>
                        <td>
                            <button class="edit-modal btn btn-primary" data-id="{{$crud->id}}" data-wcrequest="{{$crud->wcrequest}}" data-unit="{{$crud->unit}}" data-room="{{$crud->room}}" data-patientname="{{$crud->patientname}}" data-gender="{{$crud->gender}}" data-diagnosis="{{$crud->diagnosis}}" data-therapisttitle="{{$crud->therapisttitle}}" data-therapistname="{{$crud->therapistname}}" data-description="{{$crud->description}}">
                                <span class="glyphicon glyphicon-edit"></span> Edit
                            </button>
                            <button class="delete-modal btn btn-danger" data-id="{{$crud->id}}" data-wcrequest="{{$crud->wcrequest}}" data-unit="{{$crud->unit}}" data-room="{{$crud->room}}" data-patientname="{{$crud->patientname}}" data-gender="{{$crud->gender}}" data-diagnosis="{{$crud->diagnosis}}" data-therapisttitle="{{$crud->therapisttitle}}" data-therapistname="{{$crud->therapistname}}" data-description="{{$crud->description}}">
                                <span class="glyphicon glyphicon-trash"></span> Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">ID :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="fid" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="wcrequest">Wheelchair Request:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="wcr">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="unit">Unit:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="unt">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="room">Room:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="rm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="patientname">Patient Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="gender">Gender:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="gdr">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="diagnosis">Diagnosis:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="dia">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="therapisttitle">Therapist Title:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="ttl">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="therapistname">Therapist Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="thn">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="description">Description:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="desc">
                            </div>
                        </div>
                    </form>
                    <div class="deleteContent">
                        Are you Sure you want to delete <span class="req"></span> ?
                        <span class="hidden id"></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn actionBtn" data-dismiss="modal">
                            <span id="footer_action_button" class='glyphicon'> </span>
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection