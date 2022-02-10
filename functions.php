<?php

add_action( 'wp_enqueue_scripts', 'main_scripts' );    // Фронт
function main_scripts(){

  wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js');
	wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'scroll', get_template_directory_uri() . '/js/jquery.galleryScroll.1.5.2.js', array('jquery'), '1.0', false );
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', false );
	wp_enqueue_script( 'main2', get_template_directory_uri() . '/js/main2.js', array('jquery'), '1.0', false );
	wp_enqueue_script( 'main3', get_template_directory_uri() . '/js/main3.js', array('jquery'), '1.0', false );
	wp_enqueue_style( 'all', get_template_directory_uri() . '/css/all.css' );
	
}

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

add_action( 'init', 'register_post_types' );
function register_post_types() {
	register_post_type( 'projects', [
		'labels' => [
			'name'               => 'Projects', // основное название для типа записи
			'singular_name'      => 'project', // название для одной записи этого типа
			'add_new'            => 'Add new', // для добавления новой записи
			'add_new_item'       => 'Add project', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit project', // для редактирования типа записи
			'new_item'           => 'New project', // текст новой записи
			'view_item'          => 'View project', // для просмотра записи этого типа.
			'search_items'       => 'Find project', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Projects', // название меню
		],
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-portfolio',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail' ],
	] );

	register_post_type( 'stuff', [
		'labels' => [
			'name'               => 'Stuff', // основное название для типа записи
			'singular_name'      => 'stuff', // название для одной записи этого типа
			'add_new'            => 'Add new', // для добавления новой записи
			'add_new_item'       => 'Add stuff', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit stuff', // для редактирования типа записи
			'new_item'           => 'New stuff', // текст новой записи
			'view_item'          => 'View stuff', // для просмотра записи этого типа.
			'search_items'       => 'Find stuff', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Stuff', // название меню
		],
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => null, // показывать ли в меню админки
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-businessman',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail' ],
	] );

	register_post_type( 'press', [
		'labels' => [
			'name'               => 'Press', // основное название для типа записи
			'singular_name'      => 'press', // название для одной записи этого типа
			'add_new'            => 'Add new', // для добавления новой записи
			'add_new_item'       => 'Add press', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit press', // для редактирования типа записи
			'new_item'           => 'New press', // текст новой записи
			'view_item'          => 'View press', // для просмотра записи этого типа.
			'search_items'       => 'Find press', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Press', // название меню
		],
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-text-page',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'thumbnail' ],
	] );

}