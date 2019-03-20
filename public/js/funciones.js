$(document).ready(function() {
    "use strict";

    $(".carousel").carousel({
        interval: 3000
    });

    /* 

	1. Vars and Inits

	*/

    var header = $(".header");
    var ctrl = new ScrollMagic.Controller();

    setHeader();

    $(window).on("resize", function() {
        setHeader();

        setTimeout(function() {
            $(window).trigger("resize.px.parallax");
        }, 375);
    });

    $(document).on("scroll", function() {
        setHeader();
    });

    initMenu();

    /* 

	2. Set Header

	*/

    function setHeader() {
        if ($(window).scrollTop() > 91) {
            header.addClass("scrolled");
        } else {
            header.removeClass("scrolled");
        }
    }

    /* 

	3. Init Menu

	*/

    function initMenu() {
        var hamb = $(".hamburger");
        var menu = $(".menu");
        var menuOverlay = $(".menu_overlay");
        var menuClose = $(".menu_close_container");

        hamb.on("click", function() {
            menu.toggleClass("active");
            menuOverlay.toggleClass("active");
        });

        menuOverlay.on("click", function() {
            menuOverlay.toggleClass("active");
            menu.toggleClass("active");
        });

        menuClose.on("click", function() {
            menuOverlay.toggleClass("active");
            menu.toggleClass("active");
        });
    }

    /* 

	3. Nosotros instalacionesmouseenter
https://codepen.io/gsanchezd/pen/yKZmdr
	*/

    $(".thumb").mouseenter(function() {
        $(".featured").attr("src", $(this).attr("src"));
    });

});
