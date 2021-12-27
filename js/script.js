$(document).ready(function(){
      new WOW().init();
    $(function(){                                   //scroll
        $("a[href^='#']").click(function(){
                var _href = $(this).attr("href");
                $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
                return false;
        });
        });
       
        let higtSlider = new Swiper('.slider', {
                slidesPerView: 2,
                spaceBetween: 10,
                loop: true,
                speed:600,
                autoplay: {
                        delay: 2000,                       
                      },
                breakpoints: {                         
                        568: { 
                                slidesPerView: 4,      
                        }
                },
                });

        let lowSlider = new Swiper('.slider1', {
                slidesPerView: 2,
                spaceBetween: 10,
                loop: true,
                speed:800,        
                autoplay: {
                        delay: 2000,
                        reverseDirection:true,
                        },
                breakpoints: {                         
                        568: { 
                                slidesPerView: 4,      
                        }
                },
                });

        let clientSlider = new Swiper('.slider-cl', {
                slidesPerView: 2,
                spaceBetween: 10,
                loop: true,
                speed:600,
                autoplay: {
                        delay: 2000,
                        },
                breakpoints: {                         
                        568: { 
                                slidesPerView: 4,      
                        }
                },
                });



});// end script