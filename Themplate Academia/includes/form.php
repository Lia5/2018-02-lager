<?php
/**
 * Функционал отправки писем с форм лендинга.
 */


/**
 * Отправляет письмо с формы "Появились вопросы?".
 *
 * @param AJAX_Simply_Core $jx
 */
function ajaxs_form_question( $jx ) {

	$name = sanitize_text_field( $jx->data['name_client'] );
	$tel  = sanitize_text_field( $jx->data['tel_client'] );

	// Проверка на заполненность полей
	if ( empty( $name ) || empty( $tel ) ) {
		$jx->alert( 'Введите имя и телефон, пожалуйста.' );
		$jx->error();
	}

	$to = get_option( 'admin_email' );

	$subject = 'Вопрос от пользователя по имени ' . $name;

	$message = "<b>Имя</b>: $name <br>";
	$message .= "<b>Телефон</b>: $tel <br>";
	$message .= '<b>Форма</b>: Появились вопросы?';
	$message .= '<b>Сайт</b>: Академия Героев';

	$headers = [
		"MIME-Version: 1.0",
		"Content-Type: text/html",
	];

	$status = wp_mail( $to, $subject, $message, $headers );

	if ( $status ) {
		$jx->done();
	}

	$jx->alert( 'Извините, но письмо не смогло быть отправлено по техническим причинам.' );
	$jx->error();
}

/**
 * Отправляет письмо с формы "Остались вопросы?".
 *
 * @param AJAX_Simply_Core $jx
 */
function ajaxs_form_question1( $jx ) {

	$name = sanitize_text_field( $jx->data['name_client'] );
	$tel  = sanitize_text_field( $jx->data['tel_client'] );

	// Проверка на заполненность полей
	if ( empty( $name ) || empty( $tel ) ) {
		$jx->alert( 'Введите имя и телефон, пожалуйста.' );
		$jx->error();
	}

	$to = get_option( 'admin_email' );

	$subject = 'Вопрос от пользователя по имени ' . $name;

	$message = "<b>Имя</b>: $name <br>";
	$message .= "<b>Телефон</b>: $tel <br>";
	$message .= '<b>Форма</b>: Остались вопросы?';
	$message .= '<b>Сайт</b>: Академия Героев';

	$headers = [
		"MIME-Version: 1.0",
		"Content-Type: text/html",
	];

	$status = wp_mail( $to, $subject, $message, $headers );

	if ( $status ) {
		$jx->done();
	}

	$jx->alert( 'Извините, но письмо не смогло быть отправлено по техническим причинам.' );
	$jx->error();
}

/**
 * Отправляет письмо с формы "Методичка".
 *
 * @param AJAX_Simply_Core $jx
 */
function ajaxs_form_manuals( $jx ) {

	$name_c  = sanitize_text_field( $jx->data['name_client'] );
	$phone_c = sanitize_text_field( $jx->data['tel_client'] );
	$email_c = sanitize_text_field( $jx->data['email_client'] );

	// Проверка на заполненность полей
	if ( empty( $name_c ) || empty( $email_c ) ) {
		$jx->alert( 'Введите имя и почту, пожалуйста.' );
		$jx->error();
	}

	$site_name   = 'Академия Героев';
	$admin_email = get_field( 'email', 'option' );

	/**
	 * Письмо для Клиента.
	 */

	// Путь к файлу методички
	$file = get_attached_file( get_field( 'manual_file', 'options' ) );

	if ( ! $file ) {
		$jx->alert( 'Извините, но по тех-им причинам не смогли выслать методичку.' );
		$jx->error();
	}

	$headers = [
		"MIME-Version: 1.0",
		"From: $site_name <$admin_email>",
		"Content-Type: text/html",
	];

	$subject = "Методичка с сайта $site_name";
	$message = "Вы заказали методичку на сайте $site_name, мы прикрепили её в этом письме.";

	$status_client = wp_mail( $email_c, $subject, $message, $headers, $file );

	if ( ! $status_client ) {
		$jx->alert( 'Извините, но письмо не смогло быть отправлено по техническим причинам.' );
		$jx->error();
	}


	/**
	 * Письмо для Администратора.
	 */

	$subject = "Методичка отправлена пользователю по имени $name_c";

	$message = "<b>Имя</b>: $name_c <br>";
	$message .= "<b>Почта</b>: $email_c <br>";
	$message .= $phone_c ? "<b>Телефон</b>: $phone_c <br>" : 'Телефон не указан <br>';
	$message .= '<b>Форма</b>: Методичка';
	$message .= '<b>Сайт</b>: Академия Героев';

	$headers = [
		"MIME-Version: 1.0",
		"From: $name_c <$email_c>",
		"Content-Type: text/html",
	];

	wp_mail( $admin_email, $subject, $message, $headers );

	$jx->done();
}

