<?php
/**
 * Template Name: Template About(About)
 */
get_header(); ?>

<section class="baner-first">

		<div class="owl-carousel owl-theme owl-first">
        <?php 
            $args = array( 'posts_per_page' => 999, 'post_type' => 'slides'  );
        ?>
        	<?php if ( have_posts() ) : query_posts($args);
           	 while (have_posts()) : the_post(); ?>

            <div class="item"><img src="<?php the_field('sld-fon');?>" alt=""></div>
				            
                <? endwhile; endif; wp_reset_query(); ?>
		</div>
		<h1>про готель</h1>
		<div class="baner-icons">
            <div class="icon-item">
				<div><img src="<?php echo get_template_directory_uri(); ?>/img/hotel.svg" alt=""></div>
				<div>  <h3>Готель</h3>
					<span>Затишні світлі котеджі, гуцульські хатинки, вілли, шале</span></div>
            </div>
            <div class="icon-item">
				<div> <img src="<?php echo get_template_directory_uri(); ?>/img/rest.svg" alt=""></div>
				<div><h3>Ресторан</h3>
					<span>Колоритна місцева та вишукана європейська кухні</span></div>
            </div>
            <div class="icon-item">
				<div><img src="<?php echo get_template_directory_uri(); ?>/img/hotel.svg" alt=""></div>
				<div><h3>SPA</h3>
					<span>Великий басейн, сауна, SPA-програми та масажний кабінет</span></div>
            </div>
        </div>
	</section>


	<section class="about">
		<div class="container-max">
			<div class="row">
				<div class="col-md-6">
					<span>Про готель</span>
					<h2>Червона рута</h2>
					<div class="text">
                    <p>В мальовничому і гостинному Закарпатті розташувався, віддалений від метушні SPA-готель «Червона Рута». </p>
                        <p>Готель, який відкриває свої двері для мандрівників у пошуках безтурботності. Місце, де ми зустрічаємося, де ми знаходимо щастя в спільних моментах, і де створюємо нові спогади. Занурившись у гармонію чистої природи, душа відкривається знову. Істина стає очевидною.</p>
                        <p>Набагато більше, ніж розкішний готель, ми збудували місце для відпочинку, тільки для Вас. І можливо... Трохи і для нас самих. </p>
					</div>
			
				</div>
				<div class="col-md-6">
					<div class="owl-carousel owl-theme owl-1">
                    <?php 
            $args = array( 'posts_per_page' => 999, 'post_type' => 'slides_about'  );
        ?>
        	<?php if ( have_posts() ) : query_posts($args);
           	 while (have_posts()) : the_post(); ?>

            <div class="item"><img src="<?php the_field('sld_about');?>" alt=""></div>
				            
                <? endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>



	<section class="third inverse about-third">
		<div class="container-max">
			<div class="row">
				<div class="col-md-9">
					<span>Забронюй свою дату</span>

                    <?php 
            $args = array( 'posts_per_page' => 1, 'post_type' => 'about_info'  );
        ?>
        	<?php if ( have_posts() ) : query_posts($args);
           	 while (have_posts()) : the_post(); ?>

                <h2><?php the_title();?></h2>
					<p><?php the_field('text');?></p>
				            
                <? endwhile; endif; wp_reset_query(); ?>

					
					<a href="/zabronyuvati/" class="acc-but">Забронювати дату</a>
				</div>
			</div>
		</div>
	</section>


	

	 <section class="galery">
		<div class="container-max">
			<div class="row">
				<div class="col-12">
					<span>Фото</span>
					<div class="d-flex flex-galery">
						<h2>галерея</h2> <a href="/galereya/">дивитись всі <img src="<?php echo get_template_directory_uri(); ?>/img/arr-right.svg" alt=""></a>
					</div>
					<div class="owl-carousel owl-theme owl-gal">
                    <?php 
                        $gall_arr = get_field( 'about_gal' ); 
                        $gall_arr_imgs = explode(",", $gall_arr);
                    ?>

                    <?php
                                    
                        foreach($gall_arr_imgs as $img_id){
                        $src = wp_get_attachment_image_src($img_id, 'large'); ?>
                            
                            <div class="item">
                                <img src="<?php echo $src[0]; ?>" alt="">
                            </div>
                        <?php   }
                    ?>
						
					</div>
				</div>
			</div>
		</div>
	</section> 

	<div class="map">
		<div id="map">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1453.9659917464685!2d23.346438853095794!3d48.0603415796688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4737884edcaa2017%3A0xb9bf42c906704558!2sChervona%20Ruta!5e0!3m2!1sru!2sua!4v1622755763716!5m2!1sru!2sua"
				width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>


		<div class="container-max d-none d-md-block">
			<div class="row">
				<div class="col-md-4 offset-md-8">
					<div class="abs-form">
						<form action="">
							<h2>зв’язатись з нами</h2>
							<input type="text" placeholder="Ім’я" name="name" required><input type="text" placeholder="Email" name="mail" required>
						<textarea name="mes" placeholder="Текст повідомлення"></textarea>
						<input type="submit" class="acc-but">
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>


	<div class="container-max d-block d-md-none">
		<div class="row">
			<div class="col-md-4">
				<div class="abs-form">
					<form action="">
						<h2>зв’язатись з нами</h2>
						<input type="text" placeholder="Ім’я" name="name" required><input type="text" placeholder="Email" name="mail" required>
						<textarea name="mes" placeholder="Текст повідомлення"></textarea>
						<input type="submit" class="acc-but">
					</form>
				</div>

			</div>
		</div>
	</div>
<?php get_footer(); ?>