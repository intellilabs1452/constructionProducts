$(document).ready(function() {
	"use strict";
	/*----------------------------------------------
	 -----------Sticky Header  --------------------
	 -------------------------------------------------*/
	function navBaar() {
		var headerHeight = $('.header');
		var stricky_header_top = $('.nav-wrap');
		if (stricky_header_top.length) {
			var stricky_header_top_Offset = headerHeight.height();
			$(window).on('scroll', function() {
				var top_scroll = $(window).scrollTop();
				if (top_scroll > stricky_header_top_Offset) {
					stricky_header_top.addClass('stricky');
				} else {
					stricky_header_top.removeClass('stricky');
				}
			});
		}
	}

	navBaar();
	$(window).on('resize', function() {
		navBaar();
	});
	//===============Mobile nav Function============
	var menu = $('#menu');
	menu.on('click', function() { 
		var navigation = $('.navigation');
		if ($(window).width() <= 767) {
			navigation.slideToggle('normal');
		}
		return false;
	});
	var navigationLi = $('.navigation>ul> li');
	var navigationLink = $('.navigation>ul> li >a');
	var navigationUl = $('.navigation>ul> li >ul');
	navigationLink.on('click', function() {
		if ($(window).width() <= 767) {
			navigationLi.removeClass('on');
			navigationUl.slideUp('normal');
			if ($(this).next().next('ul').is(':hidden') == true) {
				$(this).parent('li').addClass('on');
				$(this).next().next('ul').slideDown('normal');
			}
		}
		//return false;
	});

	//Homepage 3
	/*----------------------------------------------
	 -----------Mobile Menu Function  --------------------
	 -------------------------------------------------*/
	 var menu = $('#menu_toggler');
	 var navigation = $('.mobile__nav');
	 menu.on('click', function() {
		 if ($(window).width() <= 767) {
			 navigation.slideToggle('normal');
		 }
		 return false;
	 });
	 /*----------------------------------------------
	  -----------Dropdown Function  --------------------
	  -------------------------------------------------*/
	 var mobilemenuLink =  $('.mobile-menu> li >a');
	 var mobilemenuLi =  $('.mobile-menu> li');
	 var mobilemenuUl =  $('.mobile-menu> li >ul');
	 mobilemenuLink.on('click', function() {
		 if ($(window).width() <= 991) {
			 mobilemenuLi.removeClass('on');
			 mobilemenuUl.slideUp('normal');
			 if ($(this).next().next('ul').is(':hidden') === true) {
				 $(this).parent('li').addClass('on');
				 $(this).next().next('ul').slideDown('normal');
			 }
		 }
	 });

	/*----------------------------------------------
	 -----------Masonry Function  --------------------
	 -------------------------------------------------*/
	var container_masonry = $(".container-masonry");
	container_masonry.imagesLoaded(function() {
		container_masonry.isotope({
			itemSelector : '.nf-item',
			transitionDuration : '1s',
			percentPosition : true,
			masonry : {
				columnWidth : '.grid-sizer'
			}
		});
	});
// Home1_team
var team_member = $('#team-member');
team_member.owlCarousel({
	loop: true,
	margin: 30,
	nav: true,
	autoplay: false,
	autoplayTimeout: 5000,
	dots: true,
	navText: ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"],
	responsive: {
		0: {
			items: 1
		},
		767: {
			items: 2
		},
		992: {
			items: 4
		},
		1200: {
			items: 4
		}
	}
});
//	home1_Testimonial_Carousel
var home_Testimonial_Carousel = $('.testimonial-home');
home_Testimonial_Carousel.owlCarousel({
	loop: true,
	margin: 10,
	nav: false,
	autoplay: true,
	autoplayTimeout: 5000,
	dots: true,
	navText: ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"],
	responsive: {
		0: {
			items: 1
		},
		767: {
			items: 1
		},
		992: {
			items: 1
		},
		1200: {
			items: 1
		}
	}
});
//=========Items 2 Show=============
var owl_show_2 = $('.owl_show_2');
owl_show_2.owlCarousel({
	loop : true,
	nav : true,
	margin : 15,
	dots : false,
	autoplay : true,
	autoplayTimeout : 3000,
	autoplayHoverPause : true,
	responsive : {
		0 : {
			items : 1
		},
		767 : {
			items : 2
		},
		992 : {
			items : 2
		},
		1200 : {
			items : 2
		}
	},
	navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"]

});

	//	blog-carousel
	var blog_carousel = $('.blog-carousel');
	blog_carousel.owlCarousel({
		loop : true,
		margin : 10,
		dots : true,
		nav : false,
		autoplay : true,
		autoplayTimeout : 3000,
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"],
		responsive : {
			0 : {
				items : 1,
			
			},
			767 : {
				items : 1,
				
			},
			992 : {
				items : 1

			},
			1200 : {
				items : 1
			}
		}
	});
	/*----------------------------------------------
	 -----------Masonry filter Function  --------------------
	 -------------------------------------------------*/
	var container_filter = $(".container-filter");
	container_filter.on("click", ".categories", function() {
		var a = $(this).attr("data-filter");
		container_masonry.isotope({
			filter : a
		});

	});
	/*----------------------------------------------
	 -----------Masonry filter Active Function  --------------------
	 -------------------------------------------------*/
	container_filter.each(function(e, a) {
		var i = $(a);
		i.on("click", ".categories", function() {
			i.find(".active").removeClass("active"), $(this).addClass("active");
		});
	});

	/*----------------------------------------------
	 -----------Masonry Grid view Function  --------------------
	 -------------------------------------------------*/
	var container_grid = $(".container-grid");
	container_grid.imagesLoaded(function() {
		container_grid.isotope({
			itemSelector : ".nf-item",
			layoutMode : "fitRows"
		});
	});

	/*----------------------------------------------
	 -----------Masonry Grid Filter Function  --------------------
	 -------------------------------------------------*/
	container_filter.on("click", ".categories", function() {
		var e = $(this).attr("data-filter");
		container_grid.isotope({
			filter : e
		});
	});

	/*----------------------------------------------
	 -----------isotope Function  --------------------
	 -------------------------------------------------*/
	var isotop_grid = $('#isotope');
	if (isotop_grid.length) {
		// init Isotope
		var $grid = isotop_grid.isotope({
			itemSelector : 'li	',
			percentPosition : true,
			layoutMode : 'fitRows',
			fitRows : {
				gutter : 0
			}
		});
	}
	/*----------------------------------------------
	 -----------Light Function  --------------------
	 -------------------------------------------------*/
	var fLight = $(".fancylight");
	if (fLight.length) {
		fLight.fancybox({
			openEffect : 'elastic',
			closeEffect : 'elastic',
			helpers : {
				media : {}
			}
		});
	}

	/*----------------------------------------------
	 -----------Counter Function  --------------------
	 -------------------------------------------------*/
	var counter = $('.counter');
	if (counter.length) {
		counter.appear(function() {
			counter.each(function() {
				var e = $(this),
				    a = e.attr("data-count");
				$({
					countNum : e.text()
				}).animate({
					countNum : a
				}, {
					duration : 8e3,
					easing : "linear",
					step : function() {
						e.text(Math.floor(this.countNum));
					},
					complete : function() {
						e.text(this.countNum);
					}
				});
			});
		});
	}

	//=============Tab Function=============
	$('.tab_funct').on('click', function() {
		$('.tab_funct').removeClass('active');
		$(this).addClass('active');
		var tabShow = $(this).data('tab');
		$('.service-test').css('display', 'none');
		$('.' + tabShow).css('display', 'block');
		$('.service-test').removeClass('active');
		var data_text = $(this).data('tab');
		setTimeout(function() {
			$('.home_one').find('.' + data_text).addClass('active');
		}, 50);
	});

	/*----------------------------------------------
	-----------Slider Function  --------------------
	-------------------------------------------------*/
	//Banner Slider
	var banner_slide = $(".banner_slide");
	banner_slide.owlCarousel({
		loop : true,
		margin : 10,
		nav : true,
		dots : false,
		center : true,
		autoplay : true,
		autoplayTimeout : 2000,
		autoplayHoverPause : true,
		responsive : {
			0 : {
				items : 1

			},
			600 : {
				items : 1

			},
			1000 : {
				items : 1

			}
		},
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"]

	});
	//Blog Slider
	var itemCarousel_1 = $(".item1-carousel");
	itemCarousel_1.owlCarousel({
		loop : true,
		margin : 10,
		nav : true,
		dots : false,
		center : true,
		autoplay : true,
		autoplayTimeout : 2000,
		autoplayHoverPause : true,
		responsive : {
			0 : {
				items : 1

			},
			600 : {
				items : 1

			},
			1000 : {
				items : 1

			}
		},
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"]

	});

	/*----------------------------------------------
	 -----------Home1 project slid  --------------------
	 -------------------------------------------------*/
	var project_slide = $('.project_slide');
	project_slide.owlCarousel({
		loop : true,
		margin : 10,
		nav : true,
		autoplay : true,
		autoplayTimeout : 3000,
		autoplayHoverPause : true,
		dots : false,
		center : false,
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"],
		responsive : {
			0 : {
				items : 1
			},
			767 : {
				items : 1
			},
			992 : {
				items : 1
			},
			1200 : {
				items : 1
			}
		}
	});

	//	home_Testimonial Carousel
	var home_testimonial = $('#testimonial');
	home_testimonial.owlCarousel({
		loop : true,
		margin : 10,
		nav : true,
		dots : false,
		center : false,
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"],
		responsive : {
			0 : {

				nav : false,
				items : 1
			},
			768 : {
				
				items : 1
			},
			992 : {
				items : 2
			},
			1200 : {
				items : 2
			}
		}
	});

	//home_video_popup
	var popupJs = $(".popup-youtube");
	if (popupJs.length) {
		popupJs.magnificPopup({
			disableOn : 700,
			type : 'iframe',
			mainClass : 'mfp-fade',
			removalDelay : 160,
			preloader : false,
			fixedContentPos : true,
			closeBtnInside : false
		});
	}

	//	Releted Project slider
	var relatedProject = $("#related-project");
	relatedProject.owlCarousel({
		loop : true,
		nav : true,
		dots : false,
		margin : 30,
		responsive : {
			0 : {
				items : 1
			},
			767 : {
				items : 2
			},
			992 : {
				items : 2
			},
			1200 : {
				items : 3
			}
		},
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"]

	});

	//	About page Carousel
	var carouselSlider = $('.abt-block__slider');
	carouselSlider.owlCarousel({
		loop : true,
		margin : 10,
		nav : false,
		dots : true,
		center : false,
		responsive : {
			0 : {
				items : 1
			},
			767 : {
				items : 1
			},
			992 : {
				items : 1
			},
			1200 : {
				items : 1
			}
		}
	});

	//services-items
	var historyBlock = $('.team_carousel');
	historyBlock.owlCarousel({
		loop : true,
		margin : 0,
		nav : true,
		dots : false,
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"],
		responsive : {
			0 : {
				items : 1
			},
			767 : {
				items : 2
			},
			992 : {
				items : 4
			},
			1200 : {
				items : 4
			}
		}
	});

	//home_testimonial_two_show
	var two_Show = $('.testimonial_silder');
	two_Show.owlCarousel({
		loop : true,
		margin : 30,
		nav : false,
		dots : false,
		center : false,
		autoplay : true,
		autoplayTimeout : 3000,
		autoplayHoverPause : true,
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"],
		responsive : {
			0 : {
				items : 1
			},
			767 : {
				items : 1
			},
			992 : {
				items : 2
			},
			1200 : {
				items : 2
			}
		}
	});

	// home_client
	var client_carousel = $(".client-carousel");
	client_carousel.owlCarousel({
		loop : true,
		margin : 10,
		nav : true,
		dots : true,
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"],
		responsive : {
			0 : {
				items : 1
			},
			767 : {
				items : 3
			},
			992 : {
				items : 6
			},
			1200 : {
				items : 6
			}
		}
	});

	var carouselSlider = $('.carousel-slider');
	carouselSlider.owlCarousel({
		loop : true,
		margin : 30,
		nav : true,
		dots : false,
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"],
		responsive : {
			0 : {
				items : 1
			},
			767 : {
				items : 2
			},
			992 : {
				items : 3
			},
			1200 : {
				items : 3
			}
		}
	});

	// testimonial_slid home2
	var testimonial_slid = $('.testimonial_slid');
	testimonial_slid.owlCarousel({
		loop : true,
		margin : 20,
		nav : true,
		dots : false,
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"],
		responsive : {
			0 : {
				items : 1
			},
			767 : {
				items : 2
			},
			992 : {
				items : 3
			},
			1200 : {
				items : 3
			}
		}
	});

	/*==============================================================
	 Project_pop_home1
	 ==============================================================*/
	var popup_btn = $('.popup-btn');
	if (popup_btn.length) {
		$('.popup-btn');
		popup_btn.magnificPopup({
			type : 'image',
			gallery : {
				enabled : true
			}
		});
	}
	/*----------------------------------------------
	 -----------Search Input  --------------------
	 -------------------------------------------------*/
	var searchDropdown = $("#searchDropdown");
	var dropdownInput = $('.dropdown-input');
	searchDropdown.on('click', function() {
		dropdownInput.show();
	});
	var closeInput = $(".close-input");
	closeInput.on('click', function() {
		dropdownInput.hide();
	});
	/*----------------------------------------------
	 ----------- Loader Function  --------------------
	 -------------------------------------------------*/
	$(window).on('load', function() {
		var preloader = $("#preloader");
		preloader.delay(500).fadeOut();
	});
	/*----------------------------------------------
	 ----------- Map Function  --------------------
	 -------------------------------------------------*/
	var mapWrap = $('#map');
	if (mapWrap.length) {
		google.maps.event.addDomListener(window, 'load', initialize);

	}
});

/*-----------------------------------------------
 -----------  Map Color Theme Function  ----------
 -------------------------------------------------*/
var mapWrap = $('#map');
if (mapWrap.length) {
	var myCenter = new google.maps.LatLng(51.538308, -0.3817765);
	function initialize() {
		var mapProp = {
			center : myCenter,
			zoom : 15,
			mapTypeId : google.maps.MapTypeId.ROADMAP,
			scrollwheel : false,
			styles : [{
				elementType : 'geometry',
				stylers : [{
					color : '#242f3e'
				}]
			}, {
				elementType : 'labels.text.stroke',
				stylers : [{
					color : '#242f3e'
				}]
			}, {
				elementType : 'labels.text.fill',
				stylers : [{
					color : '#746855'
				}]
			}, {
				featureType : 'administrative.locality',
				elementType : 'labels.text.fill',
				stylers : [{
					color : '#d59563'
				}]
			}, {
				featureType : 'poi',
				elementType : 'labels.text.fill',
				stylers : [{
					color : '#d59563'
				}]
			}, {
				featureType : 'poi.park',
				elementType : 'geometry',
				stylers : [{
					color : '#263c3f'
				}]
			}, {
				featureType : 'poi.park',
				elementType : 'labels.text.fill',
				stylers : [{
					color : '#6b9a76'
				}]
			}, {
				featureType : 'road',
				elementType : 'geometry',
				stylers : [{
					color : '#38414e'
				}]
			}, {
				featureType : 'road',
				elementType : 'geometry.stroke',
				stylers : [{
					color : '#212a37'
				}]
			}, {
				featureType : 'road',
				elementType : 'labels.text.fill',
				stylers : [{
					color : '#9ca5b3'
				}]
			}, {
				featureType : 'road.highway',
				elementType : 'geometry',
				stylers : [{
					color : '#746855'
				}]
			}, {
				featureType : 'road.highway',
				elementType : 'geometry.stroke',
				stylers : [{
					color : '#1f2835'
				}]
			}, {
				featureType : 'road.highway',
				elementType : 'labels.text.fill',
				stylers : [{
					color : '#f3d19c'
				}]
			}, {
				featureType : 'transit',
				elementType : 'geometry',
				stylers : [{
					color : '#2f3948'
				}]
			}, {
				featureType : 'transit.station',
				elementType : 'labels.text.fill',
				stylers : [{
					color : '#d59563'
				}]
			}, {
				featureType : 'water',
				elementType : 'geometry',
				stylers : [{
					color : '#17263c'
				}]
			}, {
				featureType : 'water',
				elementType : 'labels.text.fill',
				stylers : [{
					color : '#515c6d'
				}]
			}, {
				featureType : 'water',
				elementType : 'labels.text.stroke',
				stylers : [{
					color : '#17263c'
				}]
			}]
		};
		var map = new google.maps.Map(document.getElementById("map"), mapProp);

		var marker = new google.maps.Marker({
			position : myCenter,
			icon : {
				url : 'assets/images/map-pin.png',
				size : new google.maps.Size(90, 111), //marker image size
				origin : new google.maps.Point(0, 0), // marker origin
				anchor : new google.maps.Point(35, 86) // X-axis value (35, half of marker width) and 86 is Y-axis value (height of the marker).
			}
		});

		marker.setMap(map);

	}

	function reloadStylesheets() {
		var queryString = 'reload=' + new Date().getTime();
		$('link[rel="stylesheet"]').each(function() {
			if (this.href.indexOf('?') === -1) {
				this.href = this.href + '&' + queryString;
			} else {
				this.href = this.href + '?' + queryString;
			}
		});
	}

}
