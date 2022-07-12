<?php
/**
 * Template Name: Template Apartament (Apartament)
 */
get_header(); ?>

<section class="hata">
        <div class="container-max">
            <div class="row">
                <div class="col-md-8 ">
                    <span class="breadcrumbs"> <a href="/">Головна</a> / Апартаменти  </span>
                    <h1 class="h1-seo">Апартаменти</h1>
                    <!-- <span class="hata-descr"><?php echo category_description(); ?></span> -->
                </div>
            </div>
            <div class="row">

            <?php 
            $args = array( 'posts_per_page' => -1, 'post_type' => 'apartament'  );
        ?>
        	<?php if ( have_posts() ) : query_posts($args);
           	 while (have_posts()) : the_post(); ?>

                    <div class="col-md-4">
                        <div class="hata-item">
                        <a href="<?php the_permalink(); ?>" class="hata-item-img">
                                <img src="<?php echo get_the_post_thumbnail_url( $post, 'large' ); ?>" alt="">
                            </a>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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

    <section class="column-text">
        <div class="container-max">
            <div class="row">
                <div class="col-md-6">
                <?php the_field('text1'); ?>
                </div>
                <div class="col-md-6">
                <?php the_field('text2'); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
