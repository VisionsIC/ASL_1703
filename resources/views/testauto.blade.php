<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 5.3 AutoComplete with AJAX</title>
</head>
<body style="width: 900px; margin: 0 auto">
<div style="width: 900px; margin: 50px auto; align-self: center">
<h2 style="width: 500px; margin: 50px auto; text-align: center">Laravel 5.3 AutoComplete w/ AJAX</h2>
<!-- Form Input #1 : Unit -->
<label for="unit_id">Unit: </label>
<input style="width: 200px" type="text" name="unit" class="form-control" id="unit_id" placeholder="Type Unit Info Here">
<!-- Form Input #2 : Patient -->
<label for="patient_id">Patient: </label>
<input style="width: 200px" type="text" name="patient" class="form-control" id="patient_id" placeholder="Type Patient Info Here">
<!-- Form Input #3 : Room -->
<label for="room_id">Room: </label>
<input style="width: 200px" type="text" name="room" class="form-control" id="room_id" placeholder="Type Room Info Here">
<!-- Form Input #4 : Gender -->
<label for="gender_id">Gender: </label>
<input style="width: 200px" type="text" name="gender" class="form-control" id="gender_id" placeholder="Type Gender Info Here">
<!-- Form Input #5 : Diagnosis -->
<label for="diagnosis_id">Diagnosis: </label>
<input style="width: 200px" type="text" name="diagnosis" class="form-control" id="diagnosis_id" placeholder="Type Diagnosis Info Here">
<!-- Form Input #6 : Therapist Title -->
<label for="therapist_title_id">Therapist Title: </label>
<input style="width: 200px" type="text" name="unit" class="form-control" id="therapist_title_id" placeholder="Type Therapist Title Info Here">
<!-- Form Input #7 : Therapist Name -->
<label for="therapist_name_id">Therapist Name: </label>
<input style="width: 200px" type="text" name="patient" class="form-control" id="therapist_name_id" placeholder="Type Therapist Name Info Here">
<!-- Form Input #8 : Wheelchair Type -->
<label for="wc_type_id">Wheelchair Type: </label>
<input style="width: 200px" type="text" name="room" class="form-control" id="wc_type_id" placeholder="Type Wheelchair Type Info Here">
<!-- Form Input #9 : Wheelchair Model -->
<label for="wc_model_id">Wheelchair Model: </label>
<input style="width: 200px" type="text" name="gender" class="form-control" id="wc_model_id" placeholder="Type Wheelchair Model Info Here">
<!-- Form Input #10 : Wheelchair Brand -->
<label for="wc_brand_id">Wheelchair Brand: </label>
<input style="width: 200px" type="text" name="diagnosis" class="form-control" id="wc_brand_id" placeholder="Type Wheelchair Brand Info Here">
<!-- Form Input #11 : Wheelchair Dimensions -->
<label for="wc_dimensions_id">Wheelchair Dimensions: </label>
<input style="width: 200px" type="text" name="unit" class="form-control" id="wc_dimensions_id" placeholder="Type Wheelchair Dimensions Info Here">
<!-- Form Input #12 : Wheelchair Height -->
<label for="wc_height_id">Wheelchair Height: </label>
<input style="width: 200px" type="text" name="patient" class="form-control" id="wc_height_id" placeholder="Type Wheelchair Height Info Here">
<!-- Form Input #13 : Wheelchair Back -->
<label for="wc_back_id">Wheelchair Back: </label>
<input style="width: 200px" type="text" name="room" class="form-control" id="wc_back_id" placeholder="Type Wheelchair Back Info Here">
<!-- Form Input #14 : Cushion Type -->
<label for="cushion_type_id">Cushion Type: </label>
<input style="width: 200px" type="text" name="gender" class="form-control" id="cushion_type_id" placeholder="Type Cushion Type Info Here">
<!-- Form Input #15 : Cushion Dimensions -->
<label for="cushion_dimensions_id">Cushion Dimensions: </label>
<input style="width: 200px" type="text" name="cushion_dimensions" class="form-control" id="cushion_dimensions_id" placeholder="Type Cushion Dimensions Info Here">
<!-- Form Input #16 : Armrest Type -->
<label for="armrest_type_id">Armrest Type: </label>
<input style="width: 200px" type="text" name="armrest_type" class="form-control" id="armrest_type_id" placeholder="Type Armrest Type Info Here">
</div>
<script src="{{ asset('js/jquery-3.1.1.js') }}"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // This block of JQuery code addresses INPUT tag group #1.
        $('#unit_id').autocomplete({
            source: '{!! URL::to('findUnits') !!}',
            minlenght: 1,
            autoFocus: true,
            select: function (e, ui) {
                alert(ui);
            }
        });
        // This block of JQuery code addresses INPUT tag group #2.
        $('#patient_id').autocomplete({
            source: '{!! URL::to('findPatientNames') !!}',
            minlenght: 1,
            autoFocus: true,
            select: function (e, ui) {
                alert(ui);
            }
        });
        // This block of JQuery code addresses INPUT tag group #3.
        $('#room_id').autocomplete({
            source: '{!! URL::to('findRooms') !!}',
            minlenght: 1,
            autoFocus: true,
            select: function (e, ui) {
                alert(ui);
            }
        });
        // This block of JQuery code addresses INPUT tag group #4.
        $('#gender_id').autocomplete({
            source: '{!! URL::to('findGender') !!}',
            minlenght: 1,
            autoFocus: true,
            select: function (e, ui) {
                alert(ui);
            }
        });
        // This block of JQuery code addresses INPUT tag group #5.
        $('#diagnosis_id').autocomplete({
            source: '{!! URL::to('findDiagnosis') !!}',
            minlenght: 1,
            autoFocus: true,
            select: function (e, ui) {
                alert(ui);
            }
        });
        // This block of JQuery code addresses INPUT tag group #6.
        $('#therapist_title_id').autocomplete({
            source: '{!! URL::to('findTherapistTitles') !!}',
            minlenght: 1,
            autoFocus: true,
            select: function (e, ui) {
                alert(ui);
            }
        });
        // This block of JQuery code addresses INPUT tag group #7.
        $('#therapist_name_id').autocomplete({
            source: '{!! URL::to('findTherapistNames') !!}',
            minlenght: 1,
            autoFocus: true,
            select: function (e, ui) {
                alert(ui);
            }
        });
        // This block of JQuery code addresses INPUT tag group #8.
        $('#wc_type_id').autocomplete({
            source: '{!! URL::to('findWcTypes') !!}',
            minlenght: 1,
            autoFocus: true,
            select: function (e, ui) {
                alert(ui);
            }
        });
        // This block of JQuery code addresses INPUT tag group 9.
        $('#wc_model_id').autocomplete({
            source: '{!! URL::to('findInpatientWcModels') !!}',
            minlenght: 1,
            autoFocus: true,
            select: function (e, ui) {
                alert(ui);
            }
        });
        // This block of JQuery code addresses INPUT tag group #10.
        $('#wc_brand_id').autocomplete({
            source: '{!! URL::to('findInpatientWcBrands') !!}',
            minlenght: 1,
            autoFocus: true,
            select: function (e, ui) {
                alert(ui);
            }
        });
        // This block of JQuery code addresses INPUT tag group #11.
        $('#wc_dimensions_id').autocomplete({
            source: '{!! URL::to('findWcDimensions') !!}',
            minlenght: 1,
            autoFocus: true,
            select: function (e, ui) {
                alert(ui);
            }
        });
        // This block of JQuery code addresses INPUT tag group #12.
        $('#wc_height_id').autocomplete({
            source: '{!! URL::to('findWcHeights') !!}',
            minlenght: 1,
            autoFocus: true,
            select: function (e, ui) {
                alert(ui);
            }
        });
        // This block of JQuery code addresses INPUT tag group #13.
        $('#wc_back_id').autocomplete({
            source: '{!! URL::to('findWcBacks') !!}',
            minlenght: 1,
            autoFocus: true,
            select: function (e, ui) {
                alert(ui);
            }
        });
        // This block of JQuery code addresses INPUT tag group #14.
        $('#cushion_type_id').autocomplete({
            source: '{!! URL::to('findCushionTypes') !!}',
            minlenght: 1,
            autoFocus: true,
            select: function (e, ui) {
                alert(ui);
            }
        });
        // This block of JQuery code addresses INPUT tag group #15.
        $('#cushion_dimensions_id').autocomplete({
            source: '{!! URL::to('findCushionDimensions') !!}',
            minlenght: 1,
            autoFocus: true,
            select: function (e, ui) {
                alert(ui);
            }
        });
        // This block of JQuery code addresses INPUT tag group #16.
        $('#armrest_type_id').autocomplete({
            source: '{!! URL::to('findArmrestTypes') !!}',
            minlenght: 1,
            autoFocus: true,
            select: function (e, ui) {
                alert(ui);
            }
        });
    });
</script>
</body>
</html>
