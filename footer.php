<?php if (!is_404()):?>
	<footer>
		<div class="container-max">
			<div class="row">
				<div class="col-md-2 first-footer-column">
					<img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.svg" alt="" class="footer-logo">
					<div class="soc">
						<a href="https://www.instagram.com/hotel.chervonaruta/ "><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt=""></a>
						<!-- <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/viber.svg" alt=""></a> -->
                        <a href="viber://chat?number=+380675131580" class="d-none d-md-block" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/img/viber.svg" alt=""></a>
                        <a href="viber://add?number=380675131580" class="d-block d-md-none" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/img/viber.svg" alt=""></a>
						<a href="https://www.facebook.com/rutashajan "><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt=""></a>
					</div>
                    
				</div>
				<div class="col-md-2 offset-md-2 col-6">
					<span>Навігація</span>
					<a href="/pro-nas">Про нас</a>
                    <a href="/kotedzhi" >Котеджі</a>
					<a href="/galereya">Галерея</a>
		            <a href="/novini">Новини</a>
		            <a href="/pravila-prozhivannya/">Правила проживання</a>
					    <a href="/privacy-policy/">Публічна оферта</a>
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
				<div class="col-md-3">Розроблено <a href="https://vio.agency/" class="vio" target="blank" >VIO agency</a> </div>
			</div>
		</div>
	</footer>
<?php endif; ?>
    <div id="thanck" class="white-popup mfp-hide">
				<h2>Дякуємо за Вашу заявку!</h2>
				<h3>Ми зв’яжемось з Вами найближчим часом</h3>
    </div>
    <form id="popupform" class="white-popup mfp-hide">
            <h2>Забронювати</h2>

            <!-- <div class="booking">
            <div id="ServioContainer"></div><div id="ServioResult"></div>
            </div> -->
                <!-- <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="name" placeholder="Ім’я" required>
                    </div>
                    <div class="col-md-6">
                        <input type="mail" name="mail" placeholder="Email" required>
                    </div>
                    <div class="col-md-12">
                        <textarea name="mes" placeholder="Текст повідомлення"></textarea>
                    </div>
                    <div class="col-md-12">
                    <input type="submit" class="acc-but" value="Надіслати">
                    </div>
                </div> -->
</form>

    
    <?php wp_footer(); ?>

    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcdXaGUocXSzWLLeKTibca2xXosZIkjSk&callback=initMap" defer></script> -->
        
        <!-- <script>
        
            function initMap() {
                
                // The location of Uluru
                const uluru = { lat: 48.06023255548941, lng: 23.3475295154691 };
                // The map, centered at Uluru
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 15,
                    center: uluru,
                    // panControl:false,
                    // zoomControl:false,
                    // mapTypeControl:false,
                    // scaleControl:false,
                    // streetViewControl:false,
                    // overviewMapControl:false,
                    // rotateControl:false,
                    disableDefaultUI: true,
                    styles: [
                    // {
                    //     "featureType": "poi",
                    //     "elementType": "labels.icon",
                    //     "stylers": [
                    //         {
                    //             "visibility": "off"
                    //         }
                    //     ]
                    // },
                    
                    {
            "featureType": "landscape",
            "elementType": "all",
            "stylers": [
                {
                    "hue": "#FFBB00"
                },
                {
                    "saturation": 43.400000000000006
                },
                {
                    "lightness": 37.599999999999994
                },
                {
                    "gamma": 1
                }
            ]
        },
      
        
        {
            "featureType": "road.highway",
            "elementType": "all",
            "stylers": [
                {
                    "hue": "#FFC200"
                },
                {
                    "saturation": -61.8
                },
                {
                    "lightness": 45.599999999999994
                },
                {
                    "gamma": 1
                }
            ]
        },
        {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": "30"
                            },
                            {
                                "visibility": "off"
                            }
                        ]
                    },
        {
            "featureType": "road.arterial",
            "elementType": "all",
            "stylers": [
                {
                    "hue": "#FF0300"
                },
                {
                    "saturation": -100
                },
                {
                    "lightness": 51.19999999999999
                },
                {
                    "gamma": 1
                }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "all",
            "stylers": [
                {
                    "hue": "#FF0300"
                },
                {
                    "saturation": -100
                },
                {
                    "lightness": 52
                },
                {
                    "gamma": 1
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "all",
            "stylers": [
                {
                    "hue": "#0078FF"
                },
                {
                    "saturation": -13.200000000000003
                },
                {
                    "lightness": 2.4000000000000057
                },
                {
                    "gamma": 1
                }
            ]
        }
    
                    ]
                });
            
               
                const marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                    title: "RUTA",
                    icon: 'http://ruta.zelengood.com/wp-content/themes/ruta/img/local.png'
                });
                
                
            }
    </script> -->



   <script>


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
    


        $("form").submit(function() {
        var data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "https://chervona-ruta.com//send.php",
                data: data
            }).done(function() {
                $(this).find("input").val("");
                $(this).trigger("reset");
                    $.magnificPopup.open({
                    items: {
                        src: '#thanck'
                    },
                    type: 'inline',
                    
                    });
            });
            return false;
        });
    	new WOW().init();
    </script> 

<script>
//     $(function() {
//         $("a.book").on('click', function(ev)  	{
// 			ev.preventDefault();
				
// 			// Hide all page content
// 			var body_divs = $("body > div");
//             var body_sections = $("body > section");

// 			body_divs.each(function() {
// 			  $(this).fadeOut();
//              //console.log(div);
// 			});
// 			body_sections.each(function() {
// 			  $(this).fadeOut();
// 			});
            
// 			// Append a booking_module iframe layout
//             //console.log( booking_module.id );
// 			$('body').append('   ' +
//                 '<div id="sbq-iframe-background" class="sbq-layer-800" style="position:fixed; top:0; left:0; width:100%; height:100%;">\n' +
//                 '\t<div id="sbq-iframe-background-body" style="width:98%; height:98%; margin:1%">\n' +
//                 '\t\t<iframe name=\'iframe\' id=\'iframe\' src="https://sbj.rkz.io/uk/hotel_rooms/module_id=70" style="width: 100%; height: 100%">\n' +
//                 '\t</div>\n' +
//                 '</div>');

//             $('#sbq-iframe-background').on('click', function(e) {
//                 if (e.target !== this) {
//                     return;
//                 }
// 				// Flaunt all page content
// 				var body_divs = $("body > div");
//                 var body_sections = $("body > section");

// 				body_divs.each(function() {
//                     $(this).fadeIn();
// 				});
// 				body_sections.each(function() {
//                     $(this).fadeIn();
// 				});
				
// 				// Hide and remove the booking_module iframe layout
// 				$('#sbq-iframe-background').fadeOut(300)
//                 $('#sbq-iframe-background').remove()
//             });
			
// 			// Flaunt the booking_module iframe layout
// 			$('.sbq-iframe-background').fadeIn(300)
// 		});
//     });
	</script>

</body>

</html>