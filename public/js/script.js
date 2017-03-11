/**
 * Created by aaronrobertwilson on 1/28/17.
 */

// JQuery API Control
jQuery(document).ready(function($){
    $('#makes').change(function(){
        $.get("{{ url('api/dropdown') }}",
            { option: $(this).val() },
            function(data) {
                var models = $('#models');
                models.empty();

                $.each(data, function(index, element) {
                    models.append("<option value='"+ element.id +"'>" + element.name + "</option>");
                });
            });
    });
});