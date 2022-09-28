<?php
/*
Template Name: Главная страница
*/

get_header();
?>

<main class="main">
  <section class="hero">
    <div class="container">
      <h1 class="hero__title"><?php echo carbon_get_the_post_meta( 'hero__title' ); ?></h1>
    </div>

  </section>

  <section class="banner">
    <div class="container">
      <h2 class="visually-hidden">Баннеры</h2>
      <div id='js-show-iframe-wrapper'>
        <div class='pos-banner-fluid bf-12'>
          <div class='bf-12__decor'>
            <div class='bf-12__logo-wrap'>
              <img
                class='bf-12__logo'
                src='https://pos.gosuslugi.ru/bin/banner-fluid/gosuslugi-logo-blue.svg'
                alt='Госуслуги'
              />
              <div class='bf-12__slogan'>Решаем вместе</div >
            </div >
          </div >
          <div class='bf-12__content'>
            <div class='bf-12__text'>
              Недовольны работой больницы?
            </div >

            <div class='bf-12__bottom-wrap'>
              <div class='bf-12__btn-wrap'>
                <!-- pos-banner-btn_2 не удалять; другие классы не добавлять -->
                <button
                  class='pos-banner-btn_2'
                  type='button'
                >Написать о проблеме
                </button >
              </div >
            </div>
          </div >
        </div >
      </div >                 
    </div>
  </section>

  <section class="message">
    <div class="container">
      <div class="message__inner">
        <div class="message__img">
          <picture>
            <source srcset="<?php echo bloginfo('template_url'); ?>/style/app/img/message.avif" type="image/avif">
            <source srcset="<?php echo bloginfo('template_url'); ?>/style/app/img/message.webp" type="image/webp">
            <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>/style/app/img/message1.png" class="image"
              width="160" height="160" alt="Обращение граждан">
          </picture>
        </div>
        <div class="message__contants">
          <h2 class="message__title"><?php echo carbon_get_the_post_meta( 'message__title' ); ?></h2>
          <p class="message__subtitle"><?php echo carbon_get_the_post_meta( 'message__subtitle' ); ?></p>
          <div class="message__btn-box">
            <a href="feedback.html"
              class="btn-reset btn message__btn"><?php echo carbon_get_the_post_meta( 'message__btn' ); ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about section-offset">
    <div class="container">
      <h1 class="title">О нас</h1>
      <div class="about__content">
        <p class="about__text"><?php echo carbon_get_the_post_meta( 'about__text' ); ?>
        </p>
      </div><!-- /. about__content -->
    </div><!-- /. container -->
  </section>

<?php 
  $section_news =  carbon_get_the_post_meta( 'section_news' );
  $section_news_ids = wp_list_pluck($section_news, 'id');
  
  // запрос
  $section_news_query_args = [
    'post_type' => 'new', 
    'post__in' => $section_news_ids, 
  ];
  $section_news_query = new WP_Query( $section_news_query_args );
?>

<?php if ( $section_news_query->have_posts() ) : ?>

<section class="news section-offset">
    <div class="container">
      <h2 class="title">Новости</h2>
      <div class="news__inner">

	<?php while ( $section_news_query->have_posts() ) : $section_news_query->the_post(); ?>
		    <?php echo get_template_part('new-content'); ?>
	<?php endwhile; ?>

	<?php wp_reset_postdata(); ?>

    </div>
      <div class="news__btn-box">
        <button class="btn-reset btn news__btn" data-graph-path="">Все новости</button>
      </div>
    </div>
  </section>
  <?php endif; ?>


  <section class="news section-offset">
  <div class="container">
    <h2 class="title">Новости</h2>
    <div class="news__inner news__inner-archive">
      <div class="news__item">
        <div class="news__left news__left-archive">
          <h3 class="news__title news__title-archive">Очень длинный заголовок новостей станции скорой помощи</h3>
          <p class="news__text news__text-archive">
            Lorem ipsum dolor sit amsum dolor sit amet consectetur adipisicing elit.
            Cumque quasi ut nobet consectetur adipisicing elit.
            Cumque quasi ut nobis enim earum corrupti doloribus
            recusandae vero cu corporis omnis.
          </p>
          <p class="news__date news__date-archive">Опубликовано: 12.08.2022</p>
        </div>
        <div class="news__right news__right-archive">
          <div class="news__img-archive">
            <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>../style/app/img/new.jpg" class="image" width="100%" alt="Картинка новости">
          </div>
        </div>
      </div>
      
      
      

    </div>
    <div class="news__btn-box">
      <button class="btn-reset btn news__btn" data-graph-path="">Все новости</button>
    </div>
  </div>

</section>


  
        
      

  <?php $substations = carbon_get_the_post_meta('substations');
  if ( ! empty( $substations ) ): ?>
  <section class="substations section-offset">
    <div class="container">
      <h2 class="title title--light">Подстанции</h2>
      <!-- Доп. контейнер -->
      <div class="substations__container">
        <!-- Главный контейнер слайдера -->
        <div class="swiper substations__slider">
          <!-- Слайды -->
          <div class="swiper-wrapper substations__slider-wpapper">

          <?php foreach ( $substations as $item ): ?>

            <div class="swiper-slide substations__slider-slick">
              <div class="substations__item">
                <picture>
                  <img loading="lazy" src="<?php echo $item['substations__image']; ?>"
                    class="image" alt="Фото подстанции">
                </picture>
                <div class="substations__content">
                  <a href="<?php echo $item['substations__link'] ?>" class="substations__title"><?php echo $item['substations__title'] ?></a>
                  <p class="substations__text"><?php echo $item['substations__text'] ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
            
          </div><!-- /.Слайды -->
        </div><!-- /.Главный контейнер слайдера -->
        <div class="substations__btn-prev"></div>
        <div class="substations__btn-next"></div>
      </div><!-- /.Доп. контейнер -->
      <div class="news__btn-box">
        <button class="btn-reset btn substations__btn">Все подстанции</button>
      </div>
    </div>
  </section>
  <?php endif; ?>

  
  <?php $usefulLinks = carbon_get_the_post_meta('useful_links');
   if ( ! empty( $usefulLinks ) ): ?>
  <section class="useful section-offset">
    <div class="container-fluid">
      <h2 class="title">Полезное</h2>
      <div class="useful__inner">
        <?php foreach ( $usefulLinks as $item ): ?>
        <a class="useful__link" href="<?php echo $item['useful_links_link'] ?>"><?php echo $item['useful_links_title'] ?></a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <div class="logos section-offset">
    <div class="container-min">
      <!-- Доп. контейнер -->
      <div class="logos__container">
        <!-- Главный контейнер слайдера -->
        <div class="swiper logos__slider">
          <?php $gallery__logos = carbon_get_the_post_meta( 'gallery__logos' ); 
           foreach($gallery__logos as $gallery_logos_id) : 
            $img_src = wp_get_attachment_image_url( $gallery_logos_id, 'full' ); ?>

          <!-- Слайды -->
          <div class="swiper-wrapper logos__slider-wpapper">
            <div class="swiper-slide logos__slider-slick">
              <div class="logos__item">
                <img src="<?php echo $img_src; ?>" class="image" width="200" alt="Сотрудничество">
              </div>
            </div>
          </div><!-- /.Слайды -->

          <?php endforeach; ?>

        </div><!-- /.Главный контейнер слайдера -->
        <div class="logos__btn-prev"></div>
        <div class="logos__btn-next"></div>
      </div><!-- /.Доп. контейнер -->
    </div>
  </div>





  <section class="contacts section-offset">
    <div class="container">
      <div class="contacts__inner">
        <div class="contacts__map">
          <?php echo carbon_get_the_post_meta( 'contacts__map' ); ?>
          <!-- <iframe
            src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa3face47ff1f1d60a75f24fd83277248cadaf28485eaa0d69579feac12099f32&source=constructor"
            frameborder="0" width="628" height="438"></iframe> -->
        </div>
        <div class="contacts__info">
          <div class="contacts__top">
            <h3 class="contacts__title"><?php echo carbon_get_the_post_meta( 'contacts__title' ); ?></h3>
            <div class="contacts__working">
              <p class="contacts__working-item"><span>Режим работы:
                </span><?php echo carbon_get_the_post_meta( 'contacts__working' ); ?></p>
              <p class="contacts__working-item"><span>Адрес:
                </span><?php echo carbon_get_the_post_meta( 'contacts__working-address' ); ?></p>
            </div>
          </div>
          <div class="contacts__bottom">
            <p class="contacts__bottom-item">Приемная: <a class="contacts__bottom-link"
                href="tel:<?php echo carbon_get_theme_option( 'header__phone-link' ); ?>"><?php echo carbon_get_theme_option( 'header__phone' ); ?></a>
            </p>
            <p class="contacts__bottom-item">Факс: <a class="contacts__bottom-link"
                href="tel:<?php echo carbon_get_theme_option( 'header__phone-link' ); ?>"><?php echo carbon_get_theme_option( 'header__phone' ); ?></a>
            </p>
            <p class="contacts__bottom-item">Почта: <a class="contacts__bottom-link"
                href="mailto:<?php echo carbon_get_the_post_meta( 'contacts__email' ); ?>"><?php echo carbon_get_the_post_meta( 'contacts__email' ); ?></a>
            </p>
          </div>
        </div>
      </div>
    </div>

  </section>

</main>


<?php
get_footer();
?>