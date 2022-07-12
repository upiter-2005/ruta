<?php get_header(); ?>



<?php
        // Start the loop.
        while ( have_posts() ) : the_post(); ?>
  
 
  <section class="baner-first serv-baner" style='background-image: url(<?php echo get_the_post_thumbnail_url( $post, 'full' ); ?>);'>
     
                <h1><?php the_title(); ?></h1>
                <img src="<?php the_field('ico'); ?>" alt="">
        
	</section>


	<section class="about">
		<div class="container-max">
			<div class="row">
				<div class="col-md-7">
					<span>Послуги</span>
					<h2><?php the_title(); ?></h2>
					<div class="text">
                    <?php the_field('serv-text'); ?>
					</div>

				</div>
				<div class="col-md-5">
					<img src=" <?php the_field('serv-foto'); ?>" alt="" class="img-responsive">
				</div>
			</div>
		</div>
	</section>



	<!-- <section class="serv d-none d-sm-block">
		<div class="container-max">
			<div class="row">
				<div class="col-12">
					<div class="d-flex flex-galery align-items-center">
						<h2>Вартість послуг</h2> <a href="#popupform" class="acc-but serv-want">Забронювати </a>
					</div>
					<div class="table">
						<div class="title-table">
							<div>Дорослі</div>
							<div>2 год/день (грн)</div>
							<div>3 год/день (грн)</div>
							<div>4 год/день (грн)</div>
							<div>Цілий день (грн)</div>
						</div>
						<div class="title-days">
							<div>У будні дні</div>
							<div>300</div>
							<div>400</div>
							<div>450</div>
							<div>500</div>
						</div>
						<div class="title-days">
							<div>У вихідні дні</div>
							<div>350</div>
							<div>450</div>
							<div>500</div>
							<div>550</div>
						</div>

						<div class="title-table">
							<div>Діти від 5-ти до 15-ти років</div>
							<div>2 год/день (грн)</div>
							<div>3 год/день (грн)</div>
							<div>4 год/день (грн)</div>
							<div>Цілий день (грн)</div>
						</div>
						<div class="title-days">
							<div>У будні дні</div>
							<div>175</div>
							<div>255</div>
							<div>250</div>
							<div>275</div>
						</div>
						<div class="title-days">
							<div>У вихідні дні</div>
							<div>200</div>
							<div>250</div>
							<div>275</div>
							<div>300</div>
						</div>

					</div>

					<div class="table-remark">
						<span>* Вартість додаткової хвилини після замовленого тарифу складає: 1хв - 2,50 грн</span>
						<span>* Діти до 5-ти років - безкоштовно</span>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="serv-mob d-block d-sm-none">
		<div class="container-max">
			<div class="row">
				<div class="col-12">
					<div class="d-flex flex-column flex-galery align-items-start">
						<h2>Вартість послуг</h2> <a href="#popupform" class="acc-but serv-want">Забронювати </a>
					</div>
					<div class="table">
						<div class="mob-row bottom-striped">
							<div>Дорослі</div>
							<div class="acc-font">У будні дні</div>
							<div class="acc-font">У вихідні дні</div>
						</div>
						<div class="mob-row">
							<div>2 год/день (грн)</div>
							<div>300</div>
							<div>350</div>
						</div>
						<div class="mob-row">
							<div>3 год/день (грн)</div>
							<div>400</div>
							<div>450</div>
						</div>
						<div class="mob-row">
							<div>4 год/день (грн)</div>
							<div>450</div>
							<div>500</div>
						</div>
						<div class="mob-row">
							<div>Цілий день (грн)</div>
							<div>500</div>
							<div>550</div>
						</div>

					</div>
					

					<div class="table">
						<div class="mob-row bottom-striped">
							<div>Діти від 5-ти до 15-ти років</div>
							<div class="acc-font">У будні дні</div>
							<div class="acc-font">У вихідні дні</div>
						</div>
						<div class="mob-row">
							<div>2 год/день (грн)</div>
							<div>175</div>
							<div>200</div>
						</div>
						<div class="mob-row">
							<div>3 год/день (грн)</div>
							<div>255</div>
							<div>250</div>
						</div>
						<div class="mob-row">
							<div>4 год/день (грн)</div>
							<div>250</div>
							<div>275</div>
						</div>
						<div class="mob-row">
							<div>Цілий день (грн)</div>
							<div>275</div>
							<div>300</div>
						</div>
					</div>

					<div class="table-remark">
						<span>* Вартість додаткової хвилини після замовленого тарифу складає: 1хв - 2,50 грн</span>
						<span>* Діти до 5-ти років - безкоштовно</span>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	
	 <section class="galery">
		<div class="container-max">
			<div class="row">
				<div class="col-12">
					
					<div class="owl-carousel owl-theme owl-gal">
                    <?php 
                        $gall_arr = get_field( 'serv-slider' ); 
                        $gall_arr_imgs = explode(",", $gall_arr);
                    ?>

                    <?php
                                    
                        foreach($gall_arr_imgs as $img_id){
                        $src = wp_get_attachment_image_src($img_id, 'large'); ?>
                            <div class="item"><img src="<?php echo $src[0]; ?>" alt=""></div>
                              
                        <?php   }
                    ?>
						<!-- <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/a1.jpg" alt=""></div>
						<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/a2.jpg" alt=""></div>
						<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/a1.jpg" alt=""></div>
						<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/a2.jpg" alt=""></div>
						<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/a1.jpg" alt=""></div>
						<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/a2.jpg" alt=""></div> -->
					</div>
				</div>
			</div>
		</div>
	</section> 


    <section class="column-text">
        <div class="container-max">
            <div class="row">
                <div class="col-md-6">
                   <?php the_field('servt1'); ?>
                </div>
                <div class="col-md-6">
                    <?php the_field('servt2'); ?>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
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
							<input type="text" placeholder="Ім’я"><input type="text" placeholder="Email">
							<textarea name="" placeholder="Текст повідомлення"></textarea>
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
						<input type="text" placeholder="Ім’я"><input type="text" placeholder="Email">
						<textarea name="" placeholder="Текст повідомлення"></textarea>
						<input type="submit" class="acc-but">
					</form>
				</div>

			</div>
		</div>
	</div>



  

<?php get_footer(); ?>

	
