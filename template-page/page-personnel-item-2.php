<?php
/*
Template Name: Подстраница 2
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
    <div class="personnel section-offset">
      <div class="title">Персонал</div>


      <ul class="list-reset personnel__list list">
        <li><a href="Элемент списка">Элемент списка</a></li>
        <li><a href="Элемент списка">Элемент списка</a></li>
        <li><a href="Элемент списка">Элемент списка</a></li>
        <li><a href="Элемент списка">Элемент списка</a></li>
        <li><a href="Элемент списка">Элемент списка</a></li>
      </ul>

    </div>

  </div>

</main>


<?php
get_footer();
?>