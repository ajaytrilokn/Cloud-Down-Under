$(document).ready(function() {


    $('.clients-logo-inner').slick({
        dots: false,
        arrows: false,
        autoplay: true,
        variableWidth: true,
        autoplaySpeed: 0,
        // slidesToShow: 5,
        speed: 5000,
        cssEase: "linear",
        pauseOnHover: false,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    infinite: true,
                    dots: false
                }
            }, {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]
    });


// ==================================================================
//                        HOME PAGE OUR WORK SLIDER JS Start
// ==================================================================                           

    function setBoundries(slick, state) {
        if (state === 'default') {
            slick.find('ul.slick-dots li').eq(4).addClass('n-small-1');
        }
    }

    // Slick Selector.
    var slickSlider = $('.h-our-work-slider');
    var maxDots = 4;
    var transformXIntervalNext = -18;
    var transformXIntervalPrev = 18;

    slickSlider.on('init', function(event, slick) {
        $(this).find('ul.slick-dots').wrap("<div class='slick-dots-container'></div>");
        $(this).find('ul.slick-dots li').each(function(index) {
            $(this).addClass('dot-index-' + index);
        });
        $(this).find('ul.slick-dots').css('transform', 'translateX(0)');
        setBoundries($(this), 'default');
    });

    var transformCount = 0;
    slickSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        var totalCount = $(this).find('.slick-dots li').length;
        if (totalCount > maxDots) {
            if (nextSlide > currentSlide) {
                if ($(this).find('ul.slick-dots li.dot-index-' + nextSlide).hasClass('n-small-1')) {
                    if (!$(this).find('ul.slick-dots li:last-child').hasClass('n-small-1')) {
                        transformCount = transformCount + transformXIntervalNext;
                        $(this).find('ul.slick-dots li.dot-index-' + nextSlide).removeClass('n-small-1');
                        var nextSlidePlusOne = nextSlide + 1;
                        $(this).find('ul.slick-dots li.dot-index-' + nextSlidePlusOne).addClass('n-small-1');
                        $(this).find('ul.slick-dots').css('transform', 'translateX(' + transformCount + 'px)');
                        var pPointer = nextSlide - 3;
                        var pPointerMinusOne = pPointer - 1;
                        $(this).find('ul.slick-dots li').eq(pPointerMinusOne).removeClass('p-small-1');
                        $(this).find('ul.slick-dots li').eq(pPointer).addClass('p-small-1');
                    }
                }
            } else {
                if ($(this).find('ul.slick-dots li.dot-index-' + nextSlide).hasClass('p-small-1')) {
                    if (!$(this).find('ul.slick-dots li:first-child').hasClass('p-small-1')) {
                        transformCount = transformCount + transformXIntervalPrev;
                        $(this).find('ul.slick-dots li.dot-index-' + nextSlide).removeClass('p-small-1');
                        var nextSlidePlusOne = nextSlide - 1;
                        $(this).find('ul.slick-dots li.dot-index-' + nextSlidePlusOne).addClass('p-small-1');
                        $(this).find('ul.slick-dots').css('transform', 'translateX(' + transformCount + 'px)');
                        var nPointer = currentSlide + 3;
                        var nPointerMinusOne = nPointer - 1;
                        $(this).find('ul.slick-dots li').eq(nPointer).removeClass('n-small-1');
                        $(this).find('ul.slick-dots li').eq(nPointerMinusOne).addClass('n-small-1');
                    }
                }
            }
        }
    });

    $('.h-our-work-slider').slick({
        dots: true,
        arrows: true,
        // fade:true,
        autoplay: false,
        autoplaySpeed: 2000,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        // speed: 2000,
    });


// ==================================================================
//                        HOME PAGE OUR WORK SLIDER JS END
// ==================================================================  
    





    $('.team-person-slider').slick({
        dots: false,
        arrows: true,
        autoplay: false,
        autoplaySpeed: 2000,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        // speed: 2000,
        
        responsive: [{
                breakpoint: 1400,
                settings: {
                    autoplay: true,
                    autoplaySpeed: 2000,
                    slidesToShow: 3,
                    infinite: true,
                    dots: false
                }
            }, {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                }
            }, {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });



    $('.testimonials-slider').slick({
        dots: false,
        arrows: false,
        autoplay: false,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        // speed: 2000,
        
        responsive: [{
                breakpoint: 1200.98,
                settings: {
                    slidesToShow: 2,
                    infinite: false,
                    dots: false
                }
            }, {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                }
            }, {
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });



    $('.blogs-sec-slider').slick({
        dots: false,
        arrows: false,
        autoplay: false,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        // speed: 2000,
        
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    infinite: true,
                    dots: false
                }
            }, {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });


    $('.testimonials--slider').slick({
        dots: true,
        arrows: false,
        autoplay: false,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.testimonials--slider .slick-dots'
        // speed: 2000,
    });

    $('.testimonials--slider .slick-dots').slick({
        dots: false,
        arrows: false,
        autoplay: false,
        infinite: false,
        // slidesToShow: 10,
        // slidesToScroll: 1,
        centerMode: true,
        variableWidth: true,
         asNavFor: '.testimonials--slider',
        autoplaySpeed: 0,
        // pauseOnHover: false,
    });

    // $('.testimonials--slider').slick({
    //     dots: true,
    //     arrows: false,
    //     autoplay: false,
    //     infinite: false,
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     // speed: 2000,
    // });








    // var typed = new Typed("#typed", {
    //     stringsElement: '#typed-strings',
    //     typeSpeed: 40,
    //     loop: true,
    //     backDelay: 3000,
    //     backSpeed: 5,
    // });

/* 
  Make cards clickable 
  ====================
*/

// $('.card-body').on('click', function() {
//   $(this).parent().find("a").trigger('click'); 
// });


    // scroll hide and show

    $('.navbar-nav li a').on('click', function() {
        $('.navbar-collapse').collapse('hide');
    });

    $(".navbar-toggler").click(function() {
        $("body").toggleClass("no-scroll");
    });

    $(".header-menu a").click(function() {
        $("body").removeClass("no-scroll");
    });

    $('.header-btn-main a').on('click', function() {
        $('.navbar-collapse').collapse('hide');
    });


    // top nav header scroll active class add start

    // $(window).scroll(function() {
    //     var scroll = $(window).scrollTop();
    //     if (scroll > 0) {
    //         $(".header-main").addClass("active");
    //     } else {
    //         $(".header-main").removeClass("active");
    //     }
    // });

    
    // $(function(){
  
    //   var scroll = $(document).scrollTop();
    //   var navHeight = $('.header-main').outerHeight();
      
    //   $(window).scroll(function(){
        
    //     var scrolled = $(document).scrollTop();
         
    //     if(scrolled > navHeight){

    //       $('.header-main').addClass('active');
    //         }else{
    //         $('.header-main').removeClass('active');
    //         }

    //       if(scrolled > scroll){
    //         $('.header-main').removeClass('sticky');
    //         }else{
    //         $('.header-main').addClass('sticky');
    //         }
        
    //       scroll = $(document).scrollTop();

    //   }); 

    // });



    // top nav header scroll active class add end




}); 



