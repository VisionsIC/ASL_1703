@extends('layouts.auth-home')
<!-- Main Content -->
@section('content')
<article class="container">
    <section class="row">
        <div class="col-md-8 col-md-offset-2">
            <section id="reset-pass-panel" class="panel panel-default">
                <header id="reset-pass-header" class="panel-heading"><p>Reset Password</p></header>
                <fieldset id="reset-pass-body" class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/user/password/email') }}">
                        {{ csrf_field() }}
                        <p id="email-address" class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </p>
                        <nav class="form-group">
                            <menu class="col-md-6 col-md-offset-4">
                                <button type="submit" id="email-reset-button" class="btn btn-primary">
                                    Send Password Reset Link
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
