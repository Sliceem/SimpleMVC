$(document).ready(function(){
    var selectedField = $('#selector-field');

    //Hide div's if value not selected
    function checkValue(val){
        $('.hide').hide();
        $('.Furniture').hide();
        $('.Book').hide();
        $('.Dvd').hide();
        $('#' + val).show();
        $('.' + val).show();
    }

    function onChange(){
        checkValue($(this).val());
    }

    selectedField.on('change', onChange);

})