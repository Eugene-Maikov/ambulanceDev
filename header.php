<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ambulance
 */

?>
<!doctype html>
<html lang="ru" class="page js-focus-visible" <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>style/app/favicon.ico" type="image/x-icon">


  <?php wp_head(); ?>
</head>

<body class="page__body" <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="site-container">

    <header class="header">
      <a href="#" class="header__top">
        <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>../style/app/img/eye.svg" class="image"
          width="20" height="20" alt="icon-eye">
        <p class="header__top-text">Перейти на версию для слабовидящих</p>
      </a>
      <div class="container">
        <div class="header__bottom">
          <div class="header__content">
            <a href="<?php bloginfo('url') ?>"><img loading="lazy"
                src="<?php echo bloginfo('template_url'); ?>../style/app/img/logo.png" class="image" width="95"
                height="" alt="Логотип Минздрава НН"></a>
            <h2 class="header__title">
              Государственное бюджетное учреждение здравоохранения Нижегородской области
              <p class="header__text">Станция скорой медицинской помощи г. Нижнего новгорода</p>
            </h2>
          </div>
          <div class="header__addres">
            <p>Адрес:
              <span>603105 г. Нижний Новгород, ул. Чачиной, 24</span>
            </p>
            <p>
              Приемная:
              <span><a class="header__addres-link" href="tel:+78314286374">+7 (831-42) 8-63-74</a></span>
            </p>
          </div>
          <a href="#" class="header__social">VK</a>
        </div>
      </div>
    </header>

    <nav class="nav" title="Навигация">
      <div class="container">
        <div class="nav__inner">
          <ul class="list-reset nav__list">
            <li class="nav__item"><a href="http://ambulance/" class="nav__link">Главная</a></li>
            <li class="nav__item"><a href="http://ambulance/personnel/" class="nav__link dopmenu">Сотрудники</a>
              <ul class="nav__sublist list-reset">
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
              </ul>
            </li>
            <li class="nav__item"><a href="page-item.html" class="nav__link dopmenu">Информация</a>
              <ul class="nav__sublist list-reset">
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
              </ul>
            </li>
            <li class="nav__item"><a href="feedback.html" class="nav__link dopmenu">Обратная связь</a>
              <ul class="nav__sublist list-reset">
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
              </ul>
            </li>

            <li class="nav__item"><a href="#" class="nav__link dopmenu">Элемент</a>
              <ul class="nav__sublist list-reset">
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
              </ul>
            </li>
            <li class="nav__item"><a href="#" class="nav__link dopmenu">Элемент</a>
              <ul class="nav__sublist list-reset">
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
                <li class="nav__subitem"><a class="nav__sublink" href="">Элемент</a></li>
              </ul>
            </li>

          </ul>
          <div class="nav__buttons">
            <button class="btn-reset burger burger__site-map" aria-label="Открыть карту сайта" aria-expanded="false"
              data-graph-path="site-map" data-burger>
              <span class="burger__line"></span>
            </button>
            <button class="btn-reset burger burger__nav" aria-label="Открыть меню" aria-expanded="false" data-burger>
              <span class="burger__line"></span>
            </button>
            <div class="search"></div>
          </div>

        </div>
      </div>
    </nav>
    <div class="navMobile">
      <div class="navMobile__inner">
        <ul class="list-reset navMobile__list">
          <li class="navMobile__item"><a href="#" class="navMobile__link">Главная</a></li>
          <li class="navMobile__item"><a href="#" class="navMobile__link">Элемент меню</a></li>
          <li class="navMobile__item"><a href="#" class="navMobile__link">Элемент меню</a></li>
          <li class="navMobile__item"><a href="#" class="navMobile__link">Элемент меню</a></li>
          <li class="navMobile__item"><a href="#" class="navMobile__link">Элемент меню</a></li>
          <li class="navMobile__item"><a href="#" class="navMobile__link">Элемент меню</a></li>
          <li class="navMobile__item"><a href="#" class="navMobile__link">Элемент меню</a></li>
          <li class="navMobile__item"><a href="#" class="navMobile__link">Элемент меню</a></li>
        </ul>
      </div>
      <button class="btn-reset navMobile__close" aria-label="Закрыть модальное окно"></button>
    </div>
    <div class="graph-modal">
      <div class="graph-modal__container" role="dialog" aria-modal="true" data-graph-target="site-map">
        <div class="graph-modal__content">
          <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
          <div class="menu">
            <div class="menu__column">
              <div class="menu__box">
                <h3 class="menu__title">Заголовок меню</h3>
                <div class="menu__items">
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент менюЭлемент менюЭлемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                </div>
              </div>
              <div class="menu__box">
                <h3 class="menu__title">Заголовок меню</h3>
                <div class="menu__items">
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                </div>
              </div>
              <div class="menu__box">
                <h3 class="menu__title">Заголовок меню</h3>
                <div class="menu__items">
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                </div>
              </div>
            </div>
            <div class="menu__column">
              <div class="menu__box">
                <h3 class="menu__title">Заголовок меню</h3>
                <div class="menu__items">
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                </div>
              </div>
              <div class="menu__box">
                <h3 class="menu__title">Заголовок меню</h3>
                <div class="menu__items">
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                </div>
              </div>
              <div class="menu__box">
                <h3 class="menu__title">Заголовок меню</h3>
                <div class="menu__items">
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                </div>
              </div>
            </div>
            <div class="menu__column">
              <div class="menu__box">
                <h3 class="menu__title">Заголовок меню</h3>
                <div class="menu__items">
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                </div>
              </div>
              <div class="menu__box">
                <h3 class="menu__title">Заголовок меню</h3>
                <div class="menu__items">
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                  <p class="menu__item"><a class="menu__link" href="#">Элемент меню</a></p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
      wp_nav_menu( [
      'theme_location' => 'primary-menu',
      'menu_id' => 'primary-nav',
      ] );
    ?>