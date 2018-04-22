<?php
/**
 * Блок с мобильным меню.
 */

/**
 * Ссылки на социальные сети.
 *
 * @var array
 */
$social = get_field( 'social_links', 'option' );

/**
 * Основной телефон.
 *
 * @var string
 */
$phone_1 = esc_html( get_field( 'phone_1', 'option' ) );
$data = [
	'season' => get_field( 'main-bg_season' ),
];

?>




<style>
	.menu.fixed {
		background-color: <?php echo esc_attr($data['season']['bg_color_menu']); ?>
	}
</style>

<div class="menu fixed-js bg-color-menu">
    <div class="container">
        <a class="menu__wrapper" href="<?php echo home_url(); ?>">
            <img class="menu__logo" src="<?php aht_img_url(); ?>/general/logo_akademia.png">
            <div class="menu__logo-text">Академия героев</div>
        </a>

        <div class="menu__hidden" id="menu">

            <ul class="menu__list">
                <li class="menu__item">
                    <a class="menu__link" href="#camp">О лагере</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="#master-classes">Программа</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="#command">Команда</a>
                </li>
				<li class="menu__item">
                    <a class="menu__link" href="#next-shift">Смены</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="#next-shift">Стоимость</a>
                </li>
				<li class="menu__item">
                    <a class="menu__link" href="#manuals">Родителям</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="#reviews">Отзывы</a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="#contacts-b">Контакты</a>
                </li>
            </ul>

            <a class="menu__tel" href="tel:<?php echo str_replace( ' ', '', $phone_1 ); ?>">
				<?php echo $phone_1; ?>
            </a>

            <ul class="social__list">

				<?php if ( $social['facebook'] ): ?>
                    <li class="social__item">
                        <a class="social__link" href="<?php echo esc_url( $social['facebook'] ); ?>" target="_blank">
                            <img
                                    class="social__icon"
                                    src="<?php aht_img_url(); ?>/general/Socialmedia_facebook.svg">
                        </a>
                    </li>
				<?php endif; ?>

				<?php if ( $social['instagram'] ): ?>
                    <li class="social__item">
                        <a class="social__link" href="<?php echo esc_url( $social['instagram'] ); ?>" target="_blank">
                            <img
                                    class="social__icon"
                                    src="<?php aht_img_url(); ?>/general/Socialmedia_instagram.svg">
                        </a>
                    </li>
				<?php endif; ?>

				<?php if ( $social['vk'] ): ?>
                    <li class="social__item">
                        <a class="social__link" href="<?php echo esc_url( $social['vk'] ); ?>" target="_blank">
                            <img
                                    class="social__icon"
                                    src="<?php aht_img_url(); ?>/general/Socialmedia_vk.svg">
                        </a>
                    </li>
				<?php endif; ?>

				<?php if ( $social['telegram'] ): ?>
                    <li class="social__item">
                        <a class="social__link" href="#" target="_blank">
                            <img
                                    class="social__icon"
                                    src="<?php aht_img_url(); ?>/general/Socialmedia_telegram.svg">
                        </a>
                    </li>
				<?php endif; ?>

                <li class="social__item">
                    <a class="social__link"
                       href="whatsapp://send?phone=<?php echo str_replace( ' ', '', $phone_1 ); ?>"
                       target="_blank">
                        <img
                                class="social__icon social__icon--wa"
                                src="<?php aht_img_url(); ?>/general/Contact_us_whatsapp.svg">
                    </a>
                </li>

            </ul>

        </div>
    </div>
</div>