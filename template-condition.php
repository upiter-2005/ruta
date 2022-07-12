<?php
/**
 * Template Name: Template Condition (Condition)
 */
get_header(); ?>



<?php
	/* Start the Loop */
    while ( have_posts() ) :  the_post(); ?>
    <section class="">
        <div class="container-max">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                <h1><?php the_title();?></h1>
               <?php the_content();?>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
   
    
    
<?php get_footer(); ?>