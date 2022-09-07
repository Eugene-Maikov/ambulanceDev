<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );

  Container::make( 'theme_options', 'Шапка/Подвал' )
		->set_page_parent( 'themes.php' )
    ->add_tab( 'Шапка сайта', [
			Field::make('text', 'header__title', 'Заголовок шапки')->set_required(true)->help_text('Принадлежность к гос учреждению')->set_width(50),
			Field::make('text', 'header__text', 'Подзаголовок шапки')->set_required(true)->help_text('Название госучреждения')->set_width(50),
			Field::make('text', 'header__addres', 'Основной адрес')->set_required(true)->help_text('Адрес (ваш адрес)')->set_width(25),
			Field::make('text', 'header__phone', 'Основной телефон')->set_required(true)->help_text('Приемная: (ваш телефон)')->set_width(25),
			Field::make('text', 'header__phone-link', 'Введите телефон еще раз')->set_required(true)->help_text('В формате +79999999999')->set_width(25),
			Field::make('text', 'header__social-link', 'Ссылка на VK')->set_width(25),
		])
    ->add_tab( 'Подвал сайта', [
			Field::make('text', 'footer__copy', 'Копирайт')->help_text('Копирайт сайта (авторское право)')->set_width(100),
	]);
    
	Container::make('post_meta', 'Пользовательские данные')
	->show_on_page('7')
	->add_tab( 'Основной контент', array(
		Field::make('text', 'hero__title', 'Главный заголовок')->set_required(true)->help_text('Отображается на первом экране')->set_width(100),
		Field::make('text', 'message__title', 'Сообщение - залоговок')->help_text('Экран отправки на формы обратной связи')->set_width(20),
		Field::make('text', 'message__subtitle', 'Сообщение - описание')->help_text('Экран отправки на формы обратной связи')->set_width(60),
		Field::make('text', 'message__btn', 'Сообщение - кнопка')->help_text('Экран отправки на формы обратной связи')->set_width(20),
		Field::make('text', 'about__title', 'О нас - залоговок')->set_width(10),
		Field::make('rich_text', 'about__text', 'О нас - текст')->set_width(90)->help_text('Краткая информация об организации'),
		
	))
	->add_tab( 'Контакты', array(
		Field::make('text', 'contacts__title', 'Название организации')->set_width(25),
		Field::make('text', 'contacts__working', 'Режим работы')->set_width(25),
		Field::make('text', 'contacts__working-address', 'Адрес')->set_width(25),
		Field::make('text', 'contacts__email', 'Почта')->set_width(25),
		Field::make('textarea', 'contacts__map', 'Карта главного офиса')->help_text('Скрипт карты'),
		Field::make( 'complex', 'logos' )
		))
		->add_tab( 'Логотипы сотрудничества', array(
			Field::make( 'complex', 'logos', 'Логотип')
			->add_fields( array(
					Field::make( 'image', 'cooperation__logo', 'Логотип' )
			))
	));