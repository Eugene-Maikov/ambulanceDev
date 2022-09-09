<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ambulance
 */

?>
<div class="container">
  <div class="wrapper">
    <article id="post-<?php the_ID(); ?>" class="news section-offset">

      <header>
        <h2 class="title-regular"><?php
					if ( is_singular() ) :
						the_title( '<h1 class="title-regular">', '</h1>' );
					else :
						the_title( '<h2 class="title-regular"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;
						?>
        </h2>
      </header>

      <main class="main">
        <div class="news__inner">
          <div class="news__left">
            <p class="news__text"><?php the_content();?></p>
          </div>
          <div class="news__right">
            <div class="news__img"><?php ambulance_post_thumbnail(); ?></div>
          </div>
        </div>

        </section>
      </main>


    </article><!-- #post-<?php the_ID(); ?> -->

    <?php get_sidebar(); ?>
  </div>