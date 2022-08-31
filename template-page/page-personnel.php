<?php
/*
Template Name: Сотрудники
*/

get_header();
?>

<main class="main">
  <div class="container">
    <ul class="reset-list breadcrumbs">
      <li><a href="../index.html">Главная</a></li>
      <li>Текущая страница</li>
    </ul>
  </div>

  <div class="container">
    <div class="personnel section-offset">
      <div class="title">Персонал</div>
      <div class="person">
        <div class="title-regular person__title">Голубев Игорь Владимирович</div>

        <div class="person__inner">
          <div class="person__preview">
            <div class="person__image">
              <picture>
                <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/head-doctor.avif"
                  type="image/avif">
                <source srcset="<?php echo bloginfo('template_url'); ?>../style/app/img/head-doctor.webp"
                  type="image/webp">
                <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>../style/app/img/head-doctor.jpg"
                  class="image" width="" height="" alt="фото персонала">
              </picture>
            </div>
            <h3 class="person__preview-title">Голубев Игорь Владимирович</h3>
            <div class="person__preview-positin">Главный врач</div>
          </div>
          <div class="person__info">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Ea tempora aliquid, quam nisi iusto fuga velit minus
              quibusdam voluptas mollitia? Error temporibus quisquam
              accusamus quod nesciunt repellendus nisi nam quibusdam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Ea tempora aliquid, quam nisi iusto fuga velit minus
              accusamus quod nesciunt repellendus nisi nam quibusdam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Ea tempora aliquid, quam nisi iusto fuga velit minus
              quibusdam voluptas mollitia? Error temporibus quisquam
              accusamus quod nesciunt repellendus nisi nam quibusdam.
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Ea tempora aliquid, quam nisi iusto fuga velit minus
              quibusdam voluptas mollitia? Error temporibus quisquam
              accusamus quod nesciunt repellendus nisi nam quibusdam.</p>
          </div>

        </div>
      </div>

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