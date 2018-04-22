<?php
/**
 * Блок "Подвал/Футер".
 */

/**
 * Ссылки на социальные сети.
 *
 * @var array
 */
$social = get_field( 'social_links', 'option' );
?>

<footer class="footer">
    <div class="container">
        <ul class="social__list">

			<?php if ( $social['vk'] ): ?>
                <li class="social__item">
                    <a class="social__link" href="<?php echo esc_url( $social['vk'] ); ?>" target="_blank">
                        <img class="social__icon" src="<?php aht_img_url(); ?>/general/6-vk-header.png">
                    </a>
                </li>
			<?php endif; ?>

			<?php if ( $social['instagram'] ): ?>
                <li class="social__item">
                    <a class="social__link" href="<?php echo esc_url( $social['instagram'] ); ?>" target="_blank">
                        <img class="social__icon" src="<?php aht_img_url(); ?>/general/6-inst.png">
                    </a>
                </li>
			<?php endif; ?>

			<?php if ( $social['facebook'] ): ?>
                <li class="social__item">
                    <a class="social__link" href="<?php echo esc_url( $social['facebook'] ); ?>" target="_blank">
                        <img class="social__icon" src="<?php aht_img_url(); ?>/general/6-fb.png">
                    </a>
                </li>
			<?php endif; ?>

        </ul>

        <div class="copy">
            <span>&copy; 2010-<?php echo date( 'Y' ) ?> “АкадемияГероев”</span><span>Все права защищены.</span>
        </div>
    </div>
</footer>