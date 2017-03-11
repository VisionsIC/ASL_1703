<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>RERA Web</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo e(asset('css/ie10-viewport-bug-workaround.css')); ?>" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/home_panel.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/panels.css')); ?>" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo e(asset('js/ie-emulation-modes-warning.js')); ?>"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="rera-body">
<nav class="navbar navbar-default navbar-static-top">
    <div id="hd-contain" class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <div id="logo-holder">

                    <svg id="mlh-logo" height="125" width="125" data-name="mlh-logo" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 170 94">
                        <defs>
                            <style>.cls-1{fill:#8a8b8a;}.cls-2{fill:#1a1918;}.cls-3{fill:#c4d978;}.cls-4{fill:#a2ca56;}
                                .cls-5{fill:#84bf41;}.cls-6{fill:#60c4e5;}.cls-7{fill:#4daf46;}.cls-8{fill:#00b4e0;}
                                .cls-9{fill:#00a765;}.cls-10{fill:#00a049;}.cls-11{fill:#00a3db;}.cls-12{fill:#009b71;}
                                .cls-13{fill:#009949;}
                            </style>
                        </defs>
                        <title>mlh_logo</title>
                        <path class="cls-1" d="M126.31,83.21h0a2.41,2.41,0,1,1,4.81,0h0a2.41,2.41,0,1,1-4.81,0Zm4.53,0h0a2.13,
                                    2.13,0,1,0-4.26,0h0a2.13,2.13,0,1,0,4.26,0Zm-3.07-1.27h1.11c.54,0,
                                    .94.26.94.77a.74.74,0,0,1-.57.75l.65.93h-.57l-.58-.84h-.51v.84h-.47V81.93Zm1.06,
                                    1.22c.32,0,.5-.17.5-.4s-.18-.4-.5-.4h-.6v.8Z"/>

                        <path class="cls-1" d="M35.74,81.7h1.48l3.44,10,3.3-10.05h1.12l3.3,10.05,3.43-10h1.43l-4.3,
            12.11H47.78L44.48,84l-3.32,9.76H40"/>

                        <path class="cls-1" d="M53.32,89.31v0a4.39,4.39,0,0,1,4.26-4.63c2.63,0,4.14,2.1,4.14,4.69a3.52,3.52,
            0,0,1,0,.43h-7a3.1,3.1,0,0,0,3.13,3,3.68,3.68,0,0,0,2.8-1.25l.83.74a4.6,
            4.6,0,0,1-3.66,1.66,4.42,4.42,0,0,1-4.44-4.62m7.06-.52c-.14-1.61-1.06-3-2.84-3a3.06,
            3.06,0,0,0-2.89,3h5.72"/>

                        <path class="cls-1" d="M63.92,81.18h1.32V93.73H63.92Z"/>
                        <path class="cls-1" d="M68.18,81.18h1.32V93.73H68.18Z"/>

                        <path class="cls-1" d="M75.86,91.15v0c0-1.87,1.55-2.87,3.8-2.87a9.35,9.35,0,0,1,
            2.73.38v-.31c0-1.6-1-2.42-2.64-2.42a6.16,6.16,0,0,0-2.7.65l-.39-1.08a7.31,7.31,0,0,1,3.23-.74,
            3.9,3.9,0,0,1,2.87,1,3.51,3.51,0,0,1,.91,2.59v5.43H82.39V92.39a3.89,3.89,0,0,1-3.21,1.53c-1.65,
            0-3.32-.95-3.32-2.77m6.55-.69V89.6a9.23,9.23,0,0,0-2.61-.38c-1.67,0-2.59.72-2.59,1.84v0c0,1.12,
            1,1.77,2.23,1.77,1.64,0,3-1,3-2.41"/>

                        <path class="cls-1" d="M86.06,81.18h1.32v5.21a3.36,3.36,0,0,1,3-1.74,3.25,3.25,0,0,1,3.4,
            3.56v5.52H92.5V88.53A2.36,2.36,0,0,0,90,85.85a2.61,2.61,0,0,0-2.66,2.78v5.09H86.06"/>

                        <path class="cls-1" d="M95.59,89.31v0a4.39,4.39,0,0,1,4.26-4.63c2.63,0,4.14,2.1,4.14,4.69a3.33,
            3.33,0,0,1,0,.43h-7a3.1,3.1,0,0,0,3.13,3,3.68,3.68,0,0,0,2.8-1.25l.83.74A4.6,4.6,0,0,1,100,
            93.93a4.41,4.41,0,0,1-4.43-4.62m7.06-.52c-.14-1.61-1.07-3-2.83-3a3.06,3.06,0,0,0-2.89,3h5.72"/>

                        <path class="cls-1" d="M105.44,91.15v0c0-1.87,1.55-2.87,3.8-2.87a9.39,9.39,0,0,1,
            2.73.38v-.31c0-1.6-1-2.42-2.65-2.42a6.18,6.18,0,0,0-2.7.65l-.39-1.08a7.32,7.32,0,0,1,
            3.23-.74,3.9,3.9,0,0,1,2.87,1,3.51,3.51,0,0,1,.91,2.59v5.43H112V92.39a3.89,3.89,0,0,
            1-3.21,1.53c-1.65,0-3.32-.95-3.32-2.77m6.55-.69V89.6a9.25,9.25,0,0,0-2.61-.38c-1.67,
            0-2.59.72-2.59,1.84v0c0,1.12,1,1.77,2.23,1.77,1.63,0,3-1,3-2.41"/>

                        <path class="cls-1" d="M114.92,89.31v0a4.36,4.36,0,0,1,4.24-4.63,4,4,0,0,1,3.4,
            1.89V81.18h1.32V93.73h-1.32V91.94a4,4,0,0,1-3.4,2,4.33,4.33,0,0,1-4.24-4.61m7.7,
            0v0a3.3,3.3,0,0,0-3.21-3.42,3.13,3.13,0,0,0-3.13,3.42v0a3.21,3.21,0,0,0,3.13,3.44,
            3.32,3.32,0,0,0,3.21-3.44"/>

                        <path class="cls-1" d="M126,91.92h1.58v1.81H126Z"/>

                        <path class="cls-2" d="M.14,55.13H3l4.59,7.13,4.59-7.13H15V70.22H12.32V59.4L7.55,
            66.52H7.47L2.75,59.45V70.22H.14"/>

                        <path class="cls-2" d="M17.18,66.94v0c0-2.46,1.92-3.67,4.7-3.67a9.47,9.47,0,0,1,
            3.06.48v-.28c0-1.61-1-2.48-2.82-2.48a8,8,0,0,0-3.26.71l-.69-2a9.69,9.69,0,0,1,4.29-.93A5.11,
            5.11,0,0,1,26.23,60a4.71,4.71,0,0,1,1.23,3.51v6.75H24.92V68.8a4.63,4.63,0,0,1-3.71,1.66c-2.13,
            0-4-1.23-4-3.51M25,66.13v-.78a7.33,7.33,0,0,0-2.59-.45c-1.68,0-2.67.71-2.67,1.89v0c0,1.1,1,1.72,
            2.22,1.72,1.73,0,3-1,3-2.43"/>

                        <path class="cls-2" d="M30.09,54.62h2.8V57.1h-2.8Zm.11,4.22h2.6V70.22H30.2V58.85Z"/>

                        <path class="cls-2" d="M35.67,58.84h2.61v1.75a4.12,4.12,0,0,1,3.55-2c2.57,0,4.05,1.73,4.05,
            4.36v7.26H43.28V63.75C43.28,62,42.4,61,40.85,61a2.53,2.53,0,0,0-2.56,2.82v6.42H35.67"/>

                        <path class="cls-2" d="M52.45,55.13h2.65V67.8h7.38v2.42h-10"/>

                        <path class="cls-2" d="M64.44,54.62h2.8V57.1h-2.8Zm.11,4.22h2.61V70.22H64.54V58.85Z"/>

                        <path class="cls-2" d="M70,58.84h2.61v1.75a4.13,4.13,0,0,1,3.56-2c2.56,0,4,1.73,4
            4.36v7.26h-2.6V63.75c0-1.76-.89-2.77-2.44-2.77a2.53,2.53,0,0,0-2.57,2.82v6.42H70"/>

                        <path class="cls-2" d="M82.12,64.58v0a5.65,5.65,0,0,1,5.56-5.93c3.62,0,5.45,2.85,5.45,6.13,0,.24,
            0,.47,0,.73H84.74A3.17,3.17,0,0,0,88,68.35,4.14,4.14,0,0,0,91.09,67l1.53,1.36A5.75,5.75,0,0,1,88,
            70.48a5.68,5.68,0,0,1-5.84-5.9m8.42-.84c-.17-1.68-1.16-3-2.89-3S85,62,84.71,63.73h5.83"/>

                        <path class="cls-2" d="M98.93,55.13h2.65V61.4h7.19V55.13h2.66V70.22h-2.66V63.87h-7.19v6.36H98.93"/>

                        <path class="cls-2" d="M113.73,64.58v0a5.65,5.65,0,0,1,5.56-5.93c3.62,0,5.45,2.85,5.45,6.13,0,.24,
            0,.47,0,.73h-8.36a3.17,3.17,0,0,0,3.27,2.89A4.14,4.14,0,0,0,122.69,67l1.54,1.36a5.77,5.77,0,0,1-4.65,
            2.13,5.68,5.68,0,0,1-5.84-5.9m8.43-.84c-.17-1.68-1.16-3-2.89-3a3.07,3.07,0,0,0-2.95,3h5.83"/>

                        <path class="cls-2" d="M126.13,66.94v0c0-2.46,1.91-3.67,4.69-3.67a9.49,9.49,0,0,1,
            3.06.48v-.28c0-1.61-1-2.48-2.82-2.48a7.94,7.94,0,0,0-3.25.71l-.69-2a9.68,9.68,0,0,
            1,4.28-.93A5.1,5.1,0,0,1,135.17,60a4.71,4.71,0,0,1,1.23,3.51v6.75h-2.55V68.8a4.61,
            4.61,0,0,1-3.7,1.66c-2.13,0-4-1.23-4-3.51m7.79-.82v-.78a7.28,7.28,0,0,
            0-2.58-.45c-1.68,0-2.68.71-2.68,1.89v0c0,1.1,1,1.72,2.21,1.72,1.73,0,3-1,3-2.43"/>

                        <path class="cls-2" d="M139.14,54.49h2.6V70.22h-2.6V54.49Z"/>

                        <path class="cls-2" d="M145.14,67.07v-6H143.7V58.84h1.44V55.72h2.61v3.12h3.06v2.24h-3.06v5.58a1.25,
            1.25,0,0,0,1.4,1.42,3.45,3.45,0,0,0,1.61-.39v2.14a4.5,4.5,0,0,1-2.35.58c-1.91,0-3.27-.84-3.27-3.34"/>

                        <path class="cls-2" d="M152.92,54.49h2.62v6.1a4.11,4.11,0,0,1,3.55-2c2.57,0,4.05,1.73,4.05,
            4.36v7.26h-2.61V63.75c0-1.76-.88-2.77-2.43-2.77a2.53,2.53,0,0,0-2.56,2.82v6.42h-2.62"/>

                        <path class="cls-2" d="M163.69,56.87h0a2.86,2.86,0,1,1,5.72,0v0a2.86,2.86,0,1,1-5.72,0Zm5.39,0h0a2.53,
            2.53,0,1,0-5.06,0v0a2.51,2.51,0,0,0,2.53,2.55,2.54,2.54,0,0,0,2.53-2.56Zm-3.65-1.51h1.31c.64,0,1.12.31,
            1.12.92a.88.88,0,0,1-.67.89l.77,1.1h-.68l-.69-1H166v1h-.56V55.34Zm1.27,1.45c.38,
            0,.59-.2.59-.48s-.21-.47-.59-.47H166v1Z"/>

                        <path class="cls-3" d="M95,43.12c0,.23,0-.66,0-.85,0-8.7,8.25-15.78,17-15.78V21.25A22.11,22.11,
            0,0,0,93.2,31.89v0A43.18,43.18,0,0,1,95,42.53c0,.2,0,.39,0,.59"/>

                        <path class="cls-4" d="M87.53,30.42a37.93,37.93,0,0,0-2.6-5,30.59,30.59,0,0,0-3.25,6l0,.08a31.75,
            31.75,0,0,1,2.31,12v.07c0,.1,0,.06,0-.07a25.11,25.11,0,0,1,3.61-12.91l0-.1h0"/>

                        <path class="cls-4" d="M112,16V10.81A34.23,34.23,0,0,0,88.37,21.25l-.07.08a43.28,43.28,0,0,1,
            2.54,4.55h0l.08.17,0,0c5.22-5.66,12.85-9.81,21-10"/>

                        <path class="cls-5" d="M85.07,16.91h0l.14.17.1-.1h0C92.37,10.51,101.82,5.91,112,5.65V.41A45.86,
            45.86,0,0,0,81.81,13.13h0l-.16.16a43,43,0,0,1,3.42,3.62"/>

                        <path class="cls-5" d="M78.37,25.37l.07-.11a38.83,38.83,0,0,1,3.22-4.45l-.09-.11h0a40.94,40.94,
            0,0,0-3.47-3.61,41.92,41.92,0,0,0-3,4.06h0l-.11.18a31.16,31.16,0,0,1,3.32,4l0,.07"/>

                        <path class="cls-5" d="M72.37,26a42.77,42.77,0,0,0-2.23,5.74h0l0,.1h0a20,20,0,0,1,2.83,10.36c0,.26,
            0,.64,0,1v.18a34.05,34.05,0,0,1,2.82-12.88l0,0A27.06,27.06,0,0,0,72.37,26"/>

                        <path class="cls-6" d="M68.3,42.53A43.17,43.17,0,0,1,70.12,31.9h0A22.11,22.11,0,0,0,51.34,21.25v5.24c8.7,
            0,17,7.08,17,15.78,0,.18,0,.35,0,.54V43s0-.25,0-.43"/>

                        <path class="cls-7" d="M70.12,31.91h0A43.18,43.18,0,0,0,68.3,42.53c0,.2,0,.39,0,.59s0,.46,
            0,.69h4.63c0-.51.06-1,.06-1.54a20,20,0,0,0-2.83-10.36"/>

                        <path class="cls-8" d="M72.45,25.87A42.65,42.65,0,0,1,75,21.33l-.07-.07A34.22,34.22,0,0,0,51.34,
            10.81V16c8.16.16,15.78,4.31,21,10l0,0,.08-.17h0"/>

                        <path class="cls-8" d="M79.34,43.44a31.78,31.78,0,0,1,2.31-12l0-.08a30.45,30.45,0,0,0-3.25-6,37.81,
            37.81,0,0,0-2.6,5h0l0,.1a25.11,25.11,0,0,1,3.61,12.91c0,.13,0,.17,0,.07v-.07"/>

                        <path class="cls-9" d="M84,43.44a31.78,31.78,0,0,0-2.31-12,31.74,31.74,0,0,0-2.32,12v.07c0,.1,0,.2,
            0,.3H84c0-.1,0-.2,0-.3v-.07"/>

                        <path class="cls-10" d="M75.77,30.42a37.7,37.7,0,0,1,2.6-5l0-.07a31.38,31.38,0,0,0-3.32-4,42.93,42.93,
            0,0,0-2.55,4.55h0l-.08.17a27,27,0,0,1,3.34,4.44l0,0,0-.1h0"/>

                        <path class="cls-11" d="M81.74,20.69h0l-.09.11a39.57,39.57,0,0,1,3.22,4.45l.07.11,0-.07a31.27,31.27,
            0,0,1,3.32-4l-.11-.18a40.84,40.84,0,0,0-3-4.06,40.77,40.77,0,0,0-3.47,3.61"/>

                        <path class="cls-11" d="M78.23,16.91a42.8,42.8,0,0,1,3.42-3.62l-.16-.16A45.85,45.85,0,0,0,
            51.34.41V5.65C61.49,5.91,70.93,10.51,78,17h0l.1.1.14-.17"/>

                        <path class="cls-11" d="M87.57,30.52A36.12,36.12,0,0,1,90.37,43c0,.07,0-.17,0-.69a20,20,0,0,1,
            2.83-10.36h0s0-.07,0-.1h0A43,43,0,0,0,90.93,26a26.77,26.77,0,0,0-3.34,4.44l0,0"/>

                        <path class="cls-12" d="M90.36,42.27c0,.52,0,1,.06,1.54H95c0-.23,0-.46,0-.69s0-.4,0-.59A43.17,43.17,
            0,0,0,93.19,31.9h0a19.94,19.94,0,0,0-2.83,10.37"/>

                        <path class="cls-12" d="M90.85,25.87a43,43,0,0,0-2.54-4.55,31.42,31.42,0,0,0-3.32,4l0,.07a37.79,
            37.79,0,0,1,2.6,5h0l0,.1,0,0A27.1,27.1,0,0,1,90.93,26l-.08-.17h0"/>

                        <path class="cls-13" d="M81.56,20.69h0l.09.11.09-.11h0a41.07,41.07,0,0,1,3.47-3.61l-.14-.17h0a43.29,
            43.29,0,0,0-3.42-3.62,42.64,42.64,0,0,0-3.42,3.62h0l-.14.17a40.79,40.79,0,0,1,3.47,3.61"/>
                    </svg>
                </div>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->

            <ul id="title-header" class="nav navbar-nav">
                <li class="app-desc"><h5>Rehab Equipment Request Application</h5></li>
                &nbsp;<li class="app-title"><h5>RERA Application 1.0</h5></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <?php if(Auth::guest()): ?>
                    <li><a id="user-reg" href="<?php echo e(url('/')); ?>">RERA Login</a></li>
                <?php else: ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <?php echo e(Auth::user()->username); ?> <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="<?php echo e(url('/user/logout')); ?>"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="<?php echo e(url('/user/logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Page Content Goes Here!!-->

<div class="container">
    <ul class="nav nav-tabs tabs" id="tab-links">
        <li class="active"><a href="#hcpro-login">HealthCare Professional</a></li>
        <li><a href="#admin-login">Administrator</a></li>
    </ul>
</div>
<div class="container">
    <div class="row">
        <div class="panel with-nav-tabs panel-primary">
            <div class="panel-heading">
                <ul class="nav nav-tabs" id="click-tabs">
                    <li class="active" id="hcpro-li"><a href="#hcpro-tab" data-toggle="tab">HealthCare Professional</a></li>
                    <li id="admin-li"><a href="#admin-tab" data-toggle="tab">Administrator</a></li>
                </ul>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="hcpro-tab">
                        <div class="tab-pane active" id="hcpro-login">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel panel-default" id="form-panel">
                                            <div class="panel-heading" id="form-head">RERA HealthCare Professional Registration Form</div>
                                            <div class="panel-body">
                                                <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/user/register')); ?>">
                                                <?php echo e(csrf_field()); ?>


                                                <!-- HealthCare Professional Registration Form Tab Panel-->
                                                    <div id="fg-ur-1" class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                                                        <label for="username" class="col-md-4 control-label">Username</label>

                                                        <div class="col-md-6">
                                                            <input id="username" type="text" class="form-control" name="username" value="<?php echo e(old('username')); ?>" required autofocus>

                                                            <?php if($errors->has('username')): ?>
                                                                <span class="help-block">
                                                                        <strong><?php echo e($errors->first('username')); ?></strong>
                                                                    </span>
                                                            <?php endif; ?>

                                                        </div>
                                                    </div>

                                                    <div id="fg-ur-2" class="form-group<?php echo e($errors->has('firstname') ? ' has-error' : ''); ?>">
                                                        <label for="firstname" class="col-md-4 control-label">First Name</label>

                                                        <div class="col-md-6">
                                                            <input id="firstname" type="text" class="form-control" name="firstname" value="<?php echo e(old('firstname')); ?>" required autofocus>

                                                            <?php if($errors->has('firstname')): ?>
                                                                <span class="help-block">
                                                                        <strong><?php echo e($errors->first('firstname')); ?></strong>
                                                                    </span>
                                                            <?php endif; ?>

                                                        </div>
                                                    </div>

                                                    <div id="fg-ur-3" class="form-group<?php echo e($errors->has('lastname') ? ' has-error' : ''); ?>">
                                                        <label for="lastname" class="col-md-4 control-label">Last Name</label>

                                                        <div class="col-md-6">
                                                            <input id="lastname" type="text" class="form-control" name="lastname" value="<?php echo e(old('lastname')); ?>" required autofocus>

                                                            <?php if($errors->has('lastname')): ?>
                                                                <span class="help-block">
                                                                        <strong><?php echo e($errors->first('lastname')); ?></strong>
                                                                    </span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>

                                                    <div id="fg-ur-4" class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
                                                        <label for="title" class="col-md-4 control-label">Title</label>

                                                        <div class="col-md-6">
                                                            <input id="title" type="text" class="form-control" name="title" value="<?php echo e(old('title')); ?>" required autofocus>

                                                            <?php if($errors->has('title')): ?>
                                                                <span class="help-block">
                                                                        <strong><?php echo e($errors->first('title')); ?></strong>
                                                                    </span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>

                                                    <div id="fg-ur-5" class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                                        <div class="col-md-6">
                                                            <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                                            <?php if($errors->has('email')): ?>
                                                                <span class="help-block">
                                                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                                                    </span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>

                                                    <div id="fg-ur-6" class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                                        <label for="password" class="col-md-4 control-label">Password</label>

                                                        <div class="col-md-6">
                                                            <input id="password" type="password" class="form-control" name="password" required>

                                                            <?php if($errors->has('password')): ?>
                                                                <span class="help-block">
                                                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                                                    </span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>

                                                    <div id="fg-ur-7" class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                                                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                                        <div class="col-md-6">
                                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                                            <?php if($errors->has('password_confirmation')): ?>
                                                                <span class="help-block">
                                                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                                                    </span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>

                                                    <div id="fg-ur-btn" class="form-group">
                                                        <div class="col-md-6 col-md-offset-4">
                                                            <button type="submit" class="btn btn-primary">
                                                                Register
                                                            </button>
                                                        </div>
                                                        <!--End HealthCare Professional Tab Panel -->
                                                    </div>
                                                </form>
                                            </div>
                                            <p class="help-desk" align="center">Having trouble with registration? Dial 484.596.HELP (4357)</p>
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
                                            <div class="panel-heading">RERA Administrator Registration Form</div>
                                            <div class="panel-body">
                                                <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/admin/register')); ?>">
                                                <?php echo e(csrf_field()); ?>

                                                <!-- Administration Registration Form Tab Panel-->
                                                    <div id="fg-ar-1" class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                                                        <label for="username" class="col-md-4 control-label">Username</label>

                                                        <div class="col-md-6">
                                                            <input id="username" type="text" class="form-control" name="username" value="<?php echo e(old('username')); ?>" required autofocus>

                                                            <?php if($errors->has('username')): ?>
                                                                <span class="help-block">
                                                                        <strong><?php echo e($errors->first('username')); ?></strong>
                                                                    </span>
                                                            <?php endif; ?>

                                                        </div>
                                                    </div>

                                                    <div id="fg-ar-2" class="form-group<?php echo e($errors->has('firstname') ? ' has-error' : ''); ?>">
                                                        <label for="firstname" class="col-md-4 control-label">First Name</label>

                                                        <div class="col-md-6">
                                                            <input id="firstname" type="text" class="form-control" name="firstname" value="<?php echo e(old('firstname')); ?>" required autofocus>

                                                            <?php if($errors->has('firstname')): ?>
                                                                <span class="help-block">
                                                                        <strong><?php echo e($errors->first('firstname')); ?></strong>
                                                                    </span>
                                                            <?php endif; ?>

                                                        </div>
                                                    </div>

                                                    <div id="fg-ar-3" class="form-group<?php echo e($errors->has('lastname') ? ' has-error' : ''); ?>">
                                                        <label for="lastname" class="col-md-4 control-label">Last Name</label>

                                                        <div class="col-md-6">
                                                            <input id="lastname" type="text" class="form-control" name="lastname" value="<?php echo e(old('lastname')); ?>" required autofocus>

                                                            <?php if($errors->has('lastname')): ?>
                                                                <span class="help-block">
                                                                        <strong><?php echo e($errors->first('lastname')); ?></strong>
                                                                    </span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>

                                                    <div id="fg-ar-4" class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
                                                        <label for="title" class="col-md-4 control-label">Title</label>

                                                        <div class="col-md-6">
                                                            <input id="title" type="text" class="form-control" name="title" value="<?php echo e(old('title')); ?>" required autofocus>

                                                            <?php if($errors->has('title')): ?>
                                                                <span class="help-block">
                                                                        <strong><?php echo e($errors->first('title')); ?></strong>
                                                                    </span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>

                                                    <div id="fg-ar-5" class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                                        <div class="col-md-6">
                                                            <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                                            <?php if($errors->has('email')): ?>
                                                                <span class="help-block">
                                                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                                                    </span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>

                                                    <div id="fg-ar-6" class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                                        <label for="password" class="col-md-4 control-label">Password</label>

                                                        <div class="col-md-6">
                                                            <input id="password" type="password" class="form-control" name="password" required>

                                                            <?php if($errors->has('password')): ?>
                                                                <span class="help-block">
                                                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                                                    </span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>

                                                    <div id="fg-ar-7" class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                                                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                                        <div class="col-md-6">
                                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                                            <?php if($errors->has('password_confirmation')): ?>
                                                                <span class="help-block">
                                                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                                                    </span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>

                                                    <div id="fg-ar-btn" class="form-group">
                                                        <div class="col-md-6 col-md-offset-4">
                                                            <button type="submit" class="btn btn-primary">
                                                                Register
                                                            </button>
                                                        </div>
                                                        <!--End Administrator Tab Panel -->
                                                    </div>
                                                </form>
                                            </div>
                                            <p class="help-desk" id="register-help" align="center">Having trouble with registration? Dial 484.596.HELP (4357)</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <p class="company-info" align="center">2016 | Main Line Health | For now ... as a ASL course project</p>
            </footer>
        </div>
    </div>
</div>
<!-- Application script file -->
<script src="<?php echo e(asset('js/app.js')); ?>"></script>

<!-- Custom script file -->
<script src="<?php echo e(asset('js/tabs.js')); ?>"></script>

<!-- Scripts -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo e(asset('js/ie10-viewport-bug-workaround.js')); ?>"></script>

</body>
</html>