<?php

function remove_wordpress_version_number() {
    return '';
}
add_filter('the_generator', 'remove_wordpress_version_number');
function remove_version_from_scripts( $src ) {
   if ( strpos( $src, '?ver=' ) )
       $src = remove_query_arg( 'ver', $src );
   return $src;
}
add_filter( 'style_loader_src', 'remove_version_from_scripts');
add_filter( 'script_loader_src', 'remove_version_from_scripts');
/**
 * Enqueue scripts and styles.
 */
function ex_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'agrotech-css', get_template_directory_uri() . '/css/main.min.css' );
	wp_enqueue_style( 'agrotech-ui', get_template_directory_uri() . '/css/jquery-ui.css' );
	wp_enqueue_style( 'agrotech-scroll', get_template_directory_uri() . '/css/scroll.css' );
	wp_enqueue_style( 'jk-animate', get_template_directory_uri() . '/css/animate.css' );
	
	wp_enqueue_script( 'agrotech-js', get_template_directory_uri() . '/js/scripts.min.js', array(), '', true );
	wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/js/WOW-master/dist/wow.js', array(), '', false );
}

add_action( 'wp_enqueue_scripts', 'ex_scripts' );

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

//show_admin_bar(false);

//require_once ( get_stylesheet_directory() . '/theme-options.php' );

add_theme_support('post-thumbnails');
add_theme_support( 'custom-logo' );
remove_filter( 'the_content', 'wpautop' );

function new_excerpt_length($length) {
	return 20;
}

add_filter('excerpt_length', 'new_excerpt_length');
add_filter('excerpt_more', function($more) {
	return '...';
});

## Отключаем Emojis в WordPress
if(1){
	## отключаем DNS prefetch
	add_filter('emoji_svg_url', '__return_empty_string');

	/**
	 * Disable the emoji's
	 */
	add_action( 'init', 'disable_emojis' );
	function disable_emojis() {
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
		add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	}

	/**
	 * Filter function used to remove the tinymce emoji plugin.
	 *
	 * @param    array  $plugins
	 * @return   array             Difference betwen the two arrays
	 */
	function disable_emojis_tinymce( $plugins ) {
		if ( is_array( $plugins ) ) {
			return array_diff( $plugins, array( 'wpemoji' ) );
		} else {
			return array();
		}
	}
}

add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'main-top', 'main-top' );
	
}

add_action( 'widgets_init', 'metrica_widjet' );
function metrica_widjet(){
	register_sidebar( array(
		'name'          => 'metrica_widjet',
		'id'            => "metrica_widjet",
		'description'   => 'Виджет для счетчиков FB Google Яндекс и т.д.',
		'before_widget' => '',
		'after_widget'  => "",
		'before_title'  => '',
		'after_title'   => "",
	) );
}

//add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'chat', 'audio') );

add_filter( 'widget_title', 'hide_widget_title' );
function hide_widget_title( $title ) {
    if ( empty( $title ) ) return '';
    if ( $title[0] == '!' ) return '';
    return $title;
}
add_filter('how_dolar', 'count_dolar');
function count_dolar($grn){
	$options = get_option('sample_theme_options');
	$kurs = $options['kurs'];
	$grn = round($grn / $kurs);
	$grn = $grn . ' USD/м2';
	return $grn;
}

$labels_cottage = array(
    'name' => __( 'КОТЕДЖІ' ),
    'singular_name' => __( 'Всi КОТЕДЖІ' ),
    'add_new' => __( 'Додати КОТЕДЖІ' ),
    'add_new_item' => __( 'Додати новий КОТЕДЖ' ),
    'edit_item' => __( 'Редагувати КОТЕДЖ' ),
    'new_item' => __( 'новий КОТЕДЖ' ),
    'view_item' => __( 'Дивитись КОТЕДЖ' ),
    'search_items' => __( 'Пошук КОТЕДЖУ' ),
    'not_found' =>  __( 'Не знайдено КОТЕДЖ' ),
    'not_found_in_trash' => __( 'No Articles found in Trash' ),
    );
  $args_cottage = array(
    'labels' => $labels_cottage,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array(
      'title',
      'custom-fields',
      'thumbnail', 
      ),
    );
  register_post_type( 'cottage', $args_cottage );



$labels_apartament = array(
    'name' => __( 'АПАРТАМЕНТЫ' ),
    'singular_name' => __( 'Всi АПАРТАМЕНТЫ' ),
    'add_new' => __( 'Додати АПАРТАМЕНТ' ),
    'add_new_item' => __( 'Додати новий АПАРТАМЕНТ' ),
    'edit_item' => __( 'Редагувати АПАРТАМЕНТ' ),
    'new_item' => __( 'новий АПАРТАМЕНТ' ),
    'view_item' => __( 'Дивитись АПАРТАМЕНТ' ),
    'search_items' => __( 'Пошук АПАРТАМЕНТА' ),
    'not_found' =>  __( 'Не знайдено АПАРТАМЕНТ' ),
    'not_found_in_trash' => __( 'No Articles found in Trash' ),
    );
  $args_apartament = array(
    'labels' => $labels_apartament,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array(
      'title',
      'custom-fields',
      'thumbnail', 
      ),
    );
  register_post_type( 'apartament', $args_apartament );



  $labels_servs = array(
    'name' => __( 'ПОСЛУГИ' ),
    'singular_name' => __( 'Всi ПОСЛУГИ' ),
    'add_new' => __( 'Додати ПОСЛУГУ' ),
    'add_new_item' => __( 'Додати нову ПОСЛУГУ' ),
    'edit_item' => __( 'Редагувати ПОСЛУГУ' ),
    'new_item' => __( 'нова ПОСЛУГА' ),
    'view_item' => __( 'Дивитись ПОСЛУГУ' ),
    'search_items' => __( 'Пошук ПОСЛУГИ' ),
    'not_found' =>  __( 'Не знайдено ПОСЛУГИ' ),
    'not_found_in_trash' => __( 'No Articles found in Trash' ),
    );
  $args_servs = array(
    'labels' => $labels_servs,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array(
      'title',
      'custom-fields',
      'thumbnail', 
      ),
    );
  register_post_type( 'service', $args_servs );


  $labels_news = array(
    'name' => __( 'Слайдер на главной' ),
    'singular_name' => __( 'Все слайдеры' ),
    'add_new' => __( 'Добавить слайдер' ),
    'add_new_item' => __( 'Добавить слайдер' ),
    'edit_item' => __( 'Редактировать слайдер' ),
    'new_item' => __( 'Новый слайдер' ),
    'view_item' => __( 'Смотреть слайдер' ),
    'search_items' => __( 'Поиск слайдер' ),
    'not_found' =>  __( 'Не найден слайдер' ),
    'not_found_in_trash' => __( 'No Articles found in Trash' ),
    );
  $args_news = array(
    'labels' => $labels_news,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array(
      'title',
      'custom-fields',
      'thumbnail',
      ),
    );
  register_post_type( 'slides', $args_news );


  $labels_news = array(
    'name' => __( 'Слайдер Про нас' ),
    'singular_name' => __( 'Все слайдеры' ),
    'add_new' => __( 'Добавить слайдер' ),
    'add_new_item' => __( 'Добавить слайдер' ),
    'edit_item' => __( 'Редактировать слайдер' ),
    'new_item' => __( 'Новый слайдер' ),
    'view_item' => __( 'Смотреть слайдер' ),
    'search_items' => __( 'Поиск слайдер' ),
    'not_found' =>  __( 'Не найден слайдер' ),
    'not_found_in_trash' => __( 'No Articles found in Trash' ),
    );
  $args_news = array(
    'labels' => $labels_news,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array(
      'title',
      'custom-fields',
      'thumbnail',
      ),
    );
  register_post_type( 'slides_about', $args_news );

  $labels_news = array(
    'name' => __( ' Про нас info' ),
    'singular_name' => __( 'Все info' ),
    'add_new' => __( 'Добавить info' ),
    'add_new_item' => __( 'Добавить info' ),
    'edit_item' => __( 'Редактировать info' ),
    'new_item' => __( 'Новый info' ),
    'view_item' => __( 'Смотреть info' ),
    'search_items' => __( 'Поиск info' ),
    'not_found' =>  __( 'Не найден info' ),
    'not_found_in_trash' => __( 'No Articles found in Trash' ),
    );
  $args_news = array(
    'labels' => $labels_news,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array(
      'title',
      'custom-fields',
      'thumbnail',
      ),
    );
  register_post_type( 'about_info', $args_news );


  $labels_news = array(
    'name' => __( 'НОВИНИ' ),
    'singular_name' => __( 'Всi НОВИНИ' ),
    'add_new' => __( 'Додати НОВИНУ' ),
    'add_new_item' => __( 'Додати нову НОВИНУ' ),
    'edit_item' => __( 'Редагувати НОВИНУ' ),
    'new_item' => __( 'нова НОВИНА' ),
    'view_item' => __( 'Дивитись НОВИНУ' ),
    'search_items' => __( 'Пошук НОВИНИ' ),
    'not_found' =>  __( 'Не знайдено НОВИНУ' ),
    'not_found_in_trash' => __( 'No Articles found in Trash' ),
    );
  $args_news = array(
    'labels' => $labels_news,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'supports' => array(
      'title',
      'custom-fields',
      'thumbnail', 
      'editor'
      ),
    );
  register_post_type( 'news', $args_news );



function wptp_register_taxonomy(){

    register_taxonomy( 'cottages', 'cottage',
    array(
    'labels' => array(
        'name'              => 'Категории котеджей',
        'singular_name'     => 'Общая категория',
        'search_items'      => 'Поиск категории',
        'all_items'         => 'Все категории котеджей',
        'edit_item'         => 'Создать категорию',
        'update_item'       => 'Обновить категорию',
        'add_new_item'      => 'Добавить категорию',
        'add_new_item'      => 'Добавить Пункт категорию',
        'new_item_name'     => 'New Article Category Name',
        'menu_name'         => 'Категории котеджей',
        ),
    'hierarchical' => true,
    'sort' => true,
    'args' => array( 'orderby' => 'term_order' ),
    'show_admin_column' => true,
    'show_in_rest' => true
    )
    );

    register_taxonomy( 'apartaments', 'apartament',
    array(
    'labels' => array(
        'name'              => 'Категории апартаментов',
        'singular_name'     => 'Общая категория',
        'search_items'      => 'Поиск категории',
        'all_items'         => 'Все категории апартаментов',
        'edit_item'         => 'Создать категорию',
        'update_item'       => 'Обновить категорию',
        'add_new_item'      => 'Добавить категорию',
        'add_new_item'      => 'Добавить Пункт категорию',
        'new_item_name'     => 'New Article Category Name',
        'menu_name'         => 'Категории апартаментов',
        ),
    'hierarchical' => true,
    'sort' => true,
    'args' => array( 'orderby' => 'term_order' ),
    'show_admin_column' => true,
    'show_in_rest' => true
    )
    );

}
add_action( 'init', 'wptp_register_taxonomy' );


add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}

	}

	return $data;
}



  






 