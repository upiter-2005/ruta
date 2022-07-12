<?php get_header(); ?>



<?php
        // Start the loop.
        while ( have_posts() ) : the_post(); ?>
  
 
  <section class="baner-first single-baner" style='background-image: url(<?php echo get_the_post_thumbnail_url( $post, 'full' ); ?>);'>
        <div class="container-max">
            <div class="single-data">
                <span>
                <?php
                    $terms = get_the_terms( $post->ID, 'cottages' );
                    if( $terms ){
                        $term = array_shift( $terms );
                        echo $term->name;
                    }
                ?>
                    </span>

                <h1><?php the_title(); ?></h1>
                <div class="price"><span>від</span> <?php the_field('price');?> <span>грн / доба</span> </div>
                <div class="hata-data">
                    <span><?php the_field('bullet_1'); ?></span>
                    <span><?php the_field('bullet_2'); ?></span>
                    <span><?php the_field('bullet_3'); ?></span>
                    <span><?php the_field('bullet_4'); ?></span> 
                </div>
            </div>
        </div>
        <div class="booking">
            <div id="ServioContainer"></div><div id="ServioResult"></div><script src="https://sbj.rkz.io/servio-booking.js?module_id=70&lang=uk"></script>
            </div>
		
	</section>

    <section class="comfort">
        <div class="container-max">
            <h3>Зручності у хатинці:</h3>
            <div class="row">
<?php
// переменные
$colors = get_field('comfort');
// прооверка
if( $colors && in_array('c1', $colors) ): ?>
    <div class="col-md-4">
        <div class="comfort-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/comfort/conder.svg" alt="">
            <span>кондиціонер</span>
        </div>
    </div>
<?php endif; ?>

<?php
if( $colors && in_array('c2', $colors) ): ?>
   <div class="col-md-4">
        <div class="comfort-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/comfort/spa.svg" alt="">
            <span>SPA (2 год)</span>
        </div>
    </div>
<?php endif; ?>

<?php
if( $colors && in_array('c3', $colors) ): ?>
   <div class="col-md-4">
                    <div class="comfort-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/comfort/fen.svg" alt="">
                        <span>фен</span>
                    </div>
                </div>
<?php endif; ?>

<?php
if( $colors && in_array('c4', $colors) ): ?>
   <div class="col-md-4">
                    <div class="comfort-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/comfort/tv.svg" alt="">
                        <span>LCD телевізор</span>
                    </div>
                </div>
<?php endif; ?>

<?php
if( $colors && in_array('c5', $colors) ): ?>
   <div class="col-md-4">
                    <div class="comfort-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/comfort/wi-fi.svg" alt="">
                        <span>Wi-Fi</span>
                    </div>
                </div>
<?php endif; ?>

<?php
if( $colors && in_array('c6', $colors) ): ?>
        <div class="col-md-4">
            <div class="comfort-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/comfort/wieght.svg" alt="">
                <span>ваги</span>
            </div>
        </div>
<?php endif; ?>

<?php
if( $colors && in_array('c7', $colors) ): ?>
        <div class="col-md-4">
                    <div class="comfort-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/comfort/sofa.svg" alt="">
                        <span>м’який куток для відпочинку</span>
                    </div>
                </div>
<?php endif; ?>

<?php
if( $colors && in_array('c8', $colors) ): ?>
        <div class="col-md-4">
                    <div class="comfort-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/comfort/tualet.svg" alt="">
                        <span>туалет</span>
                    </div>
                </div>
<?php endif; ?>
<?php
if( $colors && in_array('c9', $colors) ): ?>
         <div class="col-md-4">
                    <div class="comfort-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/comfort/refregerator.svg" alt="">
                        <span>холодильник</span>
                    </div>
                </div>
<?php endif; ?>
<?php
if( $colors && in_array('c10', $colors) ): ?>
         <div class="col-md-4">
                    <div class="comfort-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/comfort/bed.svg" alt="">
                        <span>двоспальне ліжко</span>
                    </div>
                </div>
<?php endif; ?>
<?php
if( $colors && in_array('c11', $colors) ): ?>
        <div class="col-md-4">
                    <div class="comfort-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/comfort/dush.svg" alt="">
                        <span>душ</span>
                    </div>
                </div>
<?php endif; ?>
<?php
if( $colors && in_array('c12', $colors) ): ?>
        <div class="col-md-4">
            <div class="comfort-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/comfort/microvawe.svg" alt="">
                <span>мікрохвильова піч</span>
            </div>
        </div>
<?php endif; ?>
<?php
if( $colors && in_array('c13', $colors) ): ?>
        <div class="col-md-4">
                    <div class="comfort-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/comfort/sushka.svg" alt="">
                        <span>сушарка для одягу</span>
                    </div>
                </div>
<?php endif; ?>
<?php
if( $colors && in_array('c14', $colors) ): ?>
        <div class="col-md-4">
                    <div class="comfort-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/comfort/bide.svg" alt="">
                        <span>біде</span>
                    </div>
                </div>
<?php endif; ?>
<?php
if( $colors && in_array('c15', $colors) ): ?>
         <div class="col-md-4">
                    <div class="comfort-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/comfort/chainik.svg" alt="">
                        <span>електрочайник</span>
                    </div>
                </div>
<?php endif; ?>
<?php
if( $colors && in_array('c16', $colors) ): ?>
       <div class="col-md-4">
                    <div class="comfort-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/comfort/balcony.svg" alt="">
                        <span>тераса</span>
                    </div>
                </div>
<?php endif; ?>
<?php
if( $colors && in_array('c17', $colors) ): ?>
     <div class="col-md-4">
                    <div class="comfort-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/comfort/cosmetics.svg" alt="">
                        <span>косметичні засоби</span>
                    </div>
                </div>
<?php endif; ?>
<?php
if( $colors && in_array('c18', $colors) ): ?>
     <div class="col-md-4">
                    <div class="comfort-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/comfort/fork.svg" alt="">
                        <span>кухонний інвентар</span>
                    </div>
                </div>
<?php endif; ?>
<?php
if( $colors && in_array('c19', $colors) ): ?>
    <div class="col-md-4">
                    <div class="comfort-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/comfort/bed2.svg" alt="">
                        <span>двоярусне ліжко для дітей</span>
                    </div>
                </div>
<?php endif; ?>
<?php
if( $colors && in_array('c20', $colors) ): ?>
     <div class="col-md-4">
                    <div class="comfort-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/comfort/wc.svg" alt="">
                        <span>санвузол</span>
                    </div>
                </div>
<?php endif; ?>
<?php
if( $colors && in_array('c21', $colors) ): ?>
     <div class="col-md-4">
                    <div class="comfort-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/comfort/wc.svg" alt="">
                        <span>санвузол</span>
                    </div>
                </div>
<?php endif; ?>
<?php
if( $colors && in_array('c22', $colors) ): ?>
     <div class="col-md-4">
                    <div class="comfort-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/comfort/oven.svg" alt="">
                        <span>повноцінна кухня</span>
                    </div>
                </div>
<?php endif; ?>
<?php
if( $colors && in_array('c23', $colors) ): ?>
<div class="col-md-4">
                    <div class="comfort-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/comfort/food.svg" alt="">
                        <span>кухонний інвентар</span>
                    </div>
                </div>
<?php endif; ?>
              
                
            </div>
        </div>
    </section>

	
	 <section class="galery">
		<div class="container-max">
			<div class="row">
				<div class="col-12">
					
					<div class="owl-carousel owl-theme owl-gal">
                    <?php 
                        $gall_arr = get_field( 'cottage_gal' ); 
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
                   <?php the_field('text1s'); ?>
                </div>
                <div class="col-md-6">
                    <?php the_field('text2s'); ?>
                </div>
            </div>
        </div>
    </section>


  <?php endwhile; ?>
  

<section class="hata">
        <div class="container-max">
            <div class="row">
                <div class="col-md-8 ">
                    <span>Котеджі та апартаменти </span>
                    <h2>інші хатинки</h2>
                    
                </div>
            </div>
            <div class="row">
            <?php 
            $args = array( 'posts_per_page' => -1, 'post_type' => get_post_type( $post_id )  );
        ?>
        	<?php if ( have_posts() ) : query_posts($args);
           	 while (have_posts()) : the_post(); ?>

                    <div class="col-md-4">
                        <div class="hata-item">
                            <div class="hata-item-img">
                                <img src="<?php echo get_the_post_thumbnail_url( $post, 'large' ); ?>" alt="">
                            </div>
                            <h3><?php the_title(); ?></h3>
                            <span class="qt">Кількість осіб: <?php the_field('qty'); ?> </span>
                            <div class="hata-data">
                                <span><?php the_field('bullet_1'); ?></span>
                                <span><?php the_field('bullet_2'); ?></span>
                                <span><?php the_field('bullet_3'); ?></span>
                                <span><?php the_field('bullet_4'); ?></span> 
                            </div>
                            <div class="hata-gray">
                                <div class="price">від <?php the_field('price'); ?> <span>грн / доба</span> </div>
                                <a href="<?php the_permalink(); ?>" class="acc-but">детальніше</a>
                            </div>
                        </div>
                    </div>
				            
        <? endwhile; endif; wp_reset_query(); ?>
              
            </div>
        </div>
    </section>


<?php get_footer(); ?>

	
