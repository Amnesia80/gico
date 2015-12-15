$( document ).ready(function() {
    $('.datepicker').datetimepicker({
        format: 'dd/mm/yyyy hh:ii',
        language: 'fr',
        autoclose: true
    });

    $('#checkall').click(function() {
        var isChecked = $('#checkall').is(':checked');
        if(isChecked){
            $('.usercheck').parent().parent().not('.filtered').children(':first-child').children(':first-child').prop('checked', true);
        }else{
            $('.usercheck').parent().parent().not('.filtered').children(':first-child').children(':first-child').prop('checked', false);
        }
    });

    $('.chzn-select').chosen();
});

