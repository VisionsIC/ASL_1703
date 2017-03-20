 <div class="container">
     <div class="row">
         <div class="col-md-8 col-md-offset-2">
             <div class="panel panel-default" id="form-panel">
                 <div id="form-panel-header" class="panel-heading"><p>RERA HealthCare Pro Registration Form</p></div>
                 <div class="panel-body" id="hcpro-pb">
                     <form class="form-horizontal" id="hcpro-ur-frm" role="form" method="POST" action="{{ url('user-register') }}">
                     {{ csrf_field() }}
                     <!-- HealthCare Professional Registration Form Tab Panel-->
                         <p id="fg-ur-1" class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                             <label for="username" class="col-md-4 control-label">Username</label>
                             <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                             @if ($errors->has('username'))
                                 <span class="help-block"><strong>{{ $errors->first('username') }}</strong></span>
                             @endif
                         </p>
                         <p id="fg-ur-2" class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                             <label for="sex" class="col-md-4 control-label">Gender</label>
                             <select id="sex" class="form-control" name="sex">
                                 <option value="1">Male</option>
                                 <option value="0">Female</option>
                             </select>
                         </p>
                         <p id="fg-ur-3" class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                             <label for="firstname" class="col-md-4 control-label">First Name</label>
                             <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>
                             @if ($errors->has('firstname'))
                                 <span class="help-block"><strong>{{ $errors->first('firstname') }}</strong></span>
                             @endif
                         </p>
                         <p id="fg-ur-4" class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                             <label for="lastname" class="col-md-4 control-label">Last Name</label>
                             <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>
                             @if ($errors->has('lastname'))
                                 <span class="help-block"><strong>{{ $errors->first('lastname') }}</strong></span>
                             @endif
                         </p>
                         <p id="fg-ur-5" class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                             <label for="title" class="col-md-4 control-label">Title</label>
                             <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>
                             @if ($errors->has('title'))
                                 <span class="help-block"><strong>{{ $errors->first('title') }}</strong></span>
                             @endif
                         </p>
                         <p id="fg-ur-6" class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                             <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                             <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                             @if ($errors->has('email'))
                                 <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                             @endif
                         </p>
                         <p id="fg-ur-7" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                             <label for="password" class="col-md-4 control-label">Password</label>
                             <input id="password" type="password" class="form-control" name="password" required>
                             @if ($errors->has('password'))
                                 <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                             @endif
                         </p>
                         <p id="fg-ur-8" class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                             <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                             <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                             @if ($errors->has('password_confirmation'))
                                 <span class="help-block"><strong>{{ $errors->first('password_confirmation') }}</strong></span>
                             @endif
                         </p>
                         <nav id="fg-ur-btn" class="form-group">
                             <menu id="hcpro-btn-menu" class="col-md-6 col-md-offset-4">
                                 <button type="submit" class="btn btn-primary">Register</button>
                             </menu>
                         </nav><!--End HealthCare Professional Tab Panel -->
                     </form>
                 </div>
                 <p class="help-desk" id="user-reg-help" align="center">Having trouble with registration? Dial 484.596.HELP (4357)</p>
             </div>
         </div>
     </div>
 </div>