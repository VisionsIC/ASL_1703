<?php $__env->startSection('content'); ?>
    @parent
    <div class="container">
        <div class="row">
            <div id="main-spread">
                <div class="panel panel-default">
                    <header class="panel-heading" id="panel-title"><?php echo e(Auth::user()->username); ?>'s RERA Dashboard</header>
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
                                                <?php echo $__env->make('user.auth.wcrequestscrud', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                            </div>
                                            <div class="tab-pane fade" id="wheelchairs-tab">
                                                <?php echo $__env->make('user.auth.wcrequestsform', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
    <script src="<?php echo e(asset('js/jquery-3.1.1.js')); ?>"></script>
    <script type="text/javascript">
        // This block of JQuery code addresses SELECT tag group #2.
        $(document).ready(function() {
            $(document).on('change', '.units', function () {
                var unit_id = $(this).val();
                var p_tag = $(this).parent().parent();
                var opt_tag = " ";
                $.ajax({
                    type: 'get',
                    url: '<?php echo URL::to('findPatientName'); ?>',
                    data: {'id': unit_id},
                    success: function (data) {
                        console.log('success');
                        console.log(data);
                        console.log(data.length);
                        opt_tag += '<option value="0" selected>Select Patient</option>';
                        for (var i = 0; i < data.length; i++) {
                            opt_tag += '<option value="' + data[i].id + '">' + data[i].patient_name + '</option>';
                        }
                        p_tag.find('.patient_name').html(" ");
                        p_tag.find('.patient_name').append(opt_tag);
                        console.log('it has passed here');
                    },
                    error: function () {
                        console.log('and it also passed here');
                    }
                });
            });
            // This block of JQuery code addresses SELECT tag group #3.
            $(document).on('change', '.patient_name', function () {
                var patient_id = $(this).val();
                var p_tag = $(this).parent().parent();
                var opt_tag = " ";
                $.ajax({
                    type: 'get',
                    url: '<?php echo URL::to('findRoom'); ?>',
                    data: {'id':patient_id},
                    success: function (data) {
                        console.log('success');
                        console.log(data);
                        console.log(data.length);
                        opt_tag += '<option value="0" selected disabled>Select Room</option>';
                        for (var i = 0; i < data.length; i++) {
                            opt_tag += '<option value="' + data[i].id + '">' + data[i].room + '</option>';
                        }
                        p_tag.find('.room').html(" ");
                        p_tag.find('.room').append(opt_tag);
                    },
                    error: function () {
                    }
                });
            });
            // This block of JQuery code addresses SELECT tag group #4.
            $(document).on('change', '.room', function () {
                var gender_id = $(this).val();
                var p_tag = $(this).parent().parent();
                var opt_tag = " ";
                $.ajax({
                    type: 'get',
                    url: '<?php echo URL::to('findGender'); ?>',
                    data: {'id': gender_id},
                    success: function (data) {
                        console.log('success');
                        console.log(data);
                        console.log(data.length);
                        opt_tag += '<option value="0" selected disabled>Select Gender</option>';
                        for (var i = 0; i < data.length; i++) {
                            opt_tag += '<option value="' + data[i].id + '">' + data[i].gender + '</option>';
                        }
                        p_tag.find('.gender').html(" ");
                        p_tag.find('.gender').append(opt_tag);
                    },
                    error: function () {
                    }
                });
            });
            // This block of JQuery code addresses SELECT tag group #5.
            $(document).on('change', '.gender', function () {
                var diagnosis_id = $(this).val();
                var p_tag = $(this).parent().parent().parent();
                var opt_tag = " ";
                $.ajax({
                    type: 'get',
                    url: '<?php echo URL::to('findDiagnosis'); ?>',
                    data: {'id': diagnosis_id},
                    success: function (data) {
                        console.log('success');
                        console.log(data);
                        console.log(data.length);
                        opt_tag += '<option value="0" selected disabled>Select Diagnosis</option>';
                        for (var i = 0; i < data.length; i++) {
                            opt_tag += '<option value="' + data[i].id + '">' + data[i].diagnosis_abbreviation + '</option>';
                        }
                        p_tag.find('.diagnosis_abbreviation').html(" ");
                        p_tag.find('.diagnosis_abbreviation').append(opt_tag);
                    },
                    error: function () {
                    }
                });
            });
            // This block of JQuery code addresses SELECT tag group #7.
            $(document).on('change', '.therapist_title', function () {
                var name_id = $(this).val();
                var p_tag = $(this).parent().parent();
                var opt_tag = " ";
                $.ajax({
                    type: 'get',
                    url: '<?php echo URL::to('findTherapistNames'); ?>',
                    data: {'id': name_id},
                    success: function (data) {
                        console.log('success');
                        console.log(data);
                        console.log(data.length);
                        opt_tag += '<option value="0" selected disabled>Select Therapist Name</option>';
                        for (var i = 0; i < data.length; i++) {
                            opt_tag += '<option value="' + data[i].id + '">' + data[i].therapist_names + '</option>';
                        }
                        p_tag.find('.therapist_names').html(" ");
                        p_tag.find('.therapist_names').append(opt_tag);
                    },
                    error: function () {
                    }
                });
            });
            // This block of JQuery code addresses SELECT tag group #9.
            $(document).on('change', '.wc_types', function () {
                var wc_brand_id = $(this).val();
                var p_tag = $(this).parent().parent().parent();
                var opt_tag = " ";
                $.ajax({
                    type: 'get',
                    url: '<?php echo URL::to('findInpatientWcModels'); ?>',
                    data: {'id': wc_brand_id},
                    success: function (data) {
                        console.log('success');
                        console.log(data);
                        console.log(data.length);
                        opt_tag += '<option value="0" selected disabled>Select Wheelchair Model</option>';
                        for (var i = 0; i < data.length; i++) {
                            opt_tag += '<option value="' + data[i].id + '">' + data[i].inpatient_wc_model + '</option>';
                        }
                        p_tag.find('.inpatient_wc_model').html(" ");
                        p_tag.find('.inpatient_wc_model').append(opt_tag);
                    },
                    error: function () {
                    }
                });
            });
            // This block of JQuery code addresses SELECT tag group #10.
            $(document).on('change', '.inpatient_wc_model', function () {
                var wc_model_id = $(this).val();
                var p_tag = $(this).parent().parent();
                var opt_tag = " ";
                $.ajax({
                    type: 'get',
                    url: '<?php echo URL::to('findInpatientWcBrands'); ?>',
                    data: {'id': wc_model_id},
                    success: function (data) {
                        console.log('success');
                        console.log(data);
                        console.log(data.length);
                        opt_tag += '<option value="0" selected disabled>Select Wheelchair Brand</option>';
                        for (var i = 0; i < data.length; i++) {
                            opt_tag += '<option value="' + data[i].id + '">' + data[i].inpatient_wc_brand + '</option>';
                        }
                        p_tag.find('.inpatient_wc_brand').html(" ");
                        p_tag.find('.inpatient_wc_brand').append(opt_tag);
                    },
                    error: function () {
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>