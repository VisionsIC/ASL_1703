<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default" id="user-form-panel">
            <div class="panel-heading" id="form-panel-header"><p>RERA HealthCare Pro Login Form</p></div>
            <div class="panel-body" id="inner-user-pb">
                <form id="hcpro-lf-frm" class="form-horizontal" role="form" method="POST" action="{{ url('user-login') }}">
                    {{ csrf_field() }}
                    <p id="fg-ul-1" class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label for="username" class="label-user col-md-4 control-label">Username</label>
                        <input id="username" type="text" class="input-user form-control" name="username" value="{{ old('username') }}" autofocus>
                        @if ($errors->has('username'))
                            <span class="help-block"><strong>{{ $errors->first('username') }}</strong></span>
                        @endif
                    </p>
                    <p id="fg-ul-2" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="label-user col-md-4 control-label">Password</label>
                        <input id="password" type="password" class="input-user form-control" name="password">
                        @if ($errors->has('password'))
                            <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                        @endif
                    </p>
                    <section id="div-ul-btn">
                        <nav id="fg-ul-3" class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <menu class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </menu>
                            </div>
                        </nav>
                        <nav class="form-group" id="fg-ul-btn">
                            <menu id="hcpro-ul-bg2" class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Login</button>
                                <a class="btn btn-link" href="{{ url('password/reset') }}">
                                    Forgot Password?
                                </a>
                            </menu>
                        </nav>
                    </section>
                </form>
            </div>
            <p id="user-log-help" class="help-desk" align="center">Having trouble logging in? Dial 484.596.HELP (4357)</p>
        </div>
    </div>
</div>