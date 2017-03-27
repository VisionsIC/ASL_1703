    <div class="form-container">
        <div id="home_wr_row" class="row">
            <div class="col-md-12">
                <div class="panel panel-default" id="form-panel">
                    <header class="panel-heading" id="form-panel-header"><p>Current Wheelchair Requests</p></header>
                    <section class="panel-body" id="pb_inside">
                        <table>
                            <tr>
                                <th>WC Request No.</th>
                                <th>Unit</th>
                                <th>Room #</th>
                                <th>Patient Name</th>
                                <th>Therapist Title</th>
                                <th>Therapist Name</th>
                                <th>Request Action</th>

                            </tr>
                            <?php
                            $no=1;
                            $wc_requests = App\WcRequest::all()
                            ?>
                            @foreach($wc_requests as $wc_request)
                            <tr>
                                <td style="width: 50px">{{$no++}}</td>
                                <td style="width: 50px">{{$wc_request->unit}}</td>
                                <td style="width: 50px">{{$wc_request->room}}</td>
                                <td style="width: 200px">{{$wc_request->patient_name}}</td>
                                <td style="width: 50px">{{$wc_request->therapist_title}}</td>
                                <td style="width: 200px">{{$wc_request->therapist_name}}</td>
                                <td style="width: 300px">
                                    <ul class="nav nav-pills">
                                        <li><a id="wcr-edit-button" class="btn btn-default">Edit</a></li>
                                        <li><a id="wcr-update-button" class="btn btn-success">Update</a></li>
                                        <li><a id="wcr-delete-button" class="btn btn-danger">Delete</a></li>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </section>
                    <p id="app-crud-help" class="help-desk" align="center">Having trouble with this App? Dial 484.596.HELP (4357)</p>
                </div>
            </div>
        </div>
    </div>