<?php
/*
Template Name: Обратная связь
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
    <div class="feedback">
      <div class="title">Обратная связь</div>
      <h2 class="title-regular feedback__title">Обращение к руководству ГБУЗ НО ССМПНН</h2>
      <form action="#" class="form">
        <label class="form__label">
          <input type="text" name="name" class="input-reset form__input" placeholder="Имя">
        </label>
        <label class="form__label">
          <input type="tel" name="phone" class="input-reset form__input" placeholder="Телефон">
        </label>
        <label class="form__label">
          <input type="email" name="email" class="input-reset form__input" placeholder="E-mail">
        </label>
        <label class="form__label">
          <textarea class="input-reset form__input form__textarea" name="descr" id="descr"
            placeholder="Сообщение"></textarea>
        </label>
        <div class="form__links">
          <p class="form__link">Регламент по работе с обращениями граждан в ГБУЗ НО ССМПНН <a href="#">Просмотреть</a>
          </p>
          <p class="form__link">Политика обработки и защиты персональных данных <a href="#">Просмотреть</a></p>
          <div class="form__checkbox">
            <label class="custom-checkbox">
              <input type="checkbox" class="custom-checkbox__field" required>
              <span class="custom-checkbox__content">Я ознакомился с регламентом</span>
            </label>
            <label class="custom-checkbox">
              <input type="checkbox" class="custom-checkbox__field" required>
              <span class="custom-checkbox__content">Я согласен на обработку персональных данных</span>
            </label>
          </div>
        </div>
        <button class="btn-reset btn form__btn">Отправить</button>
      </form>

    <?php echo do_shortcode( '[contact-form-7 id="111" title="form-3"]' ); ?>

    </div>

  </div>

</main>


<?php
get_footer();
?>