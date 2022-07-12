<?php
/**
 * Template Name: Template Booking(Booking)
 */
get_header(); ?>

<section class="baner-first">

		<div class="owl-carousel owl-theme owl-first">
			<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/f1.jpg" alt=""></div>
			<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/f2.jpg" alt=""></div>
		</div>
		<h1>Забронювати</h1>
        <div class="booking booking-position">
            <div id="ServioContainer"></div><div id="ServioResult"></div>
            <script src="https://sbj.rkz.io/servio-booking.js?module_id=70&lang=uk"></script>
        </div>
		
	</section>



<?php get_footer(); ?>