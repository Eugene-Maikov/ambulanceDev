<?php
/*
Template Name: Новости
*/

get_header();
?>

<main class="main">
  <div class="container">
    <?php
    if ( function_exists('yoast_breadcrumb') ) {
      yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
    }
    ?>
  </div>


  <section class="news section-offset">
    <div class="container">
      <h2 class="title"><?php echo get_the_title(); ?></h2>
      <div class="news__inner">
        <div class="news__item">
          <div class="news__left">
            <h3 class="news__title">Очень длинный заголовок новостей станции скорой помощи</h3>
            <p class="news__text">
              Lorem ipsum dolor sit amsum dolor sit amet consectetur adipisicing elit.
              Cumque quasi ut nobet consectetur adipisicing elit.
              Cumque quasi ut nobis enim earum corrupti doloribus
              recusandae vero cu corporis omnis.
            </p>
            <a class="news__readmore" href="#">читать дальше ≫</a>
          </div>
          <div class="news__right">
            <p class="news__date">Опубликовано: 12.08.2022</p>
            <div class="news__img">
              <picture>
                <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/new.avif" type="image/avif">
                <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/new.webp" type="image/webp">
                <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>../style/app/img/new.jpg" class="image"
                  width="191" height="258" alt="Картинка новости">
              </picture>
            </div>
          </div>
        </div>










      </div>

    </div>

  </section>

</main>


<?php
get_footer();
?>