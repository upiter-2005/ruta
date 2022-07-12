$(function() {


	
	$('.owl-serv').owlCarousel({
		margin: 25,
		autoplay: true,
		autoplayTimeout: 3000,
		autoHeight: true,
		loop:true,
		margin:10,
		navText : ["","<img src='../img/arr-left.svg'>"],
		nav: true,
		dots: true,
		animateOut: 'fadeOut',
		mouseDrag: false,
		touchDrag: false,
		
		responsive:{
			0:{
				items:1,
				navText : ["<img src='../img/arr-left.svg'>","<img src='../img/arr-right2.svg'>"],
			},
			600:{
				items:2
			},
			1000:{
				items:3,
				stagePadding: '-100',
			}
		}
	});
	$('.owl-gal').owlCarousel({
		autoplay: true,
		autoplayTimeout: 1000,
		loop:true,
		margin:10,
		navText : ["<img src='../img/arr-left.svg'>","<img src='../img/arr-right2.svg'>"],
		nav: true,
		dots: true,
		animateOut: 'fadeOut',
		mouseDrag: false,
		touchDrag: false,
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
	$('.owl-1').owlCarousel({
		autoplay: true,
		autoplayTimeout: 1000,
		loop:true,
		margin:10,
		navText : ["<img src='../img/arr-left.svg'>","<img src='../img/arr-right2.svg'>"],
		nav: true,
		dots: true,
		animateOut: 'fadeOut',
		mouseDrag: false,
		touchDrag: false,
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
	$('.owl-first').owlCarousel({
		autoplay: true,
		autoplayTimeout: 1000,
		loop:true,
		margin:10,
		nav:false,
		dots: true,
		animateOut: 'fadeOut',
		mouseDrag: false,
		touchDrag: false,
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

	
	//alert($(window).width());
	$('.block-198').equalHeights();
	$('.auction-item').equalHeights();


	if( $(window).width() > 768 ){
		$('.item-why').equalHeights();
	}
   

	$('.new-box').equalHeights();
	//$('.eq-calc').equalHeights();

	
	$('.open-mob').on('click', function(e){
		$('#moby-mnu').addClass('active-mnu');
		$('body').css('overflow-y', 'hidden');
		e.preventDefault();
	});

	$('.close').on('click', function(e){
		$('#moby-mnu').removeClass('active-mnu');
		$('body').css('overflow-y', 'auto');
		e.preventDefault();
	});
		

		//$("a.to-id").mPageScroll2id();
// 	$(".fa-times").on('click', function(){
// 		$(".mob").css('top', '-150%');
// });
// $(".moby").on('click', function(){
// 	$(".mob").css('top', '0');
// });
 



$('.open-mnu').on('click', function(e){
	$('#mob-list').addClass('active-mnu');
	$('body').css('overflow-y', 'hidden');
	e.preventDefault();
});

$('.close').on('click', function(e){
	$('#mob-list').removeClass('active-mnu');
	$('body').css('overflow-y', 'auto');
	e.preventDefault();
});

	$('.mnu-block a.to-id').on('click', function(){
		$('.mnu-block').removeClass('active-mnu');
		$('body').css('overflow-y', 'auto');
		var id = $(this).attr('href');
		console.log($(this).attr('href'));
		$.mPageScroll2id("scrollTo", id);
	});
	// $(document).on('click', function(e){
	// 	$('.mnu-block').removeClass('active-mnu');
	// });
	
	
	//   $('.mnu-block, .mob-mnu').click(function(e){
	// 	  e.stopPropagation();
	// 	});
	$('select').niceSelect();
	$('.panel-collapse').on('show.bs.collapse', function () {
		$(this).siblings('.panel-heading').addClass('active');
	  });
	
	  $('.panel-collapse').on('hide.bs.collapse', function () {
		$(this).siblings('.panel-heading').removeClass('active');
	  });



	  $('.slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		//arrows: true,
		fade: false,
		asNavFor: '.slider-nav-thumbnails',
		// nextArrow: '<i class="fa fa-angle-right poaarr p-right" aria-hidden="true"></i>',
		// prevArrow: '<i class="fa fa-angle-left poaarr p-left" aria-hidden="true"></i>'
	});
   
	$('.slider-nav-thumbnails').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.slider',
		dots: true,
		focusOnSelect: true,
		//centerMode: true,
		centerPadding: '30px',
	});
	
	//$('.slider a').each(function() { // the containers for all your galleries
		$('.slider').magnificPopup({
			delegate: 'a', // the selector for gallery item
			type: 'image',
			gallery: {
			  enabled:true
			}
		});
//	});
});
