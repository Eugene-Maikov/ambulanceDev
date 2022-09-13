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



</main>


<?php
get_footer();
?>