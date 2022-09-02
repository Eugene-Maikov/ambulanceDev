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

    </div>

  </div>

</main>


<?php
get_footer();
?>