<?php
/**
 * Основной шаблон сезона.
 */

// Системный шаблон "Шапка сайта".
get_header(); ?>

    <div class="wrapper">

		<?php
		// Блок "Вехняя часть сайта" с контактами и соц. кнопками.
		get_template_part( 'templates/section-header' );
		?>

        <div class="content">

			<?php

			// Блок с мобильным меню.
			get_template_part( 'templates/section-menu' );

			// Блок блок с большим изображением в шапке сайта.
			get_template_part( 'templates/section-main-bg' );

			// Блок "О лагере".
			get_template_part( 'templates/section-camp' );

			// Блок "Как проходит?".
			get_template_part( 'templates/section-how-is' );

			// Блок "Мастер-классы".
			get_template_part( 'templates/section-master-classes' );

			// Блок "Появились вопросы?".
			get_template_part( 'templates/section-question' );

			// Блок "Статистика".
			get_template_part( 'templates/section-statistics' );

			// Блок "Команда".
			get_template_part( 'templates/section-command' );

			// Блок "Распорядок дня".
			get_template_part( 'templates/section-schedule' );

			// Блок "Условия".
			get_template_part( 'templates/section-conditions' );

			// Блок "Ближайшая смена".
			get_template_part( 'templates/section-next-shift' );

			// Блок "Скидки и Акции".
			get_template_part( 'templates/section-shares' );

			// Блок "Методичка".
			get_template_part( 'templates/section-manuals' );

			// Блок "Нас спрашивают".
			get_template_part( 'templates/section-faq' );

			// Блок "Остались вопросы?".
			get_template_part( 'templates/section-question1' );

			// Блок "Отзывы".
			get_template_part( 'templates/section-reviews' );

			// Блок "Контакты".
			get_template_part( 'templates/section-contacts-b' );

			// Блок "Карта от Яндекса".
			get_template_part( 'templates/section-map' );

			?>

        </div><!-- /.content -->

		<?php
		// Блок "Подвал/Футер".
		get_template_part( 'templates/section-footer' );
		?>

    </div><!-- /.wrapper -->

<?php
// Системный шаблон "Подвал/Футер".
get_footer();
