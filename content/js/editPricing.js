$(function() {
    var dialog, form,

        highSeasonPricing = $( "#high-season-pricing" ),
        lowSeasonPricing = $( "#low-season-pricing" ),
        allFields = $( [] ).add( highSeasonPricing ).add( lowSeasonPricing ),

    edit_dialogs = $( "#edit-dialog-form" ).dialog({
        autoOpen: false,
        height: 300,
        width: 350,
        modal: true,
        buttons: {
            "Modifier les tarifs": editPricing,
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
        editPricing();
    });

    var current_edit_row_details={};

    function editPricing() {
        var valid = true;

        var tds = $(current_edit_row_details.current_row).children('td');

        var highSeasonPricing = $('#high-season-pricing').val();
        var lowSeasonPricing = $('#low-season-pricing').val();

        tds[1].innerHTML = highSeasonPricing;
        tds[2].innerHTML = lowSeasonPricing;
        edit_dialogs.dialog( "close" );

        location.reload();
        return valid;
    }

    $( ".edit-pricing" ).click(function() {

        var tds = $(this).closest('tr').children('td');
        var highSeasonPricing = tds[1].innerHTML;
        var lowSeasonPricing = tds[2].innerHTML;

        $('#high-season-pricing').val(highSeasonPricing);
        $('#low-season-pricing').val(lowSeasonPricing);

        current_edit_row_details.highSeasonPricing = highSeasonPricing;
        current_edit_row_details.lowSeasonPricing = lowSeasonPricing;
        current_edit_row_details.current_row = $(this).closest('tr');

        edit_dialogs.dialog( "open" );
    });
});