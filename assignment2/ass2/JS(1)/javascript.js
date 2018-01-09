 
            $(document).ready(function() {
                //responsive menu toggle
                $("#menutoggle").click(function() {
                    $('.xs-menu').toggleClass('displaynone');

                    });
                //add active class on menu
                $('xs-menu ul li').click(function(e) {
                    e.preventDefault();
                    $('li').removeClass('active');
                    $(this).addClass('active');
                });
            //drop down menu    
                    $(".drop-down").hover(function() {
                        $('.mega-menu').addClass('display-on');
                    });
                    $(".drop-down").mouseleave(function() {
                        $('.mega-menu').removeClass('display-on');
                    });
                    
                    $(".dropdown").hover(            
                        function() {
                            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
                            $(this).toggleClass('open');        
                        },
                        function() {
                            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
                            $(this).toggleClass('open');       
                        }
                     );
            });
            

        $(document).ready(function(){
          $(".owl-carousel").owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:2,
                    nav:true
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:4,
                    nav:true,
                    loop:false
                }
            }

            
          });
          $(".loop").owlCarousel({
                center: true,
                items:2,
                loop:true,
                margin:10,
                responsive:{
                    600:{
                        items:4
                    }
                }
            });
            $(".nonloop").owlCarousel({
                center: true,
                items:2,
                loop:false,
                margin:10,
                responsive:{
                    600:{
                        items:4
                    }
                }
            });
        });



