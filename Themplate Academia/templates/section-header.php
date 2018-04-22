<?php
/**
 * Блок "Вехняя часть сайта" с контактами и соц. кнопками.
 */

/**
 * Ссылки на социальные сети.
 *
 * @var array
 */
$social = get_field( 'social_links', 'option' );

/**
 * Почта.
 *
 * @var string
 */
$email = antispambot( get_field( 'email', 'option' ) );

/**
 * Основной телефон.
 *
 * @var string
 */
$phone_1 = esc_html( get_field( 'phone_1', 'option' ) );

/**
 * Список сезонов.
 *
 * @var array
 */
$season_ids = get_field( 'season-choose', 'option' );

/**
 *
 */
$seasons = array_map( function ( $id ) {
	$cat = get_the_category( $id );
	$cat = $cat[0];

	$cat->post_id = $id;

	return $cat;
}, $season_ids );

$season_icons = [
	'spring' => '/general/Seasons_spring.svg',
	'winter' => '/general/Seasons_winter.svg',
	'summer' => '/general/Seasons_summer.svg',
	'autumn' => '/general/Seasons_autumn.svg',
];
?>
<header class="header fixed-js">
    <div class="container">

        <div class="seasons">
            <ul class="seasons__list">
				<?php foreach ( $seasons as $season ): ?>
                    <li class="seasons__item">
                        <a class="seasons__link"
                           href="<?php echo get_the_permalink( $season->post_id ); ?>"
                           title="<?php echo $season->name . ' / ' . get_the_title( $season->post_id ); ?>">
                            <img class="seasons__icon"
                                 src="<?php echo aht_get_img_url() . $season_icons[ $season->slug ]; ?>">
                        </a>
                    </li>
				<?php endforeach; ?>
            </ul>
            <div class="seasons__text">Сезоны</div>
        </div>

        <ul class="contacts">
            <li class="contacts__item">
                <a style="cursor: pointer;" class="pop-up-btn">связаться</a>
            </li>
            <li class="contacts__item">
                <a class="contacts__link" href="mailto:<?php echo $email; ?>">
					<?php echo $email; ?>
                </a>
            </li>
            <li class="contacts__item">
                <a class="contacts__link" href="tel:<?php echo str_replace( ' ', '', $phone_1 ); ?>">
					<?php echo $phone_1; ?>​
                </a>
            </li>
        </ul>

        <div class="social">
            <div class="social__text">Мы в соц.сетях</div>
            <ul class="social__list">

				<?php if ( $social['vk'] ): ?>
                    <li class="social__item">
                        <a class="social__link"
                           href="<?php echo esc_url( $social['vk'] ); ?>"
                           target="_blank">
                            <img class="social__icon" src="<?php aht_img_url(); ?>/general/Socialmedia_vk.svg">
                        </a>
                    </li>
				<?php endif; ?>

				<?php if ( $social['instagram'] ): ?>
                    <li class="social__item">
                        <a class="social__link"
                           href="<?php echo esc_url( $social['instagram'] ); ?>"
                           target="_blank">
                            <img class="social__icon" src="<?php aht_img_url(); ?>/general/Socialmedia_instagram.svg">
                        </a>
                    </li>
				<?php endif; ?>

				<?php if ( $social['facebook'] ): ?>
                    <li class="social__item">
                        <a class="social__link"
                           href="<?php echo esc_url( $social['facebook'] ); ?>"
                           target="_blank">
                            <img class="social__icon" src="<?php aht_img_url(); ?>/general/Socialmedia_facebook.svg">
                        </a>
                    </li>
				<?php endif; ?>

            </ul>
        </div>

        <button class="toggle"><span></span></button>

    </div>
</header>