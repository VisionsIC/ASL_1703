<script src="{{ asset('js/jquery-3.1.1.js') }}"></script>
<!-- Application script file -->
<script src="{{ asset('js/jquery-3.1.1.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/tabs.js') }}"></script>
<!-- Scripts -->
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // This block of JQuery code addresses SELECT tag group #2.
    $(document).ready(function() {
        $(document).on('change', '.units', function () {
            var unit_id = $(this).val();
            var p_tag = $(this).parent().parent();
            var opt_tag = " ";
            $.ajax({
                datatype : "application/json",
                contentType: "text/plain",
                type: 'get',
                url: '{!!URL::to('findPatientName')!!}',
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
                datatype : "application/json",
                contentType: "text/plain",
                type: 'get',
                url: '{!!URL::to('findRoom')!!}',
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
                datatype : "application/json",
                contentType: "text/plain",
                type: 'get',
                url: '{!!URL::to('findGender')!!}',
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
                datatype : "application/json",
                contentType: "text/plain",
                type: 'get',
                url: '{!!URL::to('findDiagnosis')!!}',
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
                datatype : "application/json",
                contentType: "text/plain",
                type: 'get',
                url: '{!!URL::to('findTherapistNames')!!}',
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
                datatype : "application/json",
                contentType: "text/plain",
                type: 'get',
                url: '{!!URL::to('findInpatientWcModels')!!}',
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
                datatype : "application/json",
                contentType: "text/plain",
                type: 'get',
                url: '{!!URL::to('findInpatientWcBrands')!!}',
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
            $('#submit-request').submit(function () {
                var hospitalUnit = $('#hospital-unit').contents();
                var patientName = $('#patient-name').contents();
                var roomNumber = $('#room-number').contents();
                var genderType = $('#gender-type').contents();
                var diagnosisType = $('#diagnosis-type').contents();
                var therapistTitle = $('#therapist-title').contents();
                var therapistName = $('#therapist-name').contents();
                var wcType = $('#wc-type').contents();
                var wcModel = $('#wc-model').contents();
                var wcBrand = $('#wc-brand').contents();
                var wcDimensions = $('#wc-dimensions').contents();
                var wcHeight = $('#wc-height').contents();
                var wcBack = $('#wc-back').contents();
                var cushionType = $('#cushion-type').contents();
                var cushionDimensions = $('#cushion-dimensions').contents();
                var armrestType = $('#armrest-type').contents();
                $.post('wheelchairs', {
                    unit: hospitalUnit,
                    patient_name: patientName,
                    room: roomNumber,
                    gender: genderType,
                    diagnosis_abbreviation: diagnosisType,
                    title_abbreviation: therapistTitle,
                    therapist_names: therapistName,
                    wc_type: wcType,
                    inpatient_wc_model: wcModel,
                    inpatient_wc_brand: wcBrand,
                    wc_dimensions: wcDimensions,
                    wc_height: wcHeight,
                    wc_back_type: wcBack,
                    cushion_type: cushionType,
                    cushion_dimensions: cushionDimensions,
                    armrest_type: armrestType},
                    function (data) {
                    console.log(data);


                });
            });
        });

    });
</script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<!-- Scripts -->