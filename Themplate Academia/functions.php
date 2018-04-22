<?php
/**
 * Файл с функциями темы.
 */

define( 'AHT_URL', get_template_directory_uri() );

require __DIR__ . '/includes/remove-unnecessary-code.php';
require __DIR__ . '/includes/update-disable.php';
require __DIR__ . '/includes/acf.php';
require __DIR__ . '/includes/form.php';

add_action( 'after_setup_theme', 'aht_setup' );
add_action( 'wp_enqueue_scripts', 'aht_scripts' );
add_filter( 'plugin_action_links', 'disable_plugin_deactivation', 10, 2 );
add_filter( 'taxonomy_labels_category', 'change_labels_category' );
add_filter( 'upload_mimes', 'cc_mime_types' );


/**
 * Выводит на экран ссылку на папку с темой без закрывающего слеша.
 */
function aht_url() {
	echo AHT_URL;
}

/**
 * Выводит на экран путь на пупку с картинками без закрывающего слеша.
 *
 * @return void
 */
function aht_img_url() {
	echo aht_get_img_url();
}

/**
 * Выводит на экран путь на пупку с картинками без закрывающего слеша.
 */
function aht_get_img_url() {
	return AHT_URL . '/assets/img';
}

/**
 * Определяет базовые настройки темы.
 */
function aht_setup() {
	add_theme_support( 'title-tag' );
}

/**
 * Подключает скрипты и стили темы.
 */
function aht_scripts() {
	$url = AHT_URL;
	$ver = '1.0.0';

	wp_enqueue_style( 'aht-main', $url . '/assets/css/main.css', [], $ver );
	wp_enqueue_style( 'aht-vk', $url . '/assets/css/custom.css', [], $ver );

	// Перерегистрация jquery, чтобы подтягивать её с CDN.
	wp_deregister_script( 'jquery-core' );
	//wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js' );
	wp_register_script( 'jquery-core', $url . '/assets/js/jquery.js' );

	wp_enqueue_script( 'aht-libs', $url . '/assets/js/libs.min.js', [ 'jquery' ], $ver, true );
	wp_enqueue_script( 'aht-mCustomScrollbar', $url . '/assets/js/jquery.mCustomScrollbar.min.js', [ 'jquery' ], $ver, true );
	wp_enqueue_script( 'aht-main', $url . '/assets/js/main.min.js', [ 'aht-libs' ], $ver, true );
	wp_enqueue_script( 'aht-custom', $url . '/assets/js/custom.js', [ 'aht-main' ], $ver, true );
	wp_enqueue_script( 'aht-discussions-vk', $url . '/assets/js/discussions-vk.js', [ 'aht-main' ], $ver, true );

	wp_localize_script( 'aht-main', 'aht', [
		'mapImg' => AHT_URL . '/assets/img/general/map.png',
	] );
}

/**
 * Добавляет меню настроек "Пульт".
 *
 * Работает с помощью плагина ACF.
 */
if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page( [
		'page_title' => 'Клиентские настройки сайта',
		'menu_title' => 'Пульт',
		'menu_slug'  => 'pult',
		'capability' => 'edit_posts',
		'position'   => 2,
		'redirect'   => false,
	] );

}


/**
 * Запрещает деактивацию необходимых для корректной работы сайту плагинов.
 *
 * @param array  $actions
 * @param string $plugin_file
 *
 * @return array
 */
function disable_plugin_deactivation( $actions, $plugin_file ) {
	// Удаляет действие "Редактировать" у всех плагинов.
	unset( $actions['edit'] );

	// Список обязательных плагинов.
	$important_plugins = array(
		'advanced-custom-fields-pro/acf.php',
		'kama-thumbnail/kama_thumbnail.php',
		'ajax-simply/ajax-simply.php',
	);

	// Удаляет действие "Деактивировать" у обязательных для сайта плагинов.
	if ( in_array( $plugin_file, $important_plugins ) ) {
		unset( $actions['deactivate'] );
		$actions['info'] = '<b>Обязателен для сайта</b>';
	}

	return $actions;
}


/**
 * Изменяет заголовик у Рубрики.
 *
 * @param stdClass $labels
 *
 * @return object
 */
function change_labels_category( $labels ) {
	/*
	 stdClass Object
		(
			[name] => Рубрики
			[singular_name] => Рубрика
			[search_items] => Поиск рубрик
			[popular_items] =>
			[all_items] => Все рубрики
			[parent_item] => Родительская рубрика
			[parent_item_colon] => Родительская рубрика:
			[edit_item] => Изменить рубрику
			[view_item] => Просмотреть рубрику
			[update_item] => Обновить рубрику
			[add_new_item] => Добавить новую рубрику
			[new_item_name] => Название новой рубрики
			[separate_items_with_commas] =>
			[add_or_remove_items] =>
			[choose_from_most_used] =>
			[not_found] => Рубрик не найдено.
			[no_terms] => Рубрик нет
			[items_list_navigation] => Навигация по списку рубрик
			[items_list] => Список рубрик
			[most_used] => Часто используемые
			[back_to_items] => ← Назад к рубрикам
			[menu_name] => Рубрики
			[name_admin_bar] => category
		)
	 */

	$labels->name          = 'Сезоны';
	$labels->menu          = 'Сезоны';
	$labels->singular_name = 'Сезон';
	$labels->all_items     = 'Все сезоны';

	return $labels;
}

/**
 * Разрешает загружать SVG.
 *
 * @param array $mimes
 *
 * @return array
 */
function cc_mime_types( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';
	$mimes['svgz'] = 'image/svg+xml';

	return $mimes;
}


add_filter( 'kama_autoupdate_init', '__return_false' );
