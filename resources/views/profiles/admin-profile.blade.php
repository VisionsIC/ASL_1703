@extends('user.layout.auth')
@section('content')
    @parent
    <div class="container">
        <div class="row">
            <div id="main-spread">
                <div class="panel panel-default">
                    <div class="panel-heading" id="panel-title">{{ $user->username }}'s RERA User Profile</div>
                    <div class="panel-body" id="pb-zero">
                        <!-- Main Page Content Goes Here!!-->
                        <div class="form-container">
                            <div class="row">
                                <div class="panel with-nav-tabs panel-primary">
                                    <div class="panel-heading" id="hdg-one">
                                        <ul class="nav nav-tabs" id="click-tabs">
                                            <li role="presentation" class="active" id="hcpro-li"><i class="fa fa-btn fa-address-card-o"></i><a role="tab" href="#dash-home-tab" aria-controls="user profile" data-toggle="tab">User Profile</a></li>
                                            <li role="presentation" id="admin-li"><i class="fa fa-btn fa-bank"></i><a role="tab" href="#wheelchairs-tab" aria-controls="wheelchairs" data-toggle="tab">User Account</a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body" id="pb-one">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="dash-home-tab">
                                                <div class="form-container">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="panel panel-default" id="form-panel">
                                                                <div class="panel-heading" id="form-head">{{ $user->username }}'s Current Profile</div>
                                                                <div class="panel-body" id="pb_inside" >
                                                                </div>
                                                                <p class="help-desk" align="center">Having trouble with this App? Dial 484.596.HELP (4357)</p>
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
                                                                    <h5 id="wc-req-head-title">{{ $user->username }}'s User Account</h5>
                                                                </div>
                                                                <div class="form-horizontal" role="form">
                                                                    <!-- Start Of 2nd Tab User Account -->
                                                                    <img src="{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                                                                    <h2>{{ $user->firstname }} {{ $user->lastname }}'s Account</h2>
                                                                </div>
                                                                <p class="help-desk" id="app-help" align="center">Having trouble using this App? Dial 484.596.HELP (4357)</p>
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