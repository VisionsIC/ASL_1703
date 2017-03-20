<!DOCTYPE html>
<html lang="en">
@include('partials.head')
@include('partials.login-nav')
<body id="rera-body">
    <!-- Main Page Content Goes Here!!-->
    <div id="main-user-container" class="container">
        <ul class="nav nav-tabs tabs" id="tab-links">
            <li class="active"><a href="#hcpro-login">HealthCare Professional</a></li>
            <li><a href="#admin-login">Administrator</a></li>
        </ul>
    </div>
    <div id="inner-user-container" class="container">
        <div class="panel with-nav-tabs panel-primary">
            <div class="panel-heading">
                <ul class="nav nav-tabs" id="click-tabs">
                    <li class="active" id="hcpro-li"><a href="#hcpro-tab" data-toggle="tab"><i class="fa fa-btn fa-plus-square"></i> HealthCare Pro</a></li>
                    <li id="admin-li"><a href="#admin-tab" data-toggle="tab"><i class="fa fa-btn fa-cog"></i> Administrator</a></li>
                </ul>
            </div>
            <div class="panel-body" id="user-panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="hcpro-tab">
                        <div class="tab-pane active" id="hcpro-login">
                          @include('auth.user-login')
                        </div>
                    </div>
                    <div class="tab-pane fade" id="admin-tab">
                        <div class="tab-pane" id="admin-login">
                          @include('auth.admin-login')
                        </div>
                    </div>
                </div>
            </div>
            @include('partials.register-footer')
        </div>
    </div>
@include('partials.scripts')
</body>
</html>
