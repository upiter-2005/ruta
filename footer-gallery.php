
	<footer>
		<div class="container-max">
			<div class="row">
				<div class="col-md-2 first-footer-column">
					<img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.svg" alt="" class="footer-logo">
					<div class="soc">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt=""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/viber.svg" alt=""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt=""></a>
					</div>
				</div>
				<div class="col-md-2 offset-md-2 col-6">
					<span>Навігація</span>
					<a href="/pro-nas">Про нас</a>
                    <a href="/kotedzhi" >Котеджі</a>
					<a href="/galereya">Галерея</a>
		            <a href="/novini">Новини</a>
                    <a href="/pravila-prozhivannya/">Правила проживання</a>
		            <a href="/kontakti">Контакти</a>
				</div>
				<div class="col-md-2 offset-md-1 col-6">
					<span>Готель</span>
					<a href="/cottages/simejni-kotedzhi">Сімейні котеджі</a>
					<a href="/cottages/rodinni-villi">Родинні Вілли</a>
					<a href="/cottages/gutsulski-hatinki">Гуцульські хатинки</a>
					<a href="/cottages/shvejtsarske-shale">Швейцарські шале</a>
				</div>
				<div class="col-md-3 ">
					<span>Готель</span>
					<div class="footer-flex"><img src="<?php echo get_template_directory_uri(); ?>/img/location.svg" alt=""><a href="#">c.Шаян, Хустський р-н.,
							Закарпатська обл.</a></div>
					<div class="footer-flex"><img src="<?php echo get_template_directory_uri(); ?>/img/mail.svg" alt=""><a
							href="mailto:hotel.chervonaruta@gmail.com">hotel.chervonaruta@gmail.com</a></div>
					<div class="footer-flex">
						<img src="<?php echo get_template_directory_uri(); ?>/img/tel.svg" alt="">
						<div class="div">
							<span>Ресторан</span>
							<a href="tel:+380671793595">+38(0671)793595</a>
						</div>
					</div>

					<div class="footer-flex">
						<img src="<?php echo get_template_directory_uri(); ?>/img/tel.svg" alt="">
						<div class="div">
							<span>SPA</span>
							<a href="tel:+380971776161">+38(097)1776161</a>
						</div>
					</div>

					<div class="footer-flex">
						<img src="<?php echo get_template_directory_uri(); ?>/img/tel.svg" alt="">
						<div class="div">
							<span>Готель </span>
							<a href="tel:+380675131580">+38(067)5131580</a>
						</div>
					</div>

				</div>
			</div>
			<div class="row copy">
				<div class="col-md-4">© 2021 Готельно-ресторанний комплекс “Червона Рута”</div>
                <div class="col-md-5">
                <div class="pay">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/viza.svg" alt="" >
                    </div>
                </div>
				<div class="col-md-3">Розроблено <a href="https://vio.agency/" class="vio" target="blank">VIO agency</a> </div>
			</div>
		</div>
	</footer>

    <div id="popupform" class="white-popup mfp-hide">
            <h2>Дякуємо за Вашу заявку!</h2>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" placeholder="Ім’я">
                    </div>
                    <div class="col-md-6">
                        <input type="mail" placeholder="Email">
                    </div>
                    <div class="col-md-12">
                        <textarea name="mes" placeholder="Текст повідомлення"></textarea>
                    </div>
                    <div class="col-md-12">
                    <input type="submit" class="acc-but" value="Надіслати">
                    </div>
                </div>
    </div>

    
    <?php wp_footer(); ?>
  <script>
    $(document).ready(function () {

      var sync1 = $("#sync1");
      var sync2 = $("#sync2");
      var slidesPerPage = 5; //globaly define number of elements per page
      var syncedSecondary = true;

      sync1.owlCarousel({
        items: 1,
        slideSpeed: 2000,
        autoHeight: true,
        nav: true,
        navText : ["<img src='<?php echo get_template_directory_uri(); ?>/img/arr-left.svg'>","<img src='<?php echo get_template_directory_uri(); ?>/img/arr-right2.svg'>"],
        autoplay: false,
        dots: true,
        loop: true,
        responsiveRefreshRate: 200,
        
        // navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
      }).on('changed.owl.carousel', syncPosition);

      sync2
        .on('initialized.owl.carousel', function (e) {
          sync2.find(".owl-item").eq(0).addClass("current");
          $('.counter1').text('1/' + e.item.count);
        })
        .owlCarousel({
          items: slidesPerPage,
          dots: false,
          nav: false,
          //center: true,
          responsive: {
            0:{
                margin: 0,
            },
            768:{
                margin: 5,
            },
              
          },
          smartSpeed: 200,
          slideSpeed: 500,
          slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
          responsiveRefreshRate: 100,
          
        }).on('changed.owl.carousel', syncPosition2);

      function syncPosition(el) {
        //if you set loop to false, you have to restore this next line
        //var current = el.item.index;

        //if you disable loop you have to comment this block
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

        if (current < 0) {
          current = count;
        }
        if (current > count) {
          current = 0;
        }
        $('.counter1').text(current + 1 + '/' + el.item.count);
        //end block

        sync2
          .find(".owl-item")
          .removeClass("current")
          .eq(current)
          .addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();

        if (current > end) {
          sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
          sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
      }

      function syncPosition2(el) {
        if (syncedSecondary) {
          var number = el.item.index;
          sync1.data('owl.carousel').to(number, 100, true);
        }
         
      }

      sync2.on("click", ".owl-item", function (e) {
        e.preventDefault();
        var number = $(this).index();
        sync1.data('owl.carousel').to(number, 300, true);
      });


      $('.nav1-left').on('click', function () {
      sync2.trigger('prev.owl.carousel');
    }); 
    $('.nav1-right').on('click', function () {
      sync2.trigger('next.owl.carousel');
    });









      var sync3 = $("#sync3");
      var sync4 = $("#sync4");
      var slidesPerPage = 5; //globaly define number of elements per page
      var syncedSecondary = true;

      sync3.owlCarousel({
        items: 1,
        slideSpeed: 2000,
        autoHeight: true,
        nav: true,
        autoplay: false,
        dots: true,
        loop: true,
        responsiveRefreshRate: 200,
        navText : ["<img src='<?php echo get_template_directory_uri(); ?>/img/arr-left.svg'>","<img src='<?php echo get_template_directory_uri(); ?>/img/arr-right2.svg'>"],
      }).on('changed.owl.carousel', asyncPosition);

      sync4
        .on('initialized.owl.carousel', function (e) {
          sync4.find(".owl-item").eq(0).addClass("current");
          $('.counter2').text('1/' + e.item.count);
        })
        .owlCarousel({
          items: slidesPerPage,
          dots: false,
          nav: false,
          smartSpeed: 200,
          slideSpeed: 500,
          slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
          responsiveRefreshRate: 100
        }).on('changed.owl.carousel', asyncPosition2);

      function asyncPosition(el) {
        //if you set loop to false, you have to restore this next line
        //var current = el.item.index;

        //if you disable loop you have to comment this block
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

        if (current < 0) {
          current = count;
        }
        if (current > count) {
          current = 0;
        }
        $('.counter2').text(current + 1 + '/' + el.item.count);
        //end block

        sync4
          .find(".owl-item")
          .removeClass("current")
          .eq(current)
          .addClass("current");
        var onscreen = sync4.find('.owl-item.active').length - 1;
        var start = sync4.find('.owl-item.active').first().index();
        var end = sync4.find('.owl-item.active').last().index();

        if (current > end) {
          sync4.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
          sync4.data('owl.carousel').to(current - onscreen, 100, true);
        }
      }

      function asyncPosition2(el) {
        if (syncedSecondary) {
          var number2 = el.item.index;
          sync3.data('owl.carousel').to(number2, 100, true);
        }
         
      }

      sync4.on("click", ".owl-item", function (e) {
        e.preventDefault();
        var number2 = $(this).index();
        sync3.data('owl.carousel').to(number2, 300, true);
      });


      $('.nav2-left').on('click', function () {
      sync4.trigger('prev.owl.carousel');
    }); 
    $('.nav2-right').on('click', function () {
      sync4.trigger('next.owl.carousel');
    });









    var sync5 = $("#sync5");
      var sync6 = $("#sync6");
      var slidesPerPage = 5; //globaly define number of elements per page
      var syncedSecondary = true;

      sync5.owlCarousel({
        items: 1,
        slideSpeed: 2000,
        autoHeight: true,
        nav: true,
        autoplay: false,
        dots: true,
        loop: true,
        responsiveRefreshRate: 200,
        navText : ["<img src='<?php echo get_template_directory_uri(); ?>/img/arr-left.svg'>","<img src='<?php echo get_template_directory_uri(); ?>/img/arr-right2.svg'>"],
      }).on('changed.owl.carousel', bsyncPosition);

      sync6
        .on('initialized.owl.carousel', function (e) {
          sync6.find(".owl-item").eq(0).addClass("current");
          $('.counter3').text('1/' + e.item.count);
        })
        .owlCarousel({
          items: slidesPerPage,
          dots: false,
          nav: false,
          smartSpeed: 200,
          slideSpeed: 500,
          slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
          responsiveRefreshRate: 100
        }).on('changed.owl.carousel', bsyncPosition2);

      function bsyncPosition(el) {
        //if you set loop to false, you have to restore this next line
        //var current = el.item.index;

        //if you disable loop you have to comment this block
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

        if (current < 0) {
          current = count;
        }
        if (current > count) {
          current = 0;
        }
        $('.counter3').text(current + 1 + '/' + el.item.count);
        //end block

        sync6
          .find(".owl-item")
          .removeClass("current")
          .eq(current)
          .addClass("current");
        var onscreen = sync6.find('.owl-item.active').length - 1;
        var start = sync6.find('.owl-item.active').first().index();
        var end = sync6.find('.owl-item.active').last().index();

        if (current > end) {
          sync6.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
          sync6.data('owl.carousel').to(current - onscreen, 100, true);
        }
      }

      function bsyncPosition2(el) {
        if (syncedSecondary) {
          var number3 = el.item.index;
          sync5.data('owl.carousel').to(number3, 100, true);
        }
         
      }

      sync6.on("click", ".owl-item", function (e) {
        e.preventDefault();
        var number3 = $(this).index();
        sync5.data('owl.carousel').to(number3, 300, true);
      });


      $('.nav3-left').on('click', function () {
      sync6.trigger('prev.owl.carousel');
    }); 
    $('.nav3-right').on('click', function () {
      sync6.trigger('next.owl.carousel');
    });





    var sync7 = $("#sync7");
      var sync8 = $("#sync8");
      var slidesPerPage = 5; //globaly define number of elements per page
      var syncedSecondary = true;

      sync7.owlCarousel({
        items: 1,
        slideSpeed: 2000,
        autoHeight: true,
        nav: true,
        autoplay: false,
        dots: true,
        loop: true,
        responsiveRefreshRate: 200,
        navText : ["<img src='<?php echo get_template_directory_uri(); ?>/img/arr-left.svg'>","<img src='<?php echo get_template_directory_uri(); ?>/img/arr-right2.svg'>"],
      }).on('changed.owl.carousel', csyncPosition);

      sync8
        .on('initialized.owl.carousel', function (e) {
          sync8.find(".owl-item").eq(0).addClass("current");
          $('.counter4').text('1/' + e.item.count);
        })
        .owlCarousel({
          items: slidesPerPage,
          dots: false,
          nav: false,
          smartSpeed: 200,
          slideSpeed: 500,
          slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
          responsiveRefreshRate: 100
        }).on('changed.owl.carousel', csyncPosition2);

      function csyncPosition(el) {
        //if you set loop to false, you have to restore this next line
        //var current = el.item.index;

        //if you disable loop you have to comment this block
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

        if (current < 0) {
          current = count;
        }
        if (current > count) {
          current = 0;
        }
        $('.counter4').text(current + 1 + '/' + el.item.count);
        //end block

        sync8
          .find(".owl-item")
          .removeClass("current")
          .eq(current)
          .addClass("current");
        var onscreen = sync8.find('.owl-item.active').length - 1;
        var start = sync8.find('.owl-item.active').first().index();
        var end = sync8.find('.owl-item.active').last().index();

        if (current > end) {
          sync8.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
          sync8.data('owl.carousel').to(current - onscreen, 100, true);
        }
      }

      function csyncPosition2(el) {
        if (syncedSecondary) {
          var number3 = el.item.index;
          sync7.data('owl.carousel').to(number3, 100, true);
        }
         
      }

      sync8.on("click", ".owl-item", function (e) {
        e.preventDefault();
        var number3 = $(this).index();
        sync7.data('owl.carousel').to(number3, 300, true);
      });


      $('.nav4-left').on('click', function () {
      sync8.trigger('prev.owl.carousel');
    }); 
    $('.nav4-right').on('click', function () {
      sync8.trigger('next.owl.carousel');
    });




$('.mini2').on('click', function(){
  $('#sync3, #sync5, #sync7').css('display', 'none');
  $('#sync3, #sync5, #sync7').css('opacity', '0');
  $('#sync1').css('display', 'block');
  $('#sync1').css('opacity', '1');
});


$('.mini4').on('click', function(){
  $('#sync1, #sync5, #sync7').css('display', 'none');
  $('#sync1, #sync5, #sync7').css('opacity', '0');
  $('#sync3').css('display', 'block');
  $('#sync3').css('opacity', '1');
});


$('.mini6').on('click', function(){
  $('#sync3, #sync1, #sync7'). css('display', 'none');
  $('#sync3, #sync1, #sync7').css('opacity', '0');
  $('#sync5'). css('display', 'block');
  $('#sync5').css('opacity', '1');
});


$('.mini8').on('click', function(){
  $('#sync3, #sync5, #sync1'). css('display', 'none');
  $('#sync3, #sync5, #sync1').css('opacity', '0');
  $('#sync7'). css('display', 'block');
  $('#sync7').css('opacity', '1');
});
    });

    
  
   
        window.onscroll = function() {myFunction()};

        var el = $(".menu");
        var sticky =  80;

        function myFunction() {
        if (window.pageYOffset >= sticky) {
            el.addClass("sticky");
        } else {
            el.removeClass("sticky");
        }
        }
    

  </script>
<script>
        $("span.book").on('click', function(ev)  	{
			ev.preventDefault();
				
			// Hide all page content
			var body_divs = userList.querySelectorAll("body > div");
			var body_sections = userList.querySelectorAll("body > section");

			body_divs.forEach(function(div) {
			  div.fadeOut();
			});
			body_sections.forEach(function(section) {
			  section.fadeOut();
			});
            
			// Append a booking_module iframe layout
			$('body').append('   ' +
                '<div id="sbq-iframe-background" class="sbq-layer-800" style="position:fixed; top:0; left:0; width:100%; height:100%;">\n' +
                '\t<div id="sbq-iframe-background-body" style="width:98%; height:98%; margin:1%">\n' +
                '\t\t<iframe name=\'iframe\' id=\'iframe\' src="/iframe/?module_id={{ booking_module.id }}&lang={{ request.LANGUAGE_CODE }}{% if hotel_id %}&hotel_id={{ hotel_id }}{% endif %}{% if date_arrival %}&date_arrival={{ date_arrival }}{% endif %}{% if date_departure %}&date_departure={{ date_departure }}{% endif %}" style="width: 100%; height: 100%">\n' +
                '\t</div>\n' +
                '</div>')

            $('#sbq-iframe-background').on('click', function(e) {
                if (e.target !== this) {
                    return;
                }
				// Flaunt all page content
				var body_divs = userList.querySelectorAll("body > div");
				var body_sections = userList.querySelectorAll("body > section");

				body_divs.forEach(function(div) {
				  div.fadeIn();
				});
				body_sections.forEach(function(section) {
				  section.fadeIn();
				});
				
				// Hide and remove the booking_module iframe layout
				$('#sbq-iframe-background').fadeOut(300)
                $('#sbq-iframe-background').remove()
            });
			
			// Flaunt the booking_module iframe layout
			$('.sbq-iframe-background').fadeIn(300)
		});
	</script>
</body>

</html>