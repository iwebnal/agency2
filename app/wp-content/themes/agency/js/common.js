

$(document).ready(function(){

    //Плавный скролл
    $('a[href^="#"]').click(function() {
        elementClick = $(this).attr("href");
        destination = $(elementClick).offset().top;
        // if($.browser.safari){
        //     $('body').animate({scrollTop: destination},3000);
        // }else{
            $('body').animate({scrollTop: destination},2000);
            $('html').animate( {scrollTop: destination},2000);
        // }
        return false;
    })



    $(".phone").mask("+ 7 (999) 999 - 99 - 99?");

    $(".ah-slider").owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        autoplay:true,
        smartSpeed:1000,
        autoplayTimeout:2000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    $(".ah-slider1").owlCarousel({
        loop:true,
        margin:0,
        nav:false,
        autoplay:true,
        smartSpeed:2000,
        autoplayTimeout:3000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

 });


