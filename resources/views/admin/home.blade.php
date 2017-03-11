@extends('admin.layout.auth')

@section('admin-content')
    <div class="container">
        <div class="row">
            <div id="main-spread">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ Auth::admin()->username }}'s RERA Administrator Dashboard</div>

                    <div class="panel-body" id="pb-zero">
                        {{ Auth::admin()->username }}: You are logged in with Administrator RERA Credentials!
                        <!-- Main Page Content Goes Here!!-->

                        <div class="container">
                            <ul class="nav nav-tabs tabs" id="tab-links">
                                <li class="active"><a href="#hcpro-login">Dashboard Home</a></li>
                                <li><a href="#admin-login">Patients</a></li>
                            </ul>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="panel with-nav-tabs panel-primary">
                                    <div class="panel-heading" id="hdg-one">
                                        <ul class="nav nav-tabs" id="click-tabs">
                                            <li class="active" id="hcpro-li"><a href="#hcpro-tab" data-toggle="tab">Dashboard Home</a></li>
                                            <li id="admin-li"><a href="#admin-tab" data-toggle="tab">Patients</a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body" id="pb-one">
                                        <div class="tab-content">
                                            <div class="tab-pane fade active" id="hcpro-tab">
                                                <div class="tab-pane active" id="hcpro-login">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-8 col-md-offset-2">
                                                                <div class="panel panel-default" id="form-panel">
                                                                    <div class="panel-heading" id="form-head">Current Wheelchair Requests</div>
                                                                    <div class="panel-body" id="pb_inside" >
                                                                        <table>
                                                                            <tr>
                                                                                <th>Patient</th>
                                                                                <th>Therapist</th>
                                                                                <th>Unit</th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Alfred Futterkiste</td>
                                                                                <td>Maria Anders</td>
                                                                                <td>Spruce</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Bob Crabapple</td>
                                                                                <td>Francisco Chang</td>
                                                                                <td>Maple</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Ernst Handel</td>
                                                                                <td>Roland Green</td>
                                                                                <td>Oak</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Iris Treadwell</td>
                                                                                <td>Helen Bennett</td>
                                                                                <td>Birch</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Bernie Murphy</td>
                                                                                <td>Yoshi Tannamuri</td>
                                                                                <td>Oak</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Magazzini Riuniti</td>
                                                                                <td>Giovanni Rovelli</td>
                                                                                <td>Spruce</td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <p class="help-desk" align="center">Having trouble logging in? Dial 484.596.HELP (4357)</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="admin-tab">
                                                <div class="tab-pane" id="admin-login">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-8 col-md-offset-2">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">RERA Wheelchair Form</div>
                                                                    <div class="panel-body">
                                                                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
                                                                            {{ csrf_field() }}

                                                                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                                                                <label for="username" class="col-md-4 control-label">Username</label>

                                                                                <div class="col-md-6">
                                                                                    <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" autofocus>

                                                                                    @if ($errors->has('username'))
                                                                                        <span class="help-block">
                                                                                <strong>{{ $errors->first('username') }}</strong>
                                                                            </span>
                                                                                    @endif
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                                                <label for="password" class="col-md-4 control-label">Password</label>

                                                                                <div class="col-md-6">
                                                                                    <input id="password" type="password" class="form-control" name="password">

                                                                                    @if ($errors->has('password'))
                                                                                        <span class="help-block">
                                                                                <strong>{{ $errors->first('password') }}</strong>
                                                                            </span>
                                                                                    @endif
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <div class="col-md-6 col-md-offset-4">
                                                                                    <div class="checkbox">
                                                                                        <label>
                                                                                            <input type="checkbox" name="remember"> Remember Me
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <div class="col-md-8 col-md-offset-4">
                                                                                    <button type="submit" class="btn btn-primary">
                                                                                        Login
                                                                                    </button>

                                                                                    <a class="btn btn-link" href="{{ url('/user/password/reset') }}">
                                                                                        Forgot Your Password?
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <p class="help-desk" align="center">Having trouble logging in? Dial 484.596.HELP (4357)</p>
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