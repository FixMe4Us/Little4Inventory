
(function ($) {
    "use strict";

    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
  

    $('.validate-form .input100', '.').each(function(){
        $(this).focus(function(){
            hideValidate(this); 
        });
        $(this).on('input', function() {
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
            hideValidate(this); 
        });
    });

})(jQuery);