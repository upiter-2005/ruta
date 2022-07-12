<?php get_header(); ?>


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
		<h1 class="wow fadeInUp  animated">запрошуємо на відпочинок на Закарпаття</h1>
		<p class="wow fadeInUp  animated">Затишні котеджі з дерев’яного брусу, відкриті басейни, spa-комплекс, захоплюючі екскурсії та багато приємних
			сюрпризів чекають на вас!</p>

            <div class="booking">
            <div id="ServioContainer"></div><div id="ServioResult"></div>
            <script src="https://sbj.rkz.io/servio-booking.js?module_id=70&lang=uk"></script>
            </div>
	</section>


	<section class="about">
		<div class="container-max">
			<div class="row">
				<div class="col-md-6">
					<span class="wow fadeInUp  animated">Про готель</span>
					<h2 class="wow fadeInUp  animated">Червона рута</h2>
					<div class="text wow slideInLeft  animated">
                        <p>В мальовничому і гостинному Закарпатті розташувався, віддалений від метушні SPA-готель «Червона Рута». </p>
                        <p>Готель, який відкриває свої двері для мандрівників у пошуках безтурботності. Місце, де ми зустрічаємося, де ми знаходимо щастя в спільних моментах, і де створюємо нові спогади. Занурившись у гармонію чистої природи, душа відкривається знову. Істина стає очевидною.</p>
                        <p>Набагато більше, ніж розкішний готель, ми збудували місце для відпочинку, тільки для Вас. І можливо... Трохи і для нас самих. </p>
                    

					</div>
					<div class="more-block"><a href="/pro-nas">Детальніше <img src="<?php echo get_template_directory_uri(); ?>/img/arr-right.svg" alt=""></a></div>
				</div>
				<div class="col-md-6">
					<div class="owl-carousel owl-theme owl-1">
						<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/k1.jpg" alt=""></div>
						<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/k2.jpg" alt=""></div>
						<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/k3.jpg" alt=""></div>
						<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/k4.jpg" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="showroom">
		<div class="container-max">
			<div class="row">
				<div class="col-md-6 r-padding">
					<span class="wow fadeInUp  animated">Категорії</span>
					<h2 class="wow fadeInUp  animated">Котеджі</h2>

					<div class="showroom-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/k1.jpg" alt="" class="img-responsive">
						<h3 class="wow fadeInUp  animated">Сімейні котеджі </h3>
						<p class="wow fadeInUp  animated">Вишукані котеджі - створені для якісного сімейного відпочинку. А карпатські краєвиди та
							розкішний басейн під відкритим небом, перенесуть вас у казковий світ релаксу.</p>
						<div class="more-block"><a href="/cottages/simejni-kotedzhi">Детальніше <img src="<?php echo get_template_directory_uri(); ?>/img/arr-right.svg" alt=""></a></div>
					</div>
					<div class="showroom-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/k2.jpg" alt="" class="img-responsive">
						<h3 class="wow fadeInUp  animated">Родинні Вілли </h3>
						<p class="wow fadeInUp  animated">Котедж складається з двох поверхів, на яких ми постаралися правильно організувати простір. Саме тому, кожен знайде тут свій власний куточок для відпочинку. Повноцінна кухня та вітальня кімната дозволять вам не тільки готувати, але й влаштувати атмосферний вечір в колі близьких людей.</p>
						<div class="more-block"><a href="/cottages/rodinni-villi">Детальніше <img src="<?php echo get_template_directory_uri(); ?>/img/arr-right.svg" alt=""></a></div>
					</div>
				</div>
				<div class="col-md-6 l-padding">
					<div class="showroom-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/k3.jpg" alt="" class="img-responsive">
						<h3 class="wow fadeInUp  animated">Гуцульські хатинки </h3>
						<p class="wow fadeInUp  animated">Збудовані з натурального дерев'яного зрубу та покриті очеретом. А завдяки інтер'єру, що
							оформлений ексклюзивними меблями закарпатських майстрів, в хатинці затишно і комфортно у
							будь-яку пору року.</p>
						<div class="more-block"><a href="/cottages/gutsulski-hatinki">Детальніше <img src="<?php echo get_template_directory_uri(); ?>/img/arr-right.svg" alt=""></a></div>
					</div>
					<div class="showroom-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/k4.jpg" alt="" class="img-responsive">
						<h3 class="wow fadeInUp  animated">Швейцарське шале </h3>
						<p class="wow fadeInUp  animated">Ідеальне місце, щоб відволіктися від метушні міського життя і насолодитися повною релаксацією в горах.
Основою дизайну інтер’єру є дерево, камінь та природні тканини, які несуть в собі комфорт домашньої атмосфери. А відкритий простір в котеджі дарує необхідне відчуття свободи та усамітнення з природою.
</p>
						<div class="more-block"><a href="/cottages/shvejtsarske-shale">Детальніше <img src="<?php echo get_template_directory_uri(); ?>/img/arr-right.svg" alt=""></a></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="third inverse">
		<div class="container-max">
			<div class="row">
				<div class="col-md-9">
					<span class="wow slideInLeft  animated">Забронюй свою дату</span>
					<h2 class="wow slideInLeft  animated">Швейцарське містечко в "Червоній Руті"</h2>
					<p class="wow slideInLeft  animated">В мальовничому і гостинному Закарпатті, краю, оспіваному у піснях та віршах розташувався
						готельно-ресторанний комплекс “Червона Рута”! Затишні котеджі з дерев’яного брусу, європейський
						сервіс, відкриті басейни, spa-комплекс та багато приємних сюрпризів чекають на вас!Запрошуємо на
						відпочинок в горах!</p>
					<a href="#" class="acc-but">Забронювати дату</a>
				</div>
			</div>
		</div>
	</section>

	<section class="servise  ">
		<div class="container-max">
			<div class="col-12">
				<span>Активний та пасивний відпочинок</span>
				<h2>пОСЛУГИ</h2>
			</div>
		</div>
		<div class="container-fluid no-right-padding">
			<div class=" col-md-10 offset-md-2">
				<div class="owl-carousel owl-theme owl-serv">
                <?php 
                        $args = array( 'posts_per_page' => -1, 'post_type' => 'service'  );
                    ?>
                        <?php if ( have_posts() ) : query_posts($args);
                        while (have_posts()) : the_post(); ?>
                        <div class="item">
                            <div class="serv-img"><a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url( $post, 'large' ); ?>" alt=""></a></div>
						
						<div class="flex-data">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<a href="<?php the_permalink(); ?>" class="more-a">Детальніше <img src="<?php echo get_template_directory_uri(); ?>/img/arr-right.svg" alt=""></a>

						</div>
					</div>          
            <? endwhile; endif; wp_reset_query(); ?>

				

				</div>
			</div>
		</div>
	</section>
<!-- 
	<section class="galery">
		<div class="container-max">
			<div class="row">
				<div class="col-md-6 r-padding">
					<span class="wow slideInLeft  animated">Інформація про найновіші акції та суперпропозиції </span>
					<h2 class="wow slideInLeft  animated">Новини</h2>
					<div class="item wow slideInUp animated"><img src="<?php echo get_template_directory_uri(); ?>/img/new1.jpg" alt="" class="img-responsive"></div>
				</div>
				<div class="col-md-6">
					<div class="more-right d-none -d-md-block"> <a href="#" class="more-a">дивитись всі <img src="<?php echo get_template_directory_uri(); ?>/img/arr-right.svg"
								alt=""></a> </div>
					<div class="new-item-wrapper">

                    <?php 
            $args = array( 'posts_per_page' => 999, 'post_type' => 'news','order' => 'desc',  );
        ?>
        	<?php if ( have_posts() ) : query_posts($args);
           	 while (have_posts()) : the_post(); ?>
                        <div class="new-item item wow slideInUp animated">
							<h3><a href="#"><?php the_title(); ?></a></h3>
							<div class="date"><?php echo get_the_date(); ?></div>
						</div>
                
                <? endwhile; endif; wp_reset_query(); ?>
					</div>
					<div class="more-right d-block -d-md-none"> <a href="#" class="more-a">дивитись всі <img src="<?php echo get_template_directory_uri(); ?>/img/arr-right.svg"
						alt=""></a> </div>
				</div>
			</div>
		</div>
	</section> -->

	<!-- <section class="galery">
		<div class="container-max">
			<div class="row">
				<div class="col-12">
					<span>Фото</span>
					<div>
						<h2>галерея</h2> <a href="#">дивитись всі <img src="<?php echo get_template_directory_uri(); ?>/img/arr-right.svg" alt=""></a>
					</div>
					<div class="owl-carousel owl-theme owl-gal">
						<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/sl1.jpg" alt=""></div>
						<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/sl1.jpg" alt=""></div>
						<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/sl1.jpg" alt=""></div>
						<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/sl1.jpg" alt=""></div>
						<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/sl1.jpg" alt=""></div>
						<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/sl1.jpg" alt=""></div>
						<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/sl1.jpg" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<div class="map">
		<div id="map">
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10586.09698241497!2d24.5485678!3d48.4464701!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8736f6ef19c912a7!2sFoRest!5e0!3m2!1suk!2sua!4v1624381621979!5m2!1suk!2sua" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10666.376693748956!2d23.3475189!3d48.060173!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb9bf42c906704558!2sChervona%20Ruta!5e0!3m2!1sru!2sua!4v1630507489935!5m2!1sru!2sua" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
			<div class="col-md-4 ">
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