







$(document).ready(function(){
    $(".more-text").click(function(){
        $(".descriptionauto123").show(function(){    
        $(".more-text").hide();
        $(".less-text").show();   	
        });
    });
});
$(document).ready(function(){
    $(".less-text").click(function(){
        $(".descriptionauto123").hide(function(){
            $(".more-text").show();
            $(".less-text").hide();
        });
    });
});


$(document).ready(function(){
    
    $('a').hover(function(){
        $(this).toggleClass('active');
    });
});




