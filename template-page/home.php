<?php
/*
Template Name: Главная страница
*/

get_header();
?>

<main class="main">
  <section class="hero">
    <div class="container">
      <h1 class="hero__title">Помощь придет всегда!</h1>
    </div>

  </section>

  <section class="banner">
    <div class="container">
      <h2 class="visually-hidden">Баннеры</h2>
      <div class="banner__list">
        <a href="#" class="banner__item">
          <p>БАННЕР</p>
        </a>
        <a href="#" class="banner__item">
          <p>БАННЕР</p>
        </a>
        <a href="#" class="banner__item">
          <p>БАННЕР</p>
        </a>
        <a href="#" class="banner__item">
          <p>БАННЕР</p>
        </a>

      </div>
    </div>
  </section>

  <section class="message">
    <div class="container">
      <div class="message__inner">
        <div class="message__img">
          <picture>
            <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/message.avif" type="image/avif">
            <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/message.webp" type="image/webp">
            <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>../style/app/img/message1.png" class="image"
              width="160" height="160" alt="Обращение граждан">
          </picture>
        </div>
        <div class="message__contants">
          <h2 class="message__title">Напишите письмо руководству</h2>
          <p class="message__subtitle">Вы можете задать все интересующие Вас вопросы, поделиться предложениями
            по улучшению качества работы
          </p>
          <div class="message__btn-box">
            <a href="feedback.html" class="btn-reset btn message__btn">Напиать письмо</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about section-offset">
    <div class="container">
      <h1 class="title">О нас</h1>
      <div class="about__content">
        <p class="about__text">ГБУЗ НО ССМПНН для населения Нижнего Новгорода
          круглосуточно оказывает скорую медицинскую помощь (в том числе
          выезд специализированных бригад: педиатрического,
          психиатрического, реанимационного профиля).
        </p>
        <p class="about__text">В соответствии с Приказом Министерства здравоохранения и социального развития
          РФ от 20
          июня 2013 г. № 388н «Об утверждении порядка оказания скорой медицинской помощи»:</p>
        <ul class="about__list">
          <li class="about__list-item">Скорая, в том числе скорая специализированная, медицинская помощь
            оказывается при
            заболеваниях, несчастных
            случаях, травмах, отравлениях и других состояниях, требующих срочного медицинского вмешательства.
          </li>
          <li class="about__list-item">Скорая, в том числе скорая специализированная, медицинская помощь
            оказывается на
            основе стандартов
            медицинской помощи.</li>
          <li class="about__list-item">Скорая, в том числе скорая специализированная, медицинская помощь
            оказывается в
            следующих условиях:
            <ol>
              <li>Вне медицинской организации — по месту вызова бригады скорой, в том числе скорой
                специализированной,
                медицинской помощи, а также в транспортном средстве при медицинской эвакуации;</li>
              <li>Амбулаторно (в условиях, не предусматривающих круглосуточного медицинского наблюдения и
                лечения);
              </li>
              <li>Стационарно (в условиях, обеспечивающих круглосуточное медицинское наблюдение и лечение).
              </li>
            </ol>
          </li>
          <li class="about__list-item">Скорая, в том числе скорая специализированная, медицинская помощь
            оказывается в
            следующих формах:
            <ol>
              <li>Экстренной — при внезапных острых заболеваниях, состояниях, обострении хронических
                заболеваний,
                представляющих угрозу жизни пациента;</li>
              <li>Неотложной — при внезапных острых заболеваниях, состояниях, обострении хронических
                заболеваний без
                явных
                признаков угрозы жизни пациента.</li>
            </ol>
          </li>
        </ul>
      </div><!-- /. about__content -->
    </div><!-- /. container -->
  </section>

  <section class="news section-offset">
    <div class="container">
      <h2 class="title">Новости</h2>
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
        <div class="news__item">
          <div class="news__left">
            <h3 class="news__title">Очень длинный заголовок новостей станции скорой помощи</h3>
            <p class="news__text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Cumque quasi ut nobsum dolor sit amet consectetur adipisicing elit.
              Cumque quasi ut nobis enim earum corrupti doloribus
              recusandae vero cu corporis omsum dolor sit amet consectetur adipisicing elit.
              Cumque quasi ut nobsum dolor sit amet consectetur adipisicing elit.
              Cumque quasi ut nobnis.
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
        <div class="news__item">
          <div class="news__left">
            <h3 class="news__title">Очень длинный заголовок новостей станции скорой помощи</h3>
            <p class="news__text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Cumque quasi ut nobis enim earum corrupti doloribus
              recusandae vero cu corporis omnis.nim earum corrupti doloribus
              recusandae vero cu corporis omnis.nim earum corrupti doloribus
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
        <div class="news__item">
          <div class="news__left">
            <h3 class="news__title">Очень длинный заголовок новостей станции скорой помощи</h3>
            <p class="news__text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
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
      <div class="news__btn-box">
        <button class="btn-reset btn news__btn" data-graph-path="">Все новости</button>
      </div>
    </div>

  </section>

  <section class="substations section-offset">
    <div class="container">
      <h2 class="title title--light">Подстанции</h2>
      <!-- Доп. контейнер -->
      <div class="substations__container">
        <!-- Главный контейнер слайдера -->
        <div class="swiper substations__slider">
          <!-- Слайды -->
          <div class="swiper-wrapper substations__slider-wpapper">
            <div class="swiper-slide substations__slider-slick">
              <div class="substations__item">
                <picture>
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.avif"
                    type="image/avif">
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.webp"
                    type="image/webp">
                  <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.jpg"
                    class="image" alt="Фото подстанции">
                </picture>
                <div class="substations__content">
                  <a href="#" class="substations__title">Подстанция №</a>
                  <p class="substations__text">Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Numquam, adipisci
                    asperiores! Tempora nam facere quis deleniti distinctio
                    necessitatibus iusto cumque nisi molestiae
                    ut repudiandae asperiores optio.</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide substations__slider-slick">
              <div class="substations__item">
                <picture>
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.avif"
                    type="image/avif">
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.webp"
                    type="image/webp">
                  <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.jpg"
                    class="image" alt="Фото подстанции">
                </picture>
                <div class="substations__content">
                  <a href="#" class="substations__title">Подстанция №</a>
                  <p class="substations__text">Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Numquam, adipisci
                    asperiores! Tempora nam facere quis deleniti distinctio
                    necessitatibus iusto cumque nisi molestiae
                    ut repudiandae asperiores optio.</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide substations__slider-slick">
              <div class="substations__item">
                <picture>
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.avif"
                    type="image/avif">
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.webp"
                    type="image/webp">
                  <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.jpg"
                    class="image" alt="Фото подстанции">
                </picture>
                <div class="substations__content">
                  <a href="#" class="substations__title">Подстанция №</a>
                  <p class="substations__text">Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Numquam, adipisci
                    asperiores! Tempora nam facere quis deleniti distinctio
                    necessitatibus iusto cumque nisi molestiae
                    ut repudiandae asperiores optio.</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide substations__slider-slick">
              <div class="substations__item">
                <picture>
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.avif"
                    type="image/avif">
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.webp"
                    type="image/webp">
                  <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.jpg"
                    class="image" alt="Фото подстанции">
                </picture>
                <div class="substations__content">
                  <a href="#" class="substations__title">Подстанция №</a>
                  <p class="substations__text">Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Numquam, adipisci
                    asperiores! Tempora nam facere quis deleniti distinctio
                    necessitatibus iusto cumque nisi molestiae
                    ut repudiandae asperiores optio.</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide substations__slider-slick">
              <div class="substations__item">
                <picture>
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.avif"
                    type="image/avif">
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.webp"
                    type="image/webp">
                  <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.jpg"
                    class="image" alt="Фото подстанции">
                </picture>
                <div class="substations__content">
                  <a href="#" class="substations__title">Подстанция №</a>
                  <p class="substations__text">Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Numquam, adipisci
                    asperiores! Tempora nam facere quis deleniti distinctio
                    necessitatibus iusto cumque nisi molestiae
                    ut repudiandae asperiores optio.</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide substations__slider-slick">
              <div class="substations__item">
                <picture>
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.avif"
                    type="image/avif">
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.webp"
                    type="image/webp">
                  <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.jpg"
                    class="image" alt="Фото подстанции">
                </picture>
                <div class="substations__content">
                  <a href="#" class="substations__title">Подстанция №</a>
                  <p class="substations__text">Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Numquam, adipisci
                    asperiores! Tempora nam facere quis deleniti distinctio
                    necessitatibus iusto cumque nisi molestiae
                    ut repudiandae asperiores optio.</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide substations__slider-slick">
              <div class="substations__item">
                <picture>
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.avif"
                    type="image/avif">
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.webp"
                    type="image/webp">
                  <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.jpg"
                    class="image" alt="Фото подстанции">
                </picture>
                <div class="substations__content">
                  <a href="#" class="substations__title">Подстанция №</a>
                  <p class="substations__text">Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Numquam, adipisci
                    asperiores! Tempora nam facere quis deleniti distinctio
                    necessitatibus iusto cumque nisi molestiae
                    ut repudiandae asperiores optio.</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide substations__slider-slick">
              <div class="substations__item">
                <picture>
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.avif"
                    type="image/avif">
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.webp"
                    type="image/webp">
                  <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.jpg"
                    class="image" alt="Фото подстанции">
                </picture>
                <div class="substations__content">
                  <a href="#" class="substations__title">Подстанция №</a>
                  <p class="substations__text">Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Numquam, adipisci
                    asperiores! Tempora nam facere quis deleniti distinctio
                    necessitatibus iusto cumque nisi molestiae
                    ut repudiandae asperiores optio.</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide substations__slider-slick">
              <div class="substations__item">
                <picture>
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.avif"
                    type="image/avif">
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.webp"
                    type="image/webp">
                  <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>../style/app/img/substation.jpg"
                    class="image" alt="Фото подстанции">
                </picture>
                <div class="substations__content">
                  <a href="#" class="substations__title">Подстанция №</a>
                  <p class="substations__text">Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Numquam, adipisci
                    asperiores! Tempora nam facere quis deleniti distinctio
                    necessitatibus iusto cumque nisi molestiae
                    ut repudiandae asperiores optio.</p>
                </div>
              </div>
            </div>
          </div><!-- /.Слайды -->
        </div><!-- /.Главный контейнер слайдера -->
        <div class="substations__btn-prev"></div>
        <div class="substations__btn-next"></div>
      </div><!-- /.Доп. контейнер -->
      <div class="news__btn-box">
        <!-- <button class="btn-reset btn substations__btn">Все подстанции</button> -->
      </div>
    </div>
  </section>

  <section class="useful section-offset">
    <div class="container-fluid">
      <h2 class="title">Полезное</h2>
      <div class="useful__inner">
        <a class="useful__link" href="#">ПАМЯТКА ОКАЗАНИЯ СКОРОЙ МЕДИЦИНСКОЙ ПОМОЩИ НАСЕЛЕНИЮ</a>
        <a class="useful__link" href="#">КАК ВЫЗВАТЬ СКОРУЮ ПОМОЩЬ С МОБИЛЬНОГО</a>
        <a class="useful__link" href="#">ВИДЕОМАТЕРИАЛЫ</a>
        <a class="useful__link" href="#">СТАНДАРТЫ ОКАЗАНИЯ СКОРОЙ МЕДИЦИНСКОЙ ПОМОЩИ</a>
        <a class="useful__link" href="#">ПАМЯТКА ОКАЗАНИЯ СКОРОЙ МЕДИЦИНСКОЙ ПОМОЩИ НАСЕЛЕНИЮ</a>
      </div>

    </div>
  </section>

  <div class="logos section-offset">
    <div class="container-min">
      <!-- Доп. контейнер -->
      <div class="logos__container">
        <!-- Главный контейнер слайдера -->
        <div class="swiper logos__slider">
          <!-- Слайды -->
          <div class="swiper-wrapper logos__slider-wpapper">
            <div class="swiper-slide logos__slider-slick">
              <div class="logos__item">
                <picture>
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.avif" type="image/avif">
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.webp" type="image/webp">
                  <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.png"
                    class="image" width="200" alt="Сотрудничество">
                </picture>
              </div>
            </div>
            <div class="swiper-slide logos__slider-slick">
              <div class="logos__item">
                <picture>
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.avif" type="image/avif">
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.webp" type="image/webp">
                  <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.png"
                    class="image" width="200" alt="Сотрудничество">
                </picture>
              </div>
            </div>
            <div class="swiper-slide logos__slider-slick">
              <div class="logos__item">
                <picture>
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.avif" type="image/avif">
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.webp" type="image/webp">
                  <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.png"
                    class="image" width="200" alt="Сотрудничество">
                </picture>
              </div>
            </div>
            <div class="swiper-slide logos__slider-slick">
              <div class="logos__item">
                <picture>
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.avif" type="image/avif">
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.webp" type="image/webp">
                  <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.png"
                    class="image" width="200" alt="Сотрудничество">
                </picture>
              </div>
            </div>
            <div class="swiper-slide logos__slider-slick">
              <div class="logos__item">
                <picture>
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.avif" type="image/avif">
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.webp" type="image/webp">
                  <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.png"
                    class="image" width="200" alt="Сотрудничество">
                </picture>
              </div>
            </div>
            <div class="swiper-slide logos__slider-slick">
              <div class="logos__item">
                <picture>
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.avif" type="image/avif">
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.webp" type="image/webp">
                  <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.png"
                    class="image" width="200" alt="Сотрудничество">
                </picture>
              </div>
            </div>
            <div class="swiper-slide logos__slider-slick">
              <div class="logos__item">
                <picture>
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.avif" type="image/avif">
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.webp" type="image/webp">
                  <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.png"
                    class="image" width="200" alt="Сотрудничество">
                </picture>
              </div>
            </div>
            <div class="swiper-slide logos__slider-slick">
              <div class="logos__item">
                <picture>
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.avif" type="image/avif">
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.webp" type="image/webp">
                  <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.png"
                    class="image" width="200" alt="Сотрудничество">
                </picture>
              </div>
            </div>
            <div class="swiper-slide logos__slider-slick">
              <div class="logos__item">
                <picture>
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.avif" type="image/avif">
                  <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.webp" type="image/webp">
                  <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>../style/app/img/logos.png"
                    class="image" width="200" alt="Сотрудничество">
                </picture>
              </div>
            </div>
          </div><!-- /.Слайды -->
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
          <iframe
            src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa3face47ff1f1d60a75f24fd83277248cadaf28485eaa0d69579feac12099f32&source=constructor"
            frameborder="0" width="628" height="438"></iframe>
        </div>
        <div class="contacts__info">
          <div class="contacts__top">
            <h3 class="contacts__title">ГБУЗНО «Станция скорой медицинской помощи г. Нижнего новгорода»</h3>
            <div class="contacts__working">
              <p class="contacts__working-item"><span>Режим работы: </span>круглосуточно</p>
              <p class="contacts__working-item"><span>Адрес: </span>603105 г. Нижний Новгород, ул. Чачиной, 24</p>
            </div>
          </div>
          <div class="contacts__bottom">
            <p class="contacts__bottom-item">Приемная: <a class="contacts__bottom-link" href="tel:+78314286374">8
                (831) 428-63-74</a></p>
            <p class="contacts__bottom-item">Факс: <a class="contacts__bottom-link" href="tel:+78314286374">8 (831)
                428-63-74</a></p>
            <p class="contacts__bottom-item">Почта: <a class="contacts__bottom-link"
                href="mailto:email@yandex.ru">email@yandex.ru</a></p>
          </div>
        </div>
      </div>
    </div>

  </section>

</main>


<?php
get_footer();
?>