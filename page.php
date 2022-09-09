<?php
/**
* Шаблон для отображения всех страниц
 *
* Это шаблон, который по умолчанию отображает все страницы.
* Обратите внимание, что это конструкция WordPress страниц
* и что другие «страницы» на вашем сайте WordPress могут использовать
* Различный шаблон.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ambulance
 */

get_header();
?>

<main id="primary" class="site-main">


  <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();