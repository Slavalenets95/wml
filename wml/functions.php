<?php
/**
 * onlinegroup functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package onlinegroup
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.1.0' );
}

function onlinegroup_scripts() {
	wp_enqueue_style( 'onlinegroup-reset', get_template_directory_uri() . '/assets/css/reset.css', array(), _S_VERSION );
	wp_enqueue_style( 'fontAwesome', get_template_directory_uri() . '/assets/css/fontAwesome/css/all.css', array(), _S_VERSION );
	wp_enqueue_style( 'slick_theme_styles', get_template_directory_uri() . '/assets/libs/slick-1.8.1/slick/slick-theme.css', _S_VERSION );
	wp_enqueue_style( 'slick_styles', get_template_directory_uri() . '/assets/libs/slick-1.8.1/slick/slick.css', _S_VERSION );
	wp_enqueue_style( 'onlinegroup-style', get_template_directory_uri() . '/assets/css/styles.css', array(), _S_VERSION );

	wp_enqueue_script( 'slick_js', get_template_directory_uri() . '/assets/libs/slick-1.8.1/slick/slick.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'onlinegroup_scripts' );



add_action('after_setup_theme', function(){
	show_admin_bar( false );
	add_theme_support('post-thumbnails');
	add_theme_support( 'menus' );
});



add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'header_menu', 'header_menu' );
	register_nav_menu( 'footer_menu_1', 'footer_menu_1' );
	register_nav_menu( 'footer_menu_2', 'footer_menu_2' );
}


add_action('init', function() {
	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			'page_title' 	=> 'Основные настройки',
			'menu_title'	=> 'Настройки темы',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
		
	}
});


add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'products', [
		'label'  => null,
		'labels' => [
			'name'               => 'Товары', // основное название для типа записи
			'singular_name'      => 'Товар', // название для одной записи этого типа
			'add_new'            => 'Добавить товар', // для добавления новой записи
			'add_new_item'       => 'Добавление товара', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование товара', // для редактирования типа записи
			'new_item'           => 'Новый товар', // текст новой записи
			'view_item'          => 'Смотреть товар', // для просмотра записи этого типа.
			'search_items'       => 'Искать товар', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Товары', // название меню
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 20,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail', 'excerpt', 'custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [ 'category' ],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}

add_action( 'admin_menu', 'remove_default_post_type' );

function remove_default_post_type() {
    remove_menu_page( 'edit.php' );
}