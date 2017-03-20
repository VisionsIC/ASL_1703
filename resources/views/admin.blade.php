@extends('layouts.auth-admin')
@section('content')
    @parent
    <div class="container">
        <div class="row">
            <div id="main-spread">
                <div class="panel panel-default">
                    <header class="panel-heading" id="panel-title">{{ Auth::admin()->username }}'s RERA Admin Dashboard</header>
                    <div class="panel-body" id="pb-zero">
                        <!-- Main Page Content Goes Here!!-->
                        <div class="form-container">
                            <div class="row">
                                <div class="panel with-nav-tabs panel-primary">
                                    <menu class="panel-heading" id="hdg-one">
                                        <ul class="nav nav-tabs" id="click-tabs">
                                            <li role="presentation" class="active" id="hcpro-li"><a role="tab" href="#dash-home-tab" aria-controls="dashboard home" data-toggle="tab"><i class="fa fa-btn fa-home"></i> User Home</a></li>
                                            <li role="presentation" id="admin-li"><a role="tab" href="#wheelchairs-tab" aria-controls="wheelchairs" data-toggle="tab"><i class="fa fa-btn fa-wheelchair"></i> Wheelchairs</a></li>
                                        </ul>
                                    </menu>
                                    <article class="panel-body" id="pb-one">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="dash-home-tab">
                                                @include('auth.wc-requests-crud')
                                            </div>
                                            <div class="tab-pane fade" id="wheelchairs-tab">
                                                @include('auth.wc-requests-form')
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection