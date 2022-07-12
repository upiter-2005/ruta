<?php
/**
 * Template Name: Template Galls(Galls)
 */
get_header(); ?>
  <section class="fotos">
    <div class="container-max">
      <span>Фото</span>
      <h2>галерея</h2>
      <div class="row g1">
        <div class="col-md-2 flex-mob">
            <div> <h3>Територія</h3>
          <div class="counter counter1"></div></div>
         
          <div id="nav1">
            <span><img src="<?php echo get_template_directory_uri(); ?>/img/arr-left.svg" alt="" class="nav1-left"></span>
            <span><img src="<?php echo get_template_directory_uri(); ?>/img/arr-right2.svg" alt="" class="nav1-right"></span>
          </div>
          
        </div>
        <div class="col-md-10">
          <div id="sync2" class="owl-carousel owl-theme">

                    <?php 
                        $gall_arr = get_field( 'gal-ter' ); 
                        $gall_arr_imgs = explode(",", $gall_arr);
                    ?>

                    <?php
                                    
                        foreach($gall_arr_imgs as $img_id){
                        $src = wp_get_attachment_image_src($img_id, 'large'); ?>
                            <div class="item mini2">
                            <img src="<?php echo $src[0]; ?>" alt="">
                            </div>
                        <?php   }
                    ?>

          </div>
        </div>


        <div id="sync1" class="owl-carousel owl-theme">
                    <?php 
                        $gall_arr = get_field( 'gal-ter' ); 
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

      <div class="row g2">
        <div class="col-md-2 flex-mob">
            <div> <h3>Рута SPA</h3>
          <div class="counter counter2"></div></div>
         
          <div id="nav2">
            <span><img src="<?php echo get_template_directory_uri(); ?>/img/arr-left.svg" alt="" class="nav2-left"></span>
            <span><img src="<?php echo get_template_directory_uri(); ?>/img/arr-right2.svg" alt="" class="nav2-right"></span>
          </div>
          
        </div>
        <div class="col-md-10">
          <div id="sync4" class="owl-carousel owl-theme">
                    <?php 
                        $gall_arr = get_field( 'gal-spa' ); 
                        $gall_arr_imgs = explode(",", $gall_arr);
                    ?>

                    <?php
                                    
                        foreach($gall_arr_imgs as $img_id){
                        $src = wp_get_attachment_image_src($img_id, 'large'); ?>
                            <div class="item mini4">
                            <img src="<?php echo $src[0]; ?>" alt="">
                            </div>
                        <?php   }
                    ?>
           

          </div>
        </div>


        <div id="sync3" class="owl-carousel owl-theme">
                    <?php 
                        $gall_arr = get_field( 'gal-spa' ); 
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


      <div class="row g3">
        <div class="col-md-2 flex-mob">
            <div><h3>Ресторан</h3>
          <div class="counter counter3"></div></div>
          
          <div id="nav3">
            <span><img src="<?php echo get_template_directory_uri(); ?>/img/arr-left.svg" alt="" class="nav3-left"></span>
            <span><img src="<?php echo get_template_directory_uri(); ?>/img/arr-right2.svg" alt="" class="nav3-right"></span>
          </div>
          
        </div>
        <div class="col-md-10">
          <div id="sync6" class="owl-carousel owl-theme">
                    <?php 
                        $gall_arr = get_field( 'gal-rest' ); 
                        $gall_arr_imgs = explode(",", $gall_arr);
                    ?>

                    <?php
                                    
                        foreach($gall_arr_imgs as $img_id){
                        $src = wp_get_attachment_image_src($img_id, 'large'); ?>
                            <div class="item mini6">
                            <img src="<?php echo $src[0]; ?>" alt="">
                            </div>
                        <?php   }
                    ?>
           
           

          </div>
        </div>


        <div id="sync5" class="owl-carousel owl-theme">
        <?php 
                        $gall_arr = get_field( 'gal-rest' ); 
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

<?php get_footer('gallery'); ?>