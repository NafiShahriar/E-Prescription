(function ($) {
	"use strict";

    jQuery(document).ready(function($){


        $(".embed-responsive iframe").addClass("embed-responsive-item");
        $(".carousel-inner .item:first-child").addClass("active");
        
        $('[data-toggle="tooltip"]').tooltip();


        // preloader
		var preloader = $('.preloader');
		$(window).load(function(){
			preloader.remove();
		});
        
        // For Counter Up Section
        $('.counter').counterUp({
            delay: 1,
            time: 3000
        });


        // For Hover 3d
        $(".project").hover3d({
			selector: ".project__card"
		});


        // For Owl Carosol

		$('.portfoolio').owlCarousel({
		    items:1,
		    loop:true,
		    autoplay:true,
		    autoplayTimeout:1500,
		    autoplayHoverPause:true,
		});


        // For Team Member owl carosol
		$('.owl-carousel').owlCarousel({
		    loop:true,
		    margin:0,
		    nav    : true,
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
		    },
		    smartSpeed :900,
		    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
		});
		
		// For Contact Form
		
	    $(function() {
	        $("body").on("input propertychange", ".floating-label-form-group", function(e) {
	            $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
	        }).on("focus", ".floating-label-form-group", function() {
	            $(this).addClass("floating-label-form-group-with-focus");
	        }).on("blur", ".floating-label-form-group", function() {
	            $(this).removeClass("floating-label-form-group-with-focus");
	        });
	    });

	    // For Google Map
	    var map;
	    $(function () {
		     map = new GMaps({
	            el: '#map',
	            zoom: 17,
	            lat: 25.762314,
	            lng: 88.917774
	        });
	        map.addMarker({
	            lat: 25.762314,
	            lng: 88.917774,
	            title: 'Marker with InfoWindow',
	            infoWindow: {
	                content: '<p>CSB</p>'
	            }
	        });
        });
	    var mapside;
	    $(function () {
		     mapside = new GMaps({
	            el: '#map-page-side',
	            zoom: 17,
	            lat: 25.762314,
	            lng: 88.917774
	        });
	        mapside.addMarker({
	            lat: 25.762314,
	            lng: 88.917774,
	            title: 'Marker with InfoWindow',
	            infoWindow: {
	                content: '<p>CSB</p>'
	            }
	        });
        });


        /* Scroll To Top */
		
        $(window).scroll(function(){
        if ($(this).scrollTop() >= 700) {
            $('.scroll-to-top').fadeIn();
         } else {
            $('.scroll-to-top').fadeOut();
         }
	    });	
        $('.scroll-to-top').click(function(){
          $('html, body').animate({scrollTop : 0},800);
          return false;
        });

        // Wow JS
        new WOW().init();
        // Video Play
        $('.video-play-icon').magnificPopup({type:'video'});


        // For About us page
        $(".about-image").hover3d({
			selector: ".about-thumb",
			shine: true,
			sensitivity: 20,
		});

		        
		window.onload = function() {
		    zoomwall.create(document.getElementById('gallery'));
		};



    });


    jQuery(window).load(function(){
    	// Portfolio galary image
		// zoomwall.create(document.getElementById('gallery'));
    });


}(jQuery));	