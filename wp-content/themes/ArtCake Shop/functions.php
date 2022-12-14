<?php

add_action( 'wp_enqueue_scripts', 'add_style_theme' );
add_action( 'wp_footer', 'add_script_theme' );
add_action( 'after_setup_theme', 'install_custom_menu' );
add_action( 'init', 'register_post_types_and_tax' );

function add_style_theme() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css' );
	wp_enqueue_style( 'nice-select-style', get_template_directory_uri() . '/assets/css/nice-select.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

function add_script_theme () {
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js' );
	wp_enqueue_script( 'owl-carousel-script', get_template_directory_uri() . '/assets/js/owl.carousel.min.js' );
	wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js' );
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js' );
}

function install_custom_menu () {
	register_nav_menu( 'header', 'Меню в шапке' );
	add_theme_support( 'title-tag' );
}

function register_post_types_and_tax () {
	register_post_type( 'product', array(
		'label'  => null,
		'labels' => array(
			'name'                => 'Товары',
			'singular_name'       => 'Товар',
			'add_new'             => 'Добавить новый товар',
			'add_new_item'        => 'Добавление товара',
			'edit_item'           => 'Редактирование товара',
			'new_item'            => 'Новый товар',
			'view_item'           => 'Просмотреть результат',
			'search_items'        => 'Искать товар',
			'not_found'           => 'Ничего не найдено..',
			'not_found_it_trash'  => 'Ничего не найдено в корзине',
			'parent_item_colon'   => '',
			'menu_item'           => 'Товар'
		),
		'description' => 'Тут можно добавить новый товар на главную страницу сайта.',
		'public'              => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'show_in_rest'        => true,
		'rest_base'           => null,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-products',
		'hierarchical'        => false,
		'supports'            =>    array('title','editor'),
		'taxonomies'          => array('categories_product'),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true 
	));

	remove_post_type_support( 'product', 'editor' );

	register_taxonomy( 'categories_product', [ 'product' ], [ 
		'label'                 => '',
		'labels'                => [
			'name'              => 'Категории',
			'singular_name'     => 'Категории',
			'search_items'      => 'Поиск категории',
			'all_items'         => 'Все категории',
			'view_item '        => 'Просмотреть категорию',
			'parent_item'       => 'Родительская категория',
			'parent_item_colon' => 'Родительская категория:',
			'edit_item'         => 'Изменить категорию',
			'update_item'       => 'Обновить категорию',
			'add_new_item'      => 'Добавить новую категорию',
			'new_item_name'     => 'Новая категория',
			'menu_name'         => 'Категория',
			'separate_items_with_commas' => 'Для выбора нескольких категорий перечислите их через запятую.'
		],
		'description'           => 'Категории объектов продуктов',
		'public'                => true,
		'hierarchical'          => false,
		'rewrite'               => true,
		'capabilities'          => array(),
		'meta_box_cb'           => null,
		'show_admin_column'     => false,
		'show_in_rest'          => null,
		'rest_base'             => null,
	] );

	register_post_type( 'info', array(
		'label'  => null,
		'labels' => array(
			'name'                => 'Главная информация',
			'singular_name'       => 'Информация',
			'add_new'             => 'Добавить новые данные',
			'add_new_item'        => 'Добавление данных',
			'edit_item'           => 'Редактирование данных',
			'new_item'            => 'Новые данные',
			'view_item'           => 'Просмотреть результат',
			'search_items'        => 'Искать информацию',
			'not_found'           => 'Ничего не найдено..',
			'not_found_it_trash'  => 'Ничего не найдено в корзине',
			'parent_item_colon'   => '',
			'menu_item'           => 'Информация'
		),
		'description' => 'Тут можно добавить новую информацию на сайт или изменить старую.',
		'public'              => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'show_in_rest'        => true,
		'rest_base'           => null,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-info',
		'hierarchical'        => false,
		'supports'            =>    array('title','editor'),
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true 
	));

	remove_post_type_support( 'info', 'editor' );

	register_post_type( 'testimonial', array(
		'label'  => null,
		'labels' => array(
			'name'                => 'Отзывы',
			'singular_name'       => 'Отзыв',
			'add_new'             => 'Добавить новый отзыв',
			'add_new_item'        => 'Добавление отзыва',
			'edit_item'           => 'Редактирование отзыва',
			'new_item'            => 'Новый отзыв',
			'view_item'           => 'Просмотреть результат',
			'search_items'        => 'Искать отзыв',
			'not_found'           => 'Ничего не найдено..',
			'not_found_it_trash'  => 'Ничего не найдено в корзине',
			'parent_item_colon'   => '',
			'menu_item'           => 'Отзыв'
		),
		'description' => 'Тут можно добавить новый отзыв на главную страницу сайта.',
		'public'              => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'show_in_rest'        => true,
		'rest_base'           => null,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-testimonial',
		'hierarchical'        => false,
		'supports'            =>    array('title','editor'),
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true 
	));

	remove_post_type_support( 'testimonial', 'editor' );
}


add_action('pre_get_posts', 'hwl_home_pagesize', 1 );

function hwl_home_pagesize( $query ) {
	if( is_admin() || ! $query->is_main_query() ) {
		return;
	} else {
		if( is_home() ){
			$query->set( 'posts_per_page', 8 );
		} else {
			$query->set( 'posts_per_page', 16 );
		}
	}
	
}

?>