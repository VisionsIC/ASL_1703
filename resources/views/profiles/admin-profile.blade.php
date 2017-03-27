@extends('layouts.auth-profile')
@section('content')
    @parent
    <div class="container">
        <div class="row">
            <div id="main-spread">
                <div class="panel panel-default">
                    <div class="panel-heading" id="panel-title">{{$user->username}}'s RERA User Profile</div>
                    <div class="panel-body" id="pb-zero">
                        <!-- Main Page Content Goes Here!!-->
                        <div class="form-container">
                            <div class="row">
                                <div class="panel with-nav-tabs panel-primary">
                                    <div class="panel-heading" id="hdg-one">
                                        <ul class="nav nav-tabs" id="click-tabs">
                                            <li role="presentation" class="active" id="hcpro-li"><a role="tab" href="#dash-home-tab" aria-controls="user profile" data-toggle="tab"><i class="fa fa-btn fa-address-card-o"></i> Current Users</a></li>
                                            <li role="presentation" id="admin-li"><a role="tab" href="#wheelchairs-tab" aria-controls="wheelchairs" data-toggle="tab"><i class="fa fa-btn fa-bank"></i> User Editing</a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body" id="pb-one">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="dash-home-tab">
                                                <div class="form-container">
                                                    <div class="row" id="form-row">
                                                        <div class="col-md-12">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" id="wc-panel-head">
                                                                    <h5 id="wc-req-head-title">RERA Current Users</h5>
                                                                </div>
                                                                <div id="profile-content" class="form-horizontal">
                                                                    <!-- Start Of 2nd Tab User Account -->
                                                                    @include('profiles.user-editing')
                                                                </div>
                                                                <p id="profile-help-pg1" class="help-desk" align="center">Having trouble with this App? Dial 484.596.HELP (4357)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="wheelchairs-tab">
                                                <div class="form-container">
                                                    <div class="row" id="form-row">
                                                        <div class="col-md-12">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" id="wc-panel-head">
                                                                    <h5 id="wc-req-head-title">User Editing</h5>
                                                                </div>
                                                                <div class="form-horizontal">
                                                                    <!-- Start Of 2nd Tab User Account -->

                                                                </div>
                                                                <p class="help-desk" id="profile-help-pg2" align="center">Having trouble using this App? Dial 484.596.HELP (4357)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection