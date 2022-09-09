<?php
/**
* Шаблон для отображения страниц архива
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package ambulance
 */

get_header();
?>
<div class="container">
  <div class="wrapper">
    <main id="primary" class="site-main">
      <section class="news section-offset">
        <div class="container">
          <h2 class="title">Новости</h2>
          <div class="news__inner">

            <?php if ( have_posts() ) : ?>



            <?php
			while ( have_posts() ) :?>


            <div class="news__item">
              <div class=" news__left">
                <h3 class="news__title"><?php the_title(); ?></h3>
                <p class="news__text">
                  <?php the_content(); ?>
                </p>
              </div>
              <div class="news__right">
                <div class="news__img">
                  <div class="news__img"><?php ambulance_post_thumbnail(); ?></div>
                </div>
              </div>
            </div>

            <?php
      the_post();
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile;

			the_posts_navigation();

			else :

			get_template_part( 'template-parts/content', 'none' );
			

			endif;
			?>
          </div>
        </div>
      </section>
    </main>



    <?php get_sidebar(); ?>
  </div>
  <?php get_footer(); ?>