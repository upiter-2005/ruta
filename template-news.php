<?php
/**
 * Template Name: Template News(News)
 */
get_header(); ?>

<section class="hata">
        <div class="container-max">
            <div class="row">
                <div class="col-md-6 ">
                    <span>Інформація про найновіші акції та суперпропозиції  </span>
                    <h1 class="h1-seo">Новини</h1>

                    <div class="main-new">
                               
        <?php 
            $args = array( 'posts_per_page' => 1, 'post_type' => 'news', 'order' => 'desc',  );
        ?>
        	<?php if ( have_posts() ) : query_posts($args);
           	 while (have_posts()) : the_post(); ?>
                        <div class="date"><?php echo get_the_date(); ?></div>
                        <h3><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h3>
                        <p><?php the_excerpt(); ?></p>

                   
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-news-img">
                    <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                    </div>
                </div>
            </div>
            <? endwhile; endif; wp_reset_query(); ?>
        </div>
    </section>
    <section class="hata">
        <div class="container-max">
            <div class="row">

            
        <?php 
            $args = array( 'posts_per_page' => 999, 'post_type' => 'news','offset' => 1, 'order' => 'desc',  );
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