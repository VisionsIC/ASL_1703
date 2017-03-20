@extends('layouts.auth-home')
@section('content')
    @parent
<article class="container">
    <section class="row">
        <div class="col-md-8 col-md-offset-2">
            <section class="pw-reset-panel panel panel-default">
                <header id="reset-pass-header" class="pw-reset-heading panel-heading">HealthCare Pro Password Reset Form</header>
                <fieldset class="pw-reset-body panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/user/password/reset') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="token" value="{{ $token }}">
                        <p class="fg-user-reset form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="email-label col-md-4 control-label">E-Mail Address</label>
                            <input id="email" type="email" class="email-input form-control" name="email" value="{{ $email or old('email') }}" autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                                @endif
                        </p>
                        <p class="fg-user-reset form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <input id="password" type="password" class="form-control" name="password">
                                @if ($errors->has('password'))
                                    <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                                @endif
                        </p>
                        <p class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block"><strong>{{ $errors->first('password_confirmation') }}</strong></span>
                                @endif
                        </p>
                        <nav class="form-group">
                            <menu class="col-md-6 col-md-offset-4">
                                <button type="submit" id="reset-password-button" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </menu>
                        </nav>
                    </form>
                </fieldset>
            </section>
        </div>
    </section>
</article>
@endsection
