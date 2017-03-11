<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 5.3 Dynamic Dropdown with AJAX</title>
</head>
<body style="width: 900px; margin: 0 auto">
<div style="width: 900px; margin: 50px auto; align-self: center">
<h2 style="width: 500px; margin: 50px auto; text-align: center">Laravel 5.3 Dynamic Dropdown w/ AJAX</h2>
<!-- Form Select #1 : Unit -->
<span>Units: </span>
<select style="width: 200px" class="units" id="unit_id">
    <option value="0" disabled selected>Select A Unit</option>
    @foreach($units as $unit)
        <option value="{{$unit->id}}">{{$unit->unit}}</option>
    @endforeach
</select>
<!-- Form Select #2 : Patient Name (JQuery Control) -->
<span>Patient Name: </span>
<select style="width: 200px" class="patient_name">
    <option value="0" disabled selected>Select Patient</option>
</select>
<!-- Form Select #3 : Room (JQuery Control) -->
<span>Room: </span>
<select style="width: 200px" class="room">
    <option value="0" disabled selected>Select Room</option>
</select>
<!-- Form Select #4 : Gender (JQuery Control) -->
<span>Gender: </span>
<select style="width: 200px" class="gender">
    <option value="0" disabled selected>Select Gender</option>
</select>
<!-- Form Select #5 : Diagnosis (JQuery Control) -->
<span>Diagnosis: </span>
<select style="width: 200px" class="diagnosis_abbreviation">
    <option value="0" disabled selected>Select Diagnosis</option>
</select>
<!-- Form Select #6 : Therapist Title -->
<span>Therapist Title: </span>
<select style="width: 200px" class="therapist_title">
    <option value="0" disabled selected>Select Therapist Title</option>
    @foreach($therapist_title as $title)
        <option value="{{$title->id}}">{{$title->title_abbreviation}}</option>
    @endforeach
</select>
<!-- Form Select #7 : Therapist Name (JQuery Control) -->
<span>Therapist Name: </span>
<select style="width: 200px" class="therapist_names">
    <option value="0" disabled selected>Select Therapist Name</option>
</select>
<!-- Form Select #8 : Wheelchair Type -->
<span>Wheelchair Type: </span>
<select style="width: 200px" class="wc_types">
    <option value="0" disabled selected>Select Wheelchair Type</option>
    @foreach($wc_types as $wc_type)
        <option value="{{$wc_type->id}}">{{$wc_type->wc_type}}</option>
    @endforeach
</select>
<!-- Form Select #9 : Wheelchair Model (JQuery Control) -->
<span>Wheelchair Model: </span>
<select style="width: 200px" class="inpatient_wc_model">
    <option value="0" disabled selected>Select Wheelchair Model</option>
</select>
<!-- Form Select #10 : Wheelchair Brand (JQuery Control) -->
<span>Wheelchair Brand: </span>
<select style="width: 200px" class="inpatient_wc_brand">
    <option value="0" disabled selected>Select Wheelchair Brand</option>
</select>
<!-- Form Select #11 : Wheelchair Dimensions -->
<span>Wheelchair Dimensions: </span>
<select style="width: 200px" class="wc_dimensions">
   <option value="0" disabled selected>Select Wheelchair Dimensions</option>
   @foreach($wc_dimensions as $wc_dems)
       <option value="{{$wc_dems->id}}">{{$wc_dems->wc_dimensions}}</option>
   @endforeach
</select>
<!-- Form Select #12 : Wheelchair Height -->
<span>Wheelchair Height: </span>
<select style="width: 200px" class="wc_heights">
    <option value="0" disabled selected>Select Wheelchair Height</option>
    @foreach($wc_heights as $wc_height)
        <option value="{{$wc_height->id}}">{{$wc_height->wc_height}}</option>
    @endforeach
</select>
<!-- Form Select #13 : Wheelchair Back -->
<span>Wheelchair Back: </span>
<select style="width: 200px" class="wc_back_type">
    <option value="0" disabled selected>Select Wheelchair Back</option>
    @foreach($wc_back_type as $wc_back)
        <option value="{{$wc_back->id}}">{{$wc_back->wc_back_type}}</option>
    @endforeach
</select>
<!-- Form Select #14 : Cushion Type -->
<span>Cushion Type: </span>
<select style="width: 200px" class="cushion_type">
    <option value="0" disabled selected>Select Cushion Type</option>
    @foreach($cushion_types as $cushion_type)
        <option value="{{$cushion_type->id}}">{{$cushion_type->cushion_type}}</option>
    @endforeach
</select>
<!-- Form Select #15 : Cushion Dimensions -->
<span>Cushion Dimensions: </span>
<select style="width: 200px" class="cushion_dimensions">
    <option value="0" disabled selected>Select Cushion Type</option>
    @foreach($cushion_dimensions as $cushion_dem)
        <option value="{{$cushion_dem->id}}">{{$cushion_dem->cushion_dimensions}}</option>
    @endforeach
</select>
<!-- Form Select #16 : Cushion Type -->
<span>Armrest Type: </span>
<select style="width: 200px" class="armrest_type">
    <option value="0" disabled selected>Select Armrest Type</option>
    @foreach($armrest_types as $armrest_type)
        <option value="{{$armrest_type->id}}">{{$armrest_type->armrest_type}}</option>
    @endforeach
</select>
</div>
<script src="{{ asset('js/jquery-3.1.1.js') }}"></script>
<script type="text/javascript">
    // This block of JQuery code addresses SELECT tag group #2.
    $(document).ready(function() {
        $(document).on('change', '.units', function () {
            var unit_id = $(this).val();
            var div = $(this).parent();
            var opt_tag = " ";
            $.ajax({
                type: 'get',
                url: '{!!URL::to('findPatientName')!!}',
                data: {'id': unit_id},
                success: function (data) {
                    console.log('success');
                    console.log(data);
                    console.log(data.length);
                    opt_tag += '<option value="0" selected disabled>Select Patient</option>';
                    for (var i = 0; i < data.length; i++) {
                        opt_tag += '<option value="' + data[i].id + '">' + data[i].patient_name + '</option>';
                    }
                    div.find('.patient_name').html(" ");
                    div.find('.patient_name').append(opt_tag);
                },
                error: function () {
                }
            });
        });
        // This block of JQuery code addresses SELECT tag group #3.
        $(document).on('change', '.patient_name', function () {
            var patient_id = $(this).val();
            var div = $(this).parent();
            var opt_tag = " ";
            $.ajax({
                type: 'get',
                url: '{!!URL::to('findRoom')!!}',
                data: {'id': patient_id},
                success: function (data) {
                    console.log('success');
                    console.log(data);
                    console.log(data.length);
                    opt_tag += '<option value="0" selected disabled>Select Room</option>';
                    for (var i = 0; i < data.length; i++) {
                        opt_tag += '<option value="' + data[i].id + '">' + data[i].room + '</option>';
                    }
                    div.find('.room').html(" ");
                    div.find('.room').append(opt_tag);
                },
                error: function () {
                }
            });
        });
        // This block of JQuery code addresses SELECT tag group #4.
        $(document).on('change', '.room', function () {
            var gender_id = $(this).val();
            var div = $(this).parent();
            var opt_tag = " ";
            $.ajax({
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
                    div.find('.gender').html(" ");
                    div.find('.gender').append(opt_tag);
                },
                error: function () {
                }
            });
        });
        // This block of JQuery code addresses SELECT tag group #5.
        $(document).on('change', '.gender', function () {
            var diagnosis_id = $(this).val();
            var div = $(this).parent();
            var opt_tag = " ";
            $.ajax({
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
                    div.find('.diagnosis_abbreviation').html(" ");
                    div.find('.diagnosis_abbreviation').append(opt_tag);
                },
                error: function () {
                }
            });
        });
        // This block of JQuery code addresses SELECT tag group #7.
        $(document).on('change', '.therapist_title', function () {
            var name_id = $(this).val();
            var div = $(this).parent();
            var opt_tag = " ";
            $.ajax({
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
                    div.find('.therapist_names').html(" ");
                    div.find('.therapist_names').append(opt_tag);
                },
                error: function () {
                }
            });
        });
        // This block of JQuery code addresses SELECT tag group #9.
        $(document).on('change', '.wc_types', function () {
            var wc_brand_id = $(this).val();
            var div = $(this).parent();
            var opt_tag = " ";
            $.ajax({
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
                    div.find('.inpatient_wc_model').html(" ");
                    div.find('.inpatient_wc_model').append(opt_tag);
                },
                error: function () {
                }
            });
        });
        // This block of JQuery code addresses SELECT tag group #10.
        $(document).on('change', '.inpatient_wc_model', function () {
            var wc_model_id = $(this).val();
            var div = $(this).parent();
            var opt_tag = " ";
            $.ajax({
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
                    div.find('.inpatient_wc_brand').html(" ");
                    div.find('.inpatient_wc_brand').append(opt_tag);
                },
                error: function () {
                }
            });
        });
    });
</script>
</body>
</html>
