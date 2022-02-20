/** 
    *  headerFixed();
    *  flatRetinaLogo();
    *  responsiveMenu();
    *  topSearch();
    *  googleMap();
    *  flatTabs();
    *  flatIsotopeCourse();
    *  accordionToggle();
    *  skillbar();
    *  spacer();
    *  flatCounter();
    *  contentBox();
    *  flatEqualizeHeight();
    *  testimonialSlider();
    *  goTop();
    *  removePreloader();
*/

;(function($) {
    "use strict";

    var headerFixed = function() {
        var nav = $('.header.bg-color');
            if ( nav.size() !== 0 ) {

            $(window).on('load', function(){
            var header = $('.header.bg-color');           
            var offsetTop = $('.header.bg-color').offset().top;
            var headerHeight = $('.header.bg-color').height();
            var buffer  = $('<div>', { height: headerHeight }).insertAfter(header);   
                buffer.hide();                 

                $(window).on('load scroll', function(){
                    if ( $(window).scrollTop() > offsetTop  ) {
                        $('.header.bg-color').addClass('fixed-header');
                        buffer.show();
                    } else {
                        $('.header.bg-color').removeClass('fixed-header');
                        buffer.hide();
                    }
                })
           
            });
        }
    };

    var flatRetinaLogo = function() {
        var retina = window.devicePixelRatio > 1 ? true : false;
        var $logo = $('#logo img');
        var $logo_retina = $logo.data('retina');

        if ( retina && $logo_retina ) {
            $logo.attr({
                src: $logo.data('retina'),
                width: $logo.data('width'),
                height: $logo.data('height')
            });
        } 
    };

    var responsiveMenu = function() {
        var menuType = 'desktop';

        $(window).on('load resize', function() {
            var currMenuType = 'desktop';

            if ( matchMedia( 'only screen and (max-width: 991px)' ).matches ) {
                currMenuType = 'mobile';
            }

            if ( currMenuType !== menuType ) {
                menuType = currMenuType;

                if ( currMenuType === 'mobile' ) {
                    var $mobileMenu = $('#mainnav').attr('id', 'mainnav-mobi').hide();
                    var hasChildMenu = $('#mainnav-mobi').find('li:has(ul)');

                    $('#header .container').after($mobileMenu);
                    hasChildMenu.children('ul').hide();
                    hasChildMenu.children('a').after('<span class="btn-submenu"></span>');
                    $('.btn-menu').removeClass('active');
                } else {
                    var $desktopMenu = $('#mainnav-mobi').attr('id', 'mainnav').removeAttr('style');

                    $desktopMenu.find('.submenu').removeAttr('style');
                    $('#header').find('.nav-wrap').append($desktopMenu);
                    $('.btn-submenu').remove();
                }
            }
        });

        $('.btn-menu').on('click', function() {         
            $('#mainnav-mobi').slideToggle(300);
            $(this).toggleClass('active');
        });

        $(document).on('click', '#mainnav-mobi li .btn-submenu', function(e) {
            $(this).toggleClass('active').next('ul').slideToggle(300);
            e.stopImmediatePropagation()
        });
    };

    var topSearch = function () {
        $(document).on('click', function(e) {   
            var clickID = e.target.id;   
            if ( ( clickID != 's' ) ) {
                $('.top-search').removeClass('show');   
                $('.show-search').removeClass('active');             
            } 
        });

        $('.show-search').on('click', function(event){
            event.stopPropagation();
        });

        $('.search-form').on('click', function(event){
            event.stopPropagation();
        });        

        $('.show-search').on('click', function (e) {           
            if( !$( this ).hasClass( "active" ) )
                $( this ).addClass( 'active' );
            else
                $( this ).removeClass( 'active' );
             e.preventDefault();

            if( !$('.top-search' ).hasClass( "show" ) )
                $( '.top-search' ).addClass( 'show' );
            else
                $( '.top-search' ).removeClass( 'show' );
        });
    } 

    // var googleMap = function () {
    //     // gmap default
    //     if ($().gmap3) {
    //         var data = JSON.parse('[{"address":"Brooklyn, Tiá»ƒu bang New York 11201 Hoa Ká»³"}]');
    //         $(".flat-map")
    //         .gmap3({
    //             map: {
    //                 options: {
    //                     zoom: 10,
    //                     center: [40.7024767,-73.9877404,17.5],
    //                     mapTypeId: 'Xian',
    //                     scrollwheel: true
    //                 },
    //             },
    //         });
    //     }
    //     // json loop
    //     $.each(data, function (key, val) {
    //         $('.flat-map').gmap3({
    //             marker: {
    //                 values: [{
    //                     address: val.address,
    //                     options: {
                           
    //                     }
                        
    //                 }]
    //             },
    //             styledmaptype: {
    //                 id: "Xian",
    //                 options: {
    //                     name: "Xian"
    //                 },
    //                 styles: [
    //                 {
    //                     "featureType": "administrative",
    //                     "elementType": "all",
    //                     "stylers": [
    //                     {
    //                         "saturation": "-100"
    //                     }
    //                     ]
    //                 },
    //                 {
    //                     "featureType": "administrative.province",
    //                     "elementType": "all",
    //                     "stylers": [
    //                     {
    //                         "visibility": "off"
    //                     }
    //                     ]
    //                 },
    //                 {
    //                     "featureType": "landscape",
    //                     "elementType": "all",
    //                     "stylers": [
    //                     {
    //                         "saturation": -100
    //                     },
    //                     {
    //                         "lightness": 65
    //                     },
    //                     {
    //                         "visibility": "on"
    //                     }
    //                     ]
    //                 },
    //                 {
    //                     "featureType": "poi",
    //                     "elementType": "all",
    //                     "stylers": [
    //                     {
    //                         "saturation": -100
    //                     },
    //                     {
    //                         "lightness": "50"
    //                     },
    //                     {
    //                         "visibility": "simplified"
    //                     }
    //                     ]
    //                 },
    //                 {
    //                     "featureType": "road",
    //                     "elementType": "all",
    //                     "stylers": [
    //                     {
    //                         "saturation": "-100"
    //                     }
    //                     ]
    //                 },
    //                 {
    //                     "featureType": "road.highway",
    //                     "elementType": "all",
    //                     "stylers": [
    //                     {
    //                         "visibility": "simplified"
    //                     }
    //                     ]
    //                 },
    //                 {
    //                     "featureType": "road.arterial",
    //                     "elementType": "all",
    //                     "stylers": [
    //                     {
    //                         "lightness": "30"
    //                     }
    //                     ]
    //                 },
    //                 {
    //                     "featureType": "road.local",
    //                     "elementType": "all",
    //                     "stylers": [
    //                     {
    //                         "lightness": "40"
    //                     }
    //                     ]
    //                 },
    //                 {
    //                     "featureType": "transit",
    //                     "elementType": "all",
    //                     "stylers": [
    //                     {
    //                         "saturation": -100
    //                     },
    //                     {
    //                         "visibility": "simplified"
    //                     }
    //                     ]
    //                 },
    //                 {
    //                     "featureType": "water",
    //                     "elementType": "geometry",
    //                     "stylers": [
    //                     {
    //                         "hue": "#ffff00"
    //                     },
    //                     {
    //                         "lightness": -25
    //                     },
    //                     {
    //                         "saturation": -97
    //                     }
    //                     ]
    //                 },
    //                 {
    //                     "featureType": "water",
    //                     "elementType": "labels",
    //                     "stylers": [
    //                     {
    //                         "lightness": -25
    //                     },
    //                     {
    //                         "saturation": -100
    //                     }
    //                     ]
    //                 }
    //                 ]
    //             }
    //         });
    //     });
    // };

    var flatTabs = function(){
        $('.flat-tabs').each(function(){
            $(this).find('.content-tab').children().hide();
            $(this).find('.content-tab').children().first().show();
            $(this).find('.menu-tab').children('li').on('click',function(){
                var liActive = $(this).index();
                var contentActive=$(this).siblings().removeClass('active').parents('.flat-tabs').find('.content-tab').children().eq(liActive);
                contentActive.addClass('active').fadeIn("slow");
                contentActive.siblings().removeClass('active');
                $(this).addClass('active').parents('.flat-tabs').find('.content-tab').children().eq(liActive).siblings().hide();
            });
        });
    };

    var flatIsotopeCourse = function() {
      
        $(".flat-courses").each(function () {
            if ( $().isotope ) {           
                var $container = $('.isotope-courses');
                console.log($container)
                $container.imagesLoaded(function(){

                    $container.isotope({
                        itemSelector: '.case',
                        transitionDuration: '1s',
                        layoutMode: 'fitRows'
                    });
                });

                var selector = '.mosahma';
                $container.isotope({ filter: selector });
                $('.flat-filter-isotype li').on('click',function() {                           
                    var selector = $(this).find("a").attr('data-filter');
                    // console.log(selector)
                    $('.flat-filter-isotype li').removeClass('active');
                    $(this).addClass('active');
                    $container.isotope({ filter: selector });
                    return false;
                });
            };
        });         
    };

    var accordionToggle = function() {
        $('.flat-question').each(function () {
            var speed = {duration: 400};
            $('.flat-question .toggle-content').hide();
            $('.flat-question .accordion-toggle .toggle-title.active').siblings('.toggle-content').show();
            $('.flat-question .accordion').find('.toggle-title').on('click', function() {
                $(this).toggleClass('active');
                $(this).closest('.accordion').find('.accordion-toggle').removeClass('active');
                $(this).closest('.accordion-toggle').toggleClass('active');
                $(this).next().slideToggle(speed);
                $(".flat-question .toggle-content").not($(this).next()).slideUp(speed);
                if ($(this).is('.active')) {
                    $(this).closest('.accordion').find('.toggle-title.active').toggleClass('active');
                    $(this).toggleClass('active');
                };
            });
        });
    };

    var skillbar = function() {
        jQuery('.skillbar').each(function() {
            jQuery(this).find('.skillbar-bar').animate({
                width: jQuery(this).attr('data-percent')
            }, 3000);
        });
    };

    var spacer = function() {
        $(window).on('load resize', function() {
            var mode = 'desktop';
            
            if ( matchMedia( 'only screen and (max-width: 1199px)' ).matches )
                mode = 'sdesktop';

            if ( matchMedia( 'only screen and (max-width: 991px)' ).matches )
                mode = 'mobile';

            if ( matchMedia( 'only screen and (max-width: 767px)' ).matches )
                mode = 'smobile';

            $('.flat-spacer').each(function(){
                if ( mode == 'desktop' ) {
                        $(this).attr('style', 'height:' + $(this).data('desktop') + 'px')
                    }
                else
                    if ( mode == 'sdesktop' ) {
                        $(this).attr('style', 'height:' + $(this).data('sdesktop') + 'px')
                    } 
                else 
                    if ( mode == 'mobile' ) {
                        $(this).attr('style', 'height:' + $(this).data('mobi') + 'px')
                } 
                else {
                    $(this).attr('style', 'height:' + $(this).data('smobi') + 'px')
                }
            })

        });
    };

    var flatCounter = function() {
        if ($(document.body).hasClass('counter-scroll')) {
            var a = 0;
            $(window).scroll(function() {
            var oTop = $('.counter').offset().top - window.innerHeight;
                if (a == 0 && $(window).scrollTop() > oTop) {
                    if ( $().countTo ) {
                        $('.counter').find('.numb-count').each(function() {
                            var to = $(this).data('to'),
                                speed = $(this).data('speed');
                          
                            $(this).countTo({
                                to: to,
                                speed: speed
                            });
                        });
                    }
                a = 1;
            }
        });
        }
        
    };

    var contentBox = function() {
        $(window).on('load resize', function() {
            var mode = 'desktop';
            if ( matchMedia( 'only screen and (max-width: 1440px)' ).matches ){
                mode = 'sdesktop';
            } 
            if ( matchMedia( 'only screen and (max-width: 1024px)' ).matches ){
                mode = 'ssdesktop';
            }
            if ( matchMedia( 'only screen and (max-width: 991px)' ).matches ){
                mode = 'mobile';
            } 
            if ( matchMedia( 'only screen and (max-width: 767px)' ).matches ){
                mode = 'smobile';
            }

            $('.themesflat-content-box').each(function(){
                var padding = $(this).data('padding');
                if ( padding ) {
                    if ( mode === 'desktop' ) {
                        $(this).attr('style', 'padding:' + $(this).data('padding'))
                    } else if ( mode === 'sdesktop' ) {
                        $(this).attr('style', 'padding:' + $(this).data('sdesktoppadding'))
                    } else if ( mode === 'ssdesktop' ) {
                        $(this).attr('style', 'padding:' + $(this).data('ssdesktoppadding'))
                    } else if ( mode === 'mobile' ) {
                        $(this).attr('style', 'padding:' + $(this).data('mobipadding'))
                    } else if ( mode === 'smobile' ) {
                        $(this).attr('style', 'padding:' + $(this).data('smobipadding'))
                    }
                }

                var margin = $(this).data('margin');
                if ( margin ) {
                    if ( mode === 'desktop' ) {
                        $(this).attr('style', 'margin:' + $(this).data('margin'))
                    } else if ( mode === 'mobile' ) {
                        $(this).attr('style', 'margin:' + $(this).data('mobimargin'))
                    } else if ( mode === 'smobile' ) {
                        $(this).attr('style', 'margin:' + $(this).data('smobimargin'))
                    }
                }
            })
        });
    };

    var flatEqualizeHeight = function() {
        $(window).on('load resize', function () {
            setTimeout(function () {
                $(document).imagesLoaded(function () {
                    if ( matchMedia( 'only screen and (max-width: 767px)' ).matches ) {
                        $('.equalize').equalize({equalize: 'outerHeight', reset: true});
                        $('.equalize.sm-equalize-auto').children().css("height", "");
                        return false;
                    } else if ( matchMedia( 'only screen and (max-width: 991px)' ).matches ) {
                        $('.equalize').equalize({equalize: 'outerHeight', reset: true});
                        $('.equalize.sm-equalize-auto').children().css("height", "");
                        return false;
                    } else if ( matchMedia( 'only screen and (max-width: 1199px)' ).matches ) {
                        $('.equalize').equalize({equalize: 'outerHeight', reset: true});
                        return false;
                    } else {
                        $('.equalize').equalize({equalize: 'outerHeight', reset: true});
                    }
                });
            }, 500);
        });
    };





    
    var testimonialSlider = function() {
        $(window).on('load resize',function(){
            $('#carousel-testimonial').each(function(){
                $('#carousel-testimonial').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: true,
                    itemWidth: 110,
                    directionNav:false,
                    itemMargin: 0,
                    asNavFor: '#slider-testimonial'
                });

                $('#slider-testimonial').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: false,
                    directionNav: true,
                    slideshow :true,
                    sync: "#carousel-testimonial",
                    prevText : "",
                    nextText : ""
                });
            });  
        });
    }; 

    var goTop =  function() {
        $(window).scroll(function() {
            if ( $(this).scrollTop() > 800 ) {
                $('#scroll-top').addClass('show');
            } else {
                $('#scroll-top').removeClass('show');
            }
        });

        $('#scroll-top').on('click', function() {
            $('html, body').animate({ scrollTop: 0 }, 1000 , 'easeInOutExpo');
            return false;
        });
    };

    var removePreloader = function() {        
        $(window).on("load", function () {
            $(".loader").fadeOut();
            $("#loading-overlay").delay(500).fadeOut('slow',function(){
                $(this).remove();
            }); 
        });
    };

// Dom Ready
    $(function() {
        headerFixed();
        flatRetinaLogo();
        responsiveMenu();
        topSearch();
        // googleMap();
        flatTabs();
        flatIsotopeCourse();
        accordionToggle();
        skillbar();
        spacer();
        flatCounter();
        contentBox();
        flatEqualizeHeight();
        testimonialSlider();
        goTop();
        removePreloader();
    });

})(jQuery);

    // $('#p1').on('click',function(){
    //     if($("#services1").css("display") != "block"){
    //         $("#services1").css("display","block");
    //         $("#services2").css("display","none");
    //         $("#services3").css("display","none");
    //     }
    //     })



    // $('#p2').on('click',function(){
    //     if($("#services2").css("display") != "block"){
    //         $("#services2").css("display","block");
    //         $("#services1").css("display","none");
    //         $("#services3").css("display","none");
    //     }
    //     })
    

    //     $('#p3').on('click',function(){
    //         if($("#services3").css("display") != "block"){
    //             $("#services3").css("display","block");
    //             $("#services1").css("display","none");
    //             $("#services2").css("display","none");
    //         }
    //         })
        
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        customClass: 'swal-wide',
        html:
          '<span>You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
          
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#monaz3at').on('click',function(){
    Swal.fire({
        title: '<strong> إدارة القضايا والمنازعات بكافة انواعها </strong>',
        icon: 'info',
        customClass: 'swal-wide',
        html:
          '<b>تعتمد المؤسسة فى مجال التقاضي بكافة أنواع المنازعات القضائية على خبره هائلة ومعرفة كاملة بمتطلبات العملاء واحتياجاتهم وذلك بهدف تسوية المنازعات والخلافات على نحو يتم بأعلي درجات الفعالية والكفاءة.</b></br>, ' +
          '<b>ويعد حسن سمعة المؤسسة وقوة العلاقات مع الجهات العامة بالدولة عاملآ أساسيآ في حل أغلب المنازعات والتوصل الى تسويات ودية خارج المحكمة ويمتلك محاموا المؤسسة في التقاضي خبرات واسعة. وفي قضايا الأسرة، تقدم ال<مؤسسة ايضآ استشارات للعملاء حول الطرق والأساليب الملاءمة التى قد تحول دون لجوءهم للتقاضي مستقبلآ بشأن مسائل متعقلة بنشاط عملهم او الحد من احتمالات التقاضي</b>',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})
$('#akarat').on('click',function(){
    Swal.fire({
        title: '<strong> خدمات العقارات</strong>',
        icon: 'info',
        html:
          'You can use <b>bold text</b>, ' +
          '<a href="//sweetalert2.github.io">links</a> ' +
          'and other HTML tags',
          showConfirmButton:false,
        // showCloseButton: true,
        // showCancelButton: true,
        // focusConfirm: false,
        // confirmButtonText:
        //   '<i class="fa fa-thumbs-up"></i> Great!',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        // cancelButtonText:
        //   '<i class="fa fa-thumbs-down"></i>',
        // cancelButtonAriaLabel: 'Thumbs down'
      })
})





//slideshow style interval
var autoSwap = setInterval( swap,7000);

//pause slideshow and reinstantiate on mouseout
$('.carousel, .slider').hover(
  function () {
    clearInterval(autoSwap);
}, 
  function () {
   autoSwap = setInterval( swap,7000);
});

//global variables
var items = [];
var startItem = 1;
var position = 0;
var itemCount = $('.carousel>li').length;
var leftpos = itemCount;
var resetCount = itemCount;

//unused: gather text inside items class
$('.carousel>li').each(function(index) {
    items[index] = $(this).text();
});

//swap images function
setInterval(function() {
    swap('clockwise');
  }, 1500);
function swap(action) {
    console.log(action)
  var direction = action;
  
  //moving carousel backwards
  if(direction == 'counter-clockwise') {
    var leftitem = $('.left-pos').attr('id') - 1;
    if(leftitem == 0) {
      leftitem = itemCount;
    }
    
    $('.right-pos').removeClass('right-pos').addClass('back-pos');
    $('.main-pos').removeClass('main-pos').addClass('right-pos');
    $('.left-pos').removeClass('left-pos').addClass('main-pos');
    $('#'+leftitem+'').removeClass('back-pos').addClass('left-pos');
    
    startItem--;
    if(startItem < 1) {
      startItem = itemCount;
    }
  }
  
  //moving carousel forward
  if(direction == 'clockwise' || direction == '' || direction == null ) {
    function pos(positionvalue) {
      if(positionvalue != 'leftposition') {
        //increment image list id
        position++;
        
        //if final result is greater than image count, reset position.
        if((startItem+position) > resetCount) {
            
          position = 1-startItem;
        }
      }
    
      //setting the left positioned item
      if(positionvalue == 'leftposition') {
        
        //left positioned image should always be one left than main positioned image.
        position = startItem - 1;
      
        //reset last image in list to left position if first image is in main position
        if(position < 1) {
          position = itemCount;
        }
      }
   
      return position;
    }  
  
   $('#'+ startItem +'').removeClass('main-pos').addClass('left-pos');
   $('#'+ (startItem+pos()) +'').removeClass('right-pos').addClass('main-pos');
   $('#'+ (startItem+pos()) +'').removeClass('back-pos').addClass('right-pos');
   $('#'+ pos('leftposition') +'').removeClass('left-pos').addClass('back-pos');

    startItem++;
    position=0;
    if(startItem > itemCount) {
      startItem = 1;
    }
  }
}



//next button click function
$('#next').click(function() {
  swap('clockwise');
});

//prev button click function
$('#prev').click(function() {
  swap('counter-clockwise');
});

//if any visible items are clicked
$('.items').click(function() {
  if($(this).attr('class') == 'items left-pos') {
     swap('counter-clockwise'); 
  }
  else {
    swap('clockwise'); 
  }
});