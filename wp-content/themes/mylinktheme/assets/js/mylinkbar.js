(jQuery)(function($){
"use strict";


    $(document).ready(function(){
        $(".name_of_user input").on('keyup',function(e){
            if(e.keyCode==13){
                $('.content').removeClass('hide');





                $('.content input:eq(0)').focus();
                $('.name_of_user').addClass('hide');
            }
        })
    })


});