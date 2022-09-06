<?php
/*
Template Name: Структура
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

  <div class="container">
    <div class="section section-offset">
      <div class="title">Структура</div>

      <ul class="list-reset list">
        <li><a href="#">Подстанции</a></li>
        <li><a href="#">Сотрудники</a></li>
      </ul>

      <div class="structure">
        <h2 class="title-regular">Администрация</h2>
        <div class="structure__item">
          <p class="structure__post">Главный врач</p>
          <p class="structure__name">Голубев Игорь Владимирович</p>
          <p class="structure__tel">тел. (831) 281-00-99 доб. 309</p>
        </div>
        <div class="structure__item">
          <p class="structure__post">Главный врач</p>
          <p class="structure__name">Голубев Игорь Владимирович</p>
          <p class="structure__tel">тел. (831) 281-00-99 доб. 309</p>
        </div>
      </div>
    </div>
  </div>

  </div>

</main>


<?php
get_footer();
?>