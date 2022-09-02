<?php
/**
 * ambulance функции и определения
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ambulance
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Замените номер версии темы в каждом выпуске.
	define( '_S_VERSION', '1.0.0' );
}

// Настраивает темы по умолчанию и регистрирует поддержку различных функций WordPress
function ambulance_setup() {
	/*
		* Сделайте тему доступной для перевода.
		* Переводы могут быть сохранены в каталоге /languages/.
		* Если вы создаете тему на основе ambulance, используйте поиск и замену
		* чтобы изменить "ambulance" на название вашей темы во всех файлах шаблонов.
		*/
	load_theme_textdomain( 'ambulance', get_template_directory() . '/languages' );

	// Добавьте ссылки на RSS-каналы сообщений и комментариев по умолчанию в заголовок.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Позвольте WordPress управлять заголовком документа.
		* Добавляя поддержку темы, мы заявляем, что эта тема не использует
		* жестко закодированный тег <title> в заголовке документа, и ожидайте, что WordPress будет
		* предоставьте это нам.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Включите поддержку миниатюр записей на записях и страницах.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// Эта тема использует wp_nav_menu() в одном месте.
	register_nav_menus(
		array(
			'primary-menu' => esc_html__( 'Основное меню', 'ambulance' ),
			'site-map' => esc_html__( 'Карта сайта', 'ambulance' ),
			'mobile-menu' => esc_html__( 'Мобильное меню', 'ambulance' ),
		)
	);

	/*
		* Переключите базовую разметку по умолчанию для формы поиска, формы комментариев и комментариев
		* для вывода допустимого HTML5.
	*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Настройте пользовательскую фоновую функцию WordPress core.
	add_theme_support(
		'custom-background',
		apply_filters(
			'ambulance_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Добавьте поддержку темы для выборочного обновления виджетов.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Добавьте поддержку основного пользовательского логотипа.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'ambulance_setup' ); //Регистрация меню и всего остального

/**
 	* Установите ширину содержимого в пикселях на основе дизайна темы и таблицы стилей.
	*
	* Приоритет 0, чтобы сделать его доступным для обратных вызовов с более низким приоритетом.
 *
 * @global int $content_width
 */
function ambulance_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ambulance_content_width', 640 );
}
add_action( 'after_setup_theme', 'ambulance_content_width', 0 );

/**
 * Область виджета регистрации.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ambulance_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ambulance' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ambulance' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ambulance_widgets_init' );

/**
 * Скрипты и стили.
 */
function ambulance_scripts() {
	
  wp_enqueue_style( 'ambulance-main-style', get_template_directory_uri() . '/style/app/css/main.css', array(), _S_VERSION );
  wp_enqueue_style( 'ambulance-vendor-style', get_template_directory_uri() . '/style/app/css/vendor.css', array(), _S_VERSION );
  wp_enqueue_style( 'ambulance-media-style', get_template_directory_uri() . '/style/app/css/components/media.css', array(), _S_VERSION );

	wp_enqueue_script( 'ambulance-main-script', get_template_directory_uri() . '/style/app/js/main.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'ambulance_scripts' );

/**
 * Реализуйте функцию пользовательского заголовка.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}




add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( get_template_directory() . '/inc/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    // Настройки темы
	require_once(get_template_directory() . '/inc/carbon-fields-template/home.php');
	require_once(get_template_directory() . '/inc/carbon-fields-template/theme.php');
}