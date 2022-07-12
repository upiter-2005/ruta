<?php get_header(); ?>



<?php
        // Start the loop.
        while ( have_posts() ) : the_post(); ?>
  
 
  <section class="hata post-header">
        <div class="container-max">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                <span class="breadcrumbs"> <a href="/">Головна</a> / <a href="/novini/">Новини</a> / <?php the_title(); ?> </span>
           
                    <h2><?php the_title();?></h2>

                    <div class="main-new">
                        <div class="date"><?php echo get_the_date(); ?></div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="post">
        <div class="container-max">
            <div class="row">
                <div class="col-md-8 offset-md-2">
               <?php the_content();?>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
    <section class="hata">
        <div class="container-max">
            <div class="row">
                <div class="col-12"><span>Інформація про найновіші акції та суперпропозиції </span>
                    <h2>Схожі новини</h2>
                </div>

            </div>

            <div class="row">
            <?php 
            $args = array( 'posts_per_page' => 3, 'post_type' => 'news', 'order' => 'desc',  );
        ?>
        	<?php if ( have_posts() ) : query_posts($args);
           	 while (have_posts()) : the_post(); ?>

                <div class="col-md-4">
                    <a href="<?php the_permalink(); ?>" class="hata-item">
                        <div class="hata-item-img">
                            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                        </div>
                        <div class="title-date">
                            <h3><?php the_title(); ?></h3>
                            <span><?php echo get_the_date(); ?></span>
                        </div>
                        
                        <span><?php the_excerpt(); ?></span>
                        <div class="new-more"> 
                            <a href="<?php the_permalink();?>" class="">детальніше <img src="<?php echo get_template_directory_uri(); ?>/img/arr-red.svg" alt=""></a>
                        </div>
                    </a>
                </div>
				            
                <? endwhile; endif; wp_reset_query(); ?>
            </div>
        </div>
    </section>
				            

              
           


<?php get_footer(); ?>

	
