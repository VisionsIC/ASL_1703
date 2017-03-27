'use strict';

/**
 * Created by aaronrobertwilson on 3/26/17.
 */
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).on('click', '.edit-modal', function () {
    $('#footer_action_button').text(" Update");
    $('#footer_action_button').addClass('glyphicon-check');
    $('#footer_action_button').removeClass('glyphicon-trash');
    $('.actionBtn').addClass('btn-success');
    $('.actionBtn').removeClass('btn-danger');
    $('.actionBtn').addClass('edit');
    $('.modal-title').text('Edit');
    $('.deleteContent').hide();
    $('.form-horizontal').show();
    $('#fid').val($(this).data('id'));
    $('#wcr').val($(this).data('wcrequest'));
    $('#unt').val($(this).data('unit'));
    $('#rm').val($(this).data('room'));
    $('#pat').val($(this).data('patientname'));
    $('#gdr').val($(this).data('gender'));
    $('#dia').val($(this).data('diagnosis'));
    $('#ttl').val($(this).data('therapisttitle'));
    $('#thn').val($(this).data('therapistname'));
    $('#desc').val($(this).data('description'));
    $('#myModal').modal('show');
});
$('.modal-footer').on('click', '.edit', function () {
    $.ajax({
        type: 'post',
        url: '/editRequest',
        data: {
            '_token': $('input[name=_token]').val(),
            'id': $("#fid").val(),
            'wcrequest': $('#wcr').val(),
            'unit': $('#unt').val(),
            'room': $('#rm').val(),
            'patientname': $('#pat').val(),
            'gender': $('#gdr').val(),
            'diagnosis': $('#dia').val(),
            'therapisttitle': $('#ttl').val(),
            'therapistname': $('#thn').val(),
            'description': $('#desc').val()
        },
        success: function success(data) {
            $('.req' + data.id).replaceWith("<tr class='req" + data.id + "'><td>" + data.id + "</td><td>" + data.wcrequest + "</td><td>" + data.unit + "</td><td>" + data.room + "</td><td>" + data.patientname + "</td><td>" + data.gender + "</td><td>" + data.diagnosis + "</td><td>" + data.therapisttitle + "</td><td>" + data.therapistname + "</td><td>" + data.description + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-wcrequest='" + data.wcrequest + "' data-unit='" + data.unit + "' data-room='" + data.patientname + "' data-gender='" + data.gender + "' data-diagnosis='" + data.diagnosis + "' data-therapisttitle='" + data.therapisttitle + "' data-therapistname='" + data.therapistname + "' data-description='" + data.description + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-wcrequest='" + data.wcrequest + "' data-unit='" + data.unit + "' data-room='" + data.patientname + "' data-gender='" + data.gender + "' data-diagnosis='" + data.diagnosis + "' data-therapisttitle='" + data.therapisttitle + "' data-therapistname='" + data.therapistname + "' data-description='" + data.description + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
        }
    });
});
// Add Request Function
$("#add").click(function () {
    $.ajax({
        type: 'post',
        url: '/addRequest',
        data: {
            '_token': $('input[name=_token]').val(),
            'wcrequest': $('input[name=wcrequest]').val(),
            'unit': $('input[name=unit]').val(),
            'room': $('input[name=room]').val(),
            'patientname': $('input[name=patientname]').val(),
            'gender': $('input[name=gender]').val(),
            'diagnosis': $('input[name=diagnosis]').val(),
            'therapisttitle': $('input[name=therapisttitle]').val(),
            'therapistname': $('input[name=therapistname]').val(),
            'description': $('input[name=description]').val()
        },
        success: function success(data) {
            if (data.errors) {
                $('.error').removeClass('hidden');
                $('.error').text(data.errors.wcrequest);
                $('.error').text(data.errors.unit);
                $('.error').text(data.errors.room);
                $('.error').text(data.errors.patientname);
                $('.error').text(data.errors.gender);
                $('.error').text(data.errors.diagnosis);
                $('.error').text(data.errors.therapisttitle);
                $('.error').text(data.errors.therapistname);
                $('.error').text(data.errors.description);
            } else {
                $('.error').remove();
                $('#table').append("<tr class='req" + data.id + "'><td>" + data.id + "</td><td>" + data.wcrequest + "</td><td>" + data.unit + "</td><td>" + data.room + "</td><td>" + data.patientname + "</td><td>" + data.gender + "</td><td>" + data.diagnosis + "</td><td>" + data.therapisttitle + "</td><td>" + data.therapistname + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-wcrequest='" + data.wcrequest + "' data-unit='" + data.unit + "' data-room='" + data.patientname + "' data-gender='" + data.gender + "' data-diagnosis='" + data.diagnosis + "' data-therapisttitle='" + data.therapisttitle + "' data-therapistname='" + data.therapistname + "' data-description='" + data.description + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-title='" + data.title + "' data-description='" + data.description + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
            }
        }
    });
    $('#wcrequest').val('');
    $('#unit').val('');
    $('#room').val('');
    $('#patientname').val('');
    $('#gender').val('');
    $('#diagnosis').val('');
    $('#therapisttitle').val('');
    $('#therapistname').val('');
    $('#description').val('');
});
//Delete Request Function
$(document).on('click', '.delete-modal', function () {
    $('#footer_action_button').text(" Delete");
    $('#footer_action_button').removeClass('glyphicon-check');
    $('#footer_action_button').addClass('glyphicon-trash');
    $('.actionBtn').removeClass('btn-success');
    $('.actionBtn').addClass('btn-danger');
    $('.actionBtn').addClass('delete');
    $('.modal-title').text('Delete');
    $('.id').text($(this).data('id'));
    $('.deleteContent').show();
    $('.form-horizontal').hide();
    $('.wcrequest').html($(this).data('wcrequest'));
    $('#myModal').modal('show');
});
$('.modal-footer').on('click', '.delete', function () {
    $.ajax({
        type: 'post',
        url: '/deleteRequest',
        data: {
            '_token': $('input[name=_token]').val(),
            'id': $('.id').text()
        },
        success: function success(data) {
            $('.req' + $('.id').text()).remove();
        }
    });
});
//# sourceMappingURL=crud.js.map