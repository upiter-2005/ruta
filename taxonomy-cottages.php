<?php

get_header(); ?>

<section class="hata">
        <div class="container-max">
            <div class="row">
                <div class="col-md-8 ">
                    <span class="breadcrumbs"> <a href="/">Головна</a> / <a href="/kotedzhi">Котеджі</a> / <?php single_cat_title(); ?> </span>
                    <h2><?php single_cat_title(); ?></h2>
                    <span class="hata-descr"><?php echo category_description(); ?></span>
                </div>
            </div>
            <div class="row">

            <?php
                $tax = get_query_var('taxonomy');
                $term = get_query_var('term');
                $loop = new WP_Query(array(
                    'tax_query' => array(
                            array(
                            'terms' => $term,
                            'taxonomy' => $tax,
                            'field' => 'slug',
                            'posts_per_page' => 50
                        )
                        )
                    )); ?>
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
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
                <?php endwhile; ?>


             
            </div>
        </div>
    </section>
<?php $term = get_queried_object(); ?>
    <section class="column-text">
        <div class="container-max">
            <div class="row">
                <div class="col-md-6">
                <?php the_field('text1', $term); ?>
                </div>
                <div class="col-md-6">
                <?php the_field('text2', $term); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
