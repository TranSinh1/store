$(document).ready(function() {
        $('#changePass').change(function(event) {
            if($(this).is(":checked")){
                $(".pass").removeAttr('disabled');
            }
            else{
                $(".pass").attr('disabled','');
            }
        });
});

