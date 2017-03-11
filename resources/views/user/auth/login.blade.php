@section('content-hcpro')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">RERA HealthCare Professional Login Form</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/user/login') }}">
                        {{ csrf_field() }}
                        <div id="fg-ul-1" class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label id="label-user-username" for="username" class="col-md-4 control-label">Username</label>
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" autofocus>
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                        <div id="fg-ul-2" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label id="label-user-pw" for="password" class="col-md-4 control-label">Password</label>
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
                                </div><!-- End .Checkbox div -->
                            </div><!-- End .col-md-6 .col-md-offset-4 div -->
                        </div><!-- End .form-group div -->
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <a class="btn btn-link" href="{{ url('/user/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div><!-- End .col-md-8 .col-md-offset-4 div -->
                        </div><!-- End .form-group div -->
                    </form><!-- End form Element -->
                </div><!-- End .panel-body div -->
                <p class="help-desk" id="login-help" align="center">Having trouble with login? Dial 484.596.HELP (4357)</p>
            </div>
        </div>
    </div>
</div>
@endsection
