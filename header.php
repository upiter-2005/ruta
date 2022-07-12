<!DOCTYPE html>
<html lang="uk">

<head>
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KWZ7R7N');</script>
<!-- End Google Tag Manager -->
	
	



	<meta charset="utf-8">
	<!-- <base href="/"> -->

	<title>Ruta</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-180x180.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
		rel="stylesheet">
	<!-- Template Basic Images End -->
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->
    <?php wp_head(); ?>
</head>

<body>
	
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KWZ7R7N"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php 
    $add_class = '';
    $logo = '';
    if (is_page_template('template-contact.php')){
        $add_class = ' dark-relative-menu'; 
        $logo = "dark";
    }
    if (get_post_type( $post_id ) == 'news'){
        $add_class = ' dark-relative-menu'; 
        $logo = "dark";
    }
    if (is_page_template('template-news.php')){
        $add_class = ' dark-relative-menu'; 
        $logo = "dark";
    }
    if (is_page_template('temlate-gallery.php')){
        $add_class = ' dark-relative-menu'; 
        $logo = "dark";
    }
    if (is_page_template('template-cottage.php')){
        $add_class = ' dark-relative-menu'; 
        $logo = "dark";
    }
    if (is_page_template('template-apartament.php')){
        $add_class = ' dark-relative-menu'; 
        $logo = "dark";
    }
    if (is_page_template('template-condition.php')){
        $add_class = ' dark-relative-menu'; 
        $logo = "dark";
    }
    if (is_archive()){
        $add_class = ' dark-relative-menu'; 
        $logo = "dark";
    }
?>

<div id="mob-list">
		<span class="close"><img src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt=""></span>
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $logo; ?>logo.svg" alt=""></a>
		<a href="/pro-nas">Про нас</a>

		<a class="btn mob-list-a" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Готель <img src="<?php echo get_template_directory_uri(); ?>/img/down.svg" alt=""></a>
        <div class="collapse" id="collapseExample">
            <a href="/kotedzhi" class="mob-list-a">Котеджі</a>
            <a href="/apartamenty" class="mob-list-a">Апартаменти</a>
        </div>

		<a class="btn mob-list-a" data-toggle="collapse" href="#collapseServ" role="button" aria-expanded="false" aria-controls="collapseServ">Послуги <img src="<?php echo get_template_directory_uri(); ?>/img/down.svg" alt=""></a>
        <div class="collapse" id="collapseServ">
        <?php 
            $args = array( 'posts_per_page' => -1, 'post_type' => 'service'  );
        ?>
        	<?php if ( have_posts() ) : query_posts($args);
           	 while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="mob-list-a"><?php the_title(); ?></a>            
            <? endwhile; endif; wp_reset_query(); ?>
           
        </div>
       
        <a href="/service/restoran/">Ресторан</a>
		<a href="/service/spa/">SPA</a>
		<!-- <a href="#">Послуги</a>  -->
		<a href="/galereya">Галерея</a>
		<!-- <a href="/novini">Новини</a> -->
		<a href="/kontakti">Контакти</a>
        <a href="tel:+380675131580"><img src="<?php echo get_template_directory_uri(); ?>/img/tel.svg" alt="">+38 067 513 15 80</a>
	</div>



	<div class="menu <?php echo $add_class; ?>">
		<div class="container-max">
			<div class="row align-items-center">
				<div class="col-lg-2 col-4">
					<div class="logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $logo; ?>logo.svg" alt=""></a></div>
				</div>
				<div class="col-md-8 d-none d-lg-flex">
					<div class="mnu ">
						<a href="/pro-nas/">Про нас</a>
                        <div class="parent-li">
							<a href="#" class="">Готель <img src="<?php echo get_template_directory_uri(); ?>/img/down.svg" alt=""></a>
							<ul class="sub-menu">
                                <li><a href="/kotedzhi/" >Котеджі</a></li>
                                <li><a href="/apartamenty/" >Апартаменти</a></li>
                                
                                
							</ul>
						</div>
						<a href="/service/restoran/">Ресторан</a>
						<a href="/service/spa/">SPA</a>

						
						<div class="parent-li">
							<a href="#" class="">Послуги <img src="<?php echo get_template_directory_uri(); ?>/img/down.svg" alt=""></a>
							<ul class="sub-menu">
                            <?php 
                                $exclude_ids = array( 53, 72 );
                                $args = array( 'posts_per_page' => -1, 'post_type' => 'service', 'post__not_in' => $exclude_ids  );
                            ?>
                                <?php if ( have_posts() ) : query_posts($args);
                                while (have_posts()) : the_post(); ?>
                                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>            
                                <? endwhile; endif; wp_reset_query(); ?>
							</ul>
						</div>
						<!-- <a href="#">Послуги</a>  -->
						<a href="/galereya">Галерея</a>
						<!-- <a href="/novini">Новини</a> -->
						<a href="/kontakti">Контакти</a>
						<!-- <a href="tel:+380675131580"><img src="<?php echo get_template_directory_uri(); ?>/img/tel.svg" alt="">+38 067 513 15 80</a> -->
					</div>
				</div>
				<div class="col-lg-2 col-6">
					<a href="/test"  class="book">Забронювати</a>
				</div>
				<div class="col-2 d-block d-lg-none">
					<a href="#" class="open-mnu"><img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $logo; ?>bar.svg" alt=""></a>
				</div>
			</div>
		</div>
	</div>
