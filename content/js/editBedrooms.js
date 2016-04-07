$(function() {
    var dialog, form,

        type = $( "#bedroom-type" ),
        capacity = $( "#bedroom-capacity" ),
        status = $( "#bedroom-status" ),
        rate = $( "#bedroom-rate" ),
        allFields = $( [] ).add( type ).add( capacity ).add( status ).add( rate ),

        edit_dialogs = $( "#edit-dialog-form" ).dialog({
            autoOpen: false,
            height: 300,
            width: 350,
            modal: true,
            buttons: {
                "Modifier la chambre": editBedrooms,
                Cancel: function() {
                    edit_dialogs.dialog( "close" );
                }
            },
            close: function() {
                form[ 0 ].reset();
                allFields.removeClass( "ui-state-error" );
            }
        });

    edit_form = edit_dialogs.find( "form" ).on( "submit", function( event ) {
        event.preventDefault();
        editBedrooms();
    });

    var current_edit_row_details={};

    function editBedrooms() {
        var valid = true;

        var tds = $(current_edit_row_details.current_row).children('td');

        var type = $('#bedroom-type').val();
        var capacity = $('#bedroom-capacity').val();
        var status = $('#bedroom-status').val();
        var rate = $('#bedroom-rate').val();

        tds[1].innerHTML = type;
        tds[2].innerHTML = capacity;
        tds[3].innerHTML = status;
        tds[4].innerHTML = rate;
        edit_dialogs.dialog( "close" );

        location.reload();
        return valid;
    }

    $( ".edit-bedrooms" ).click(function() {

        var tds = $(this).closest('tr').children('td');
        var type = tds[1].innerHTML;
        var capacity = tds[2].innerHTML;
        var status = tds[3].innerHTML;
        var rate = tds[4].innerHTML;

        $('#bedroom-type').val(type);
        $('#bedroom-capacity').val(capacity);
        $('#bedroom-status').val(status);
        $('#bedroom-rate').val(rate);

        current_edit_row_details.type = type;
        current_edit_row_details.capacity = capacity;
        current_edit_row_details.status = status;
        current_edit_row_details.rate = rate;
        current_edit_row_details.current_row = $(this).closest('tr');

        edit_dialogs.dialog( "open" );
    });
});

$(document).ready(function() {
    $(".remove-bedrooms").on("click",function() {
        var tr = $(this).closest('tr');
        tr.css("background-color","#f46330");
        tr.fadeOut(400, function(){
            tr.remove();
        });
        return false;
    });
});