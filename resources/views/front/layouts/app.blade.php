<!DOCTYPE html>
<html data-wf-domain="native-smooth-scroll.webflow.io" data-wf-page="6148be436c517909502ea458" data-wf-site="6148be436c5179b3ed2ea459">
<head>
	<meta charset="utf-8">
	<title>Aniba</title>
	<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
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
    
    //item navigation
    $(window).scroll(function () {
        if ($(window).scrollTop() > section_top) {
            console.log(section_top);
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
        if ($(window).scrollTop() > section_top+150) {
            $(".navbar-center").removeClass("opacity-0");
            $(".navbar-center").addClass("opacity-100");
            $(".navbar-center").addClass("logo-aniba-scale-1");
            $(".navbar-center").removeClass("logo-aniba-scale-2");
            $(".logo-aniba").addClass("logo-aniba-scale");
            $(".logo-aniba").addClass("opacity-0");
            $(".logo-aniba").removeClass("opacity-100");
            $(".navbar").addClass("add-bg-brown");

            
        } else {
            $(".navbar-center").removeClass("opacity-100");
            $(".navbar-center").addClass("opacity-0");
            $(".navbar-center").addClass("logo-aniba-scale-2");
            $(".navbar-center").removeClass("logo-aniba-scale-1");
            $(".logo-aniba").addClass("opacity-100");
            $(".logo-aniba").removeClass("opacity-0");
            $(".logo-aniba").removeClass("logo-aniba-scale");
            $(".navbar").removeClass("add-bg-brown");

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