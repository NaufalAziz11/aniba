<!DOCTYPE html>
<html data-wf-domain="native-smooth-scroll.webflow.io" data-wf-page="6148be436c517909502ea458" data-wf-site="6148be436c5179b3ed2ea459">
<head>
	<meta charset="utf-8">
	<title>Aniba</title>
	<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/app.scss')}}" rel="stylesheet" type="text/css">
    <link href="favicons/img-favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="favicons/img-webclip.png" rel="apple-touch-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    
    @include('front.layouts.header')
    <div class="navi">
        @include('front.layouts.navigation')
    </div>
    <main>
        {{ $slot }}
    </main>

</body>

<script src="{{asset('js/js-jquery-3.5.1.min.dc5e7f18c8.js')}}" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
{{-- <script src="js/js-jquery-3.5.1.min.dc5e7f18c8.js" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> --}}
<script>
    ! function (o, c) {
			var n = c.documentElement,
				t = " w-mod-";
			n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className +=
				t + "touch")
	}(window, document);

    var topSec = document.querySelectorAll(".top");
    var topPos = $(topSec).offset().top;
    var topBot = $(topSec).outerHeight(true);
    var section_top = $('.top').height();
    var section_1 = $('.section1').height();
    var section_2 = $('.section2').height();
    var section_2 = $('.section3').height();
    
    //item navigation
    $(window).scroll(function () {
        if ($(window).scrollTop() > section_top) {
            console.log((section_top+section_top*0.3) +section_1*0.5);
            // console.log(section_top);
            $(".sec7").addClass("sidebarNavIn");
            $(".sec7").css('pointer-events','none');
            // $(".scrollLink").css('pointer-events','none');
        } else {
            $(".sec7").removeClass("sidebarNavIn");
            $(".sec7").css('pointer-events','');
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > section_top+10) {
            $(".sec6").addClass("sidebarNavIn");
            $(".sec6").css('pointer-events','none');
        } else {
            $(".sec6").removeClass("sidebarNavIn");
            $(".sec6").css('pointer-events','');
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > section_top+20) {
            $(".sec5").addClass("sidebarNavIn");
            $(".sec5").css('pointer-events','none');
        } else {
            $(".sec5").removeClass("sidebarNavIn");
            $(".sec5").css('pointer-events','');
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > section_top+30) {
            $(".sec4").addClass("sidebarNavIn");
            $(".sec4").css('pointer-events','none');
        } else {
            $(".sec4").removeClass("sidebarNavIn");
            $(".sec4").css('pointer-events','');
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > section_top+40) {
            $(".sec3").addClass("sidebarNavIn");
            $(".sec3").css('pointer-events','none');
        } else {
            $(".sec3").removeClass("sidebarNavIn");
            $(".sec3").css('pointer-events','');
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() >section_top+50) {
            $(".sec2").addClass("sidebarNavIn");
            $(".sec2").css('pointer-events','none');
        } else {
            $(".sec2").removeClass("sidebarNavIn");
            $(".sec2").css('pointer-events','');
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > section_top+60) {
            $(".sec1").addClass("sidebarNavIn");
            $(".sec1").css('pointer-events','none');

        } else {
            $(".sec1").removeClass("sidebarNavIn");
            $(".sec1").css('pointer-events','');
        }
    });

    //logo & navbar
    $(window).scroll(function () {
        if ($(window).scrollTop() > section_top *1.15) {
            $(".navbar-center-logo").removeClass("opacity-0");
            $(".navbar-center-logo").addClass("opacity-100");
            $(".navbar-center-text").removeClass("opacity-0");
            $(".navbar-center-text").addClass("opacity-100");
            $(".navbar-center-logo").addClass("logo-aniba-scale-1");
            $(".navbar-center-logo").removeClass("logo-aniba-scale-2");
            
            $(".culinary").addClass("culinary-transition");
            $(".adoni").addClass("adoni-transition");
            $(".head-culinary").removeClass("head-culinary-transition");
            $(".head-adoni").removeClass("head-adoni-transition");

            $(".logo-aniba").addClass("logo-aniba-scale");
            $(".logo-aniba").addClass("opacity-0");
            $(".logo-aniba").removeClass("opacity-100");
            $(".logo-aniba-text").addClass("opacity-0");
            $(".logo-aniba-text").removeClass("opacity-100");

            $(".navbar").addClass("add-bg-brown");
            $(".navbar").removeClass("add-bg-light-brown");

            // $('.star').attr('src','{{asset('images/star2.png')}}');
            $(".navbar-center-logo").removeClass("navbar-transition");
            $(".navbar-start").addClass("opacity-0");


            
        } else {
            $(".navbar-center-logo").removeClass("opacity-100");
            $(".navbar-center-logo").addClass("opacity-0");
            $(".navbar-center-text").removeClass("opacity-100");
            $(".navbar-center-text").addClass("opacity-0");

            $(".navbar-center-logo").addClass("logo-aniba-scale-2");
            $(".navbar-center-logo").addClass("logo-aniba-scale-2");
            $(".navbar-center-logo").removeClass("logo-aniba-scale-1");

            $(".culinary").removeClass("culinary-transition");
            $(".adoni").removeClass("adoni-transition");
            $(".head-culinary").addClass("head-culinary-transition");
            $(".head-adoni").addClass("head-adoni-transition");

            $(".logo-aniba").addClass("opacity-100");
            $(".logo-aniba").removeClass("opacity-0");
            $(".logo-aniba-text").addClass("opacity-100");
            $(".logo-aniba-text").removeClass("opacity-0");
            $(".logo-aniba").removeClass("logo-aniba-scale");
            $(".navbar-center-logo").addClass("navbar-transition");
            $(".navbar").removeClass("add-bg-brown");
            // $('.star').attr('src','{{asset('images/star.png')}}');
           
        }
    });

    //section 1
    $(window).scroll(function () {
        if ($(window).scrollTop() > section_top *1.5 + section_1*0.32) {
            $('.our-story-text').addClass('opacity-1');
            $('.our-story-text').removeClass('opacity-0');
            $('.line').addClass('line-transition');
            $('.box').addClass('visible');
            $('.story-text').addClass('story-text-animation');
            $('.map').addClass('map-animation');
            $('.voyage').addClass('voyage-animation');
            $('.book-button').addClass('book-button-animation');
            // $('.line').removeClass('line-transition');
            $('.star-text').text('Our Story');      
        }else{
            $('.star-text').addClass('opacity-0');
            $('.star-text').removeClass('opacity-1');
            $('.line').removeClass('line-transition');
            $('.box').removeClass('visible');
            $('.story-text').removeClass('story-text-animation');
            $('.map').removeClass('map-animation');
            $('.voyage').removeClass('voyage-animation');
            $('.book-button').removeClass('book-button-animation');
        }
    });

    //section 2
    $(window).scroll(function () {
        if ($(window).scrollTop() > section_top *1.5 + section_1*1.15) {
            $('.star').attr('src','{{asset('images/star2.png')}}');
            $('.star-text').text('Our Chefs');
            $('.star-text').addClass('text-brown');
            $('.star-text').removeClass('text-white');
        }else{
            $('.star').attr('src','{{asset('images/star.png')}}');
            $('.star-text').removeClass('text-brown');
            $('.star-text').addClass('text-white');
        }
        if ($(window).scrollTop() > section_top *1.5 + section_1*1.3) {
            $('.navbar').addClass('add-bg-light-brown');
            $('.navbar-center-logo').attr('src','{{asset('images/aniba2.png')}}');
            $('.head-burger').attr('src','{{asset('images/burger2.png')}}');
        
            $('.line2').addClass('line-transition');
            $('.title1').addClass('left-animation');
            $('.chef-desc1').addClass('left-animation');
            $('.image-chefs1').addClass('right-animation');
            $('.state1').addClass('right-animation');

            // $('#slick-slide00 button').removeClass('opacity-100');
            // $('#slick-slide00 button').removeClass('opacity-0');
            
            // $('#slick-slide01 button').addClass('opacity-0');
            // $('#slick-slide01 button').addClass('opacity-100');

            $('.head-culinary').addClass('text-brown');
            $('.head-adoni').addClass('text-brown');
            $('.head-reservation').addClass('text-brown');
            $('.head-contact').addClass('text-brown');

            $('.head-culinary').removeClass('text-white');
            $('.head-adoni').removeClass('text-white');
            $('.head-reservation').removeClass('text-white');
            $('.head-contact').removeClass('text-white');
            
        }else if($(window).scrollTop() < section_top *1.5 + section_1){
            $('.line2').removeClass('line-transition');
            $('.title1').removeClass('left-animation');
            $('.chef-desc1').removeClass('left-animation');
            $('.image-chefs1').removeClass('right-animation');
            $('.state1').removeClass('right-animation');
           
            $('.myslider').slick('slickGoTo', 0);

            $('.line3').removeClass('line-transition');
            $('.title2').removeClass('left-animation');
            $('.chef-desc2').removeClass('left-animation');
            $('.image-chefs2').removeClass('right-animation');
            $('.state2').removeClass('right-animation');
        }else{
            $('.navbar-center-logo').attr('src','{{asset('images/aniba.png')}}');    
            $('.head-burger').attr('src','{{asset('images/burger.png')}}');
            // $('.star').attr('src','{{asset('images/star.png')}}');
            $('.head-culinary').removeClass('text-brown');
            $('.head-adoni').removeClass('text-brown');
            $('.head-reservation').removeClass('text-brown');
            $('.head-contact').removeClass('text-brown');

            $('.head-culinary').addClass('text-white');
            $('.head-adoni').addClass('text-white');   
            $('.head-reservation').addClass('text-white');
            $('.head-contact').addClass('text-white'); 
            $('.navbar').removeClass('add-bg-light-brown');
        }
       
        $('.myslider').on('afterChange', function(event, slick, currentSlide){
            if (currentSlide == 1) {
                $('.title2').addClass('left-animation');
                $('.chef-desc2').addClass('left-animation');
                $('.image-chefs2').addClass('right-animation');
                $('.state2').addClass('right-animation');
                $('.line3').addClass('line-transition');
    
    
                $('.line2').removeClass('line-transition');
                $('.title1').removeClass('left-animation');
                $('.chef-desc1').removeClass('left-animation');
                $('.image-chefs1').removeClass('right-animation');
                $('.state1').removeClass('right-animation');

                $('#slick-slide00 button').addClass('opacity-100');
                $('#slick-slide01 button').addClass('opacity-0');
                
                $('#slick-slide00 button').removeClass('opacity-0');
                $('#slick-slide01 button').removeClass('opacity-100');

            }else{
                $('.title2').removeClass('left-animation');
                $('.chef-desc2').removeClass('left-animation');
                $('.image-chefs2').removeClass('right-animation');
                $('.state2').removeClass('right-animation');
                $('.line3').removeClass('line-transition');


                $('.line2').addClass('line-transition');
                $('.title1').addClass('left-animation');
                $('.chef-desc1').addClass('left-animation');
                $('.image-chefs1').addClass('right-animation');
                $('.state1').addClass('right-animation');

                $('#slick-slide00 button').removeClass('opacity-100');
                $('#slick-slide01 button').removeClass('opacity-0');
                
                $('#slick-slide00 button').addClass('opacity-0');
                $('#slick-slide01 button').addClass('opacity-100');
                
            }
        });
       
    });



    $(window).scroll(function () {
        if ($(window).scrollTop() > section_top *1.5 + section_1*1.15+ section_2*0.83 ) {
            
        }else if ($(window).scrollTop() > section_top *1.5 + section_1*1.15+ section_2*1.15 ) {
            $(".navbar").addClass("add-bg-brown");
            $(".navbar").removeClass("add-bg-light-brown");
            $('.navbar-center-logo').attr('src','{{asset('images/aniba.png')}}');
            $('.head-burger').attr('src','{{asset('images/burger1.png')}}');

            $('.head-culinary').removeClass('text-brown');
            $('.head-adoni').removeClass('text-brown');
            $('.head-reservation').removeClass('text-brown');
            $('.head-contact').removeClass('text-brown');

            $('.head-culinary').addClass('text-white');
            $('.head-adoni').addClass('text-white');
            $('.head-reservation').addClass('text-white');
            $('.head-contact').addClass('text-white');
        }else{
            // $(".navbar").removeClass("add-bg-brown");
            // $(".navbar").addClass("add-bg-light-brown");
        }
        
    });


    $('.myslider').slick({
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        vertical: true,
        verticalSwiping: true
    });

    $('.accordion-cell').click (function() {
        if ($(this).hasClass('collapsed')) {
            $(this).removeClass('collapsed');
            $(this).siblings().removeClass('expanded');
            $(this).addClass('expanded');
            $(this).siblings().addClass('collapsed');
        }else {
            $(this).toggleClass('expanded');
            $(this).siblings().toggleClass('collapsed');
        }
    });
	
    var sidebarNavButton = document.querySelectorAll(".sidebarNavItem");
    var sidebarNavSection = document.querySelectorAll(".section");

    //checking for position to turn UX nav button orange

    $(sidebarNavSection).each(function (index) {
        var navSec = sidebarNavSection[index];
        var navBut = sidebarNavButton[index];


        $(window).scroll(function () {
            var navPos = $(navSec).offset().top;
            var secBot = navPos + $(navSec).outerHeight(true);

            // if ($(this).scrollTop() > navPos && $(this).scrollTop() < secBot) {
            // 	$(navBut).css("background-color", "#fff");
            // } else {
            // 	$(navBut).css("background-color", "initial");
            // }
        });


    });
</script>

</html>