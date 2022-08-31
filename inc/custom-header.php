<?php
/**
* Пример реализации функции пользовательского заголовка
*
* Вы можете добавить необязательное пользовательское изображение заголовка к header.php вот так ...
 *
	<?php the_header_image_tag(); ?>
*
* @link https://developer.wordpress.org/themes/functionality/custom-headers/
*
* @package ambulance
*/

/**
* Настройте основную функцию пользовательского заголовка WordPress.
*
* @uses ambulance_header_style()
*/
function ambulance_custom_header_setup() {
add_theme_support(
'custom-header',
apply_filters(
'ambulance_custom_header_args',
array(
'default-image' => '',
'default-text-color' => '000000',
'width' => 1000,
'height' => 250,
'flex-height' => true,
'wp-head-callback' => 'ambulance_header_style',
)
)
);
}
add_action( 'after_setup_theme', 'ambulance_custom_header_setup' );

if ( ! function_exists( 'ambulance_header_style' ) ) :
/**
* Стили изображения заголовка и текст, отображаемый в блоге.
*
* @see ambulance_custom_header_setup().
*/
function ambulance_header_style() {
$header_text_color = get_header_textcolor();

/*
* Если не установлены пользовательские параметры для текста, давайте залог.
* get_header_textcolor () Параметры: любое шестигранное значение, «пусто», чтобы скрыть текст.По умолчанию:
add_theme_support ('Custom-Header').
*/
if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
return;
}

// Если мы заберем это далеко, у нас есть пользовательские стили.Давай сделаем это.
?>
<style type="text/css">
<?php // был скрыт текст?

if ( ! display_header_text()) : ?>.site-title,
.site-description {
  position: absolute;
  clip: rect(1px, 1px, 1px, 1px);
}

<?php // Если пользователь установил пользовательский цвет для текста. Используйте это.

else : ?>.site-title a,
.site-description {
  color: #<?php echo esc_attr($header_text_color);
  ?>;
}

<?php endif;
?>
</style>
<?php
	}
endif;