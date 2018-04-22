<?php
/**
 * Блок "Контакты".
 */

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
$phone_1 = esc_attr( get_field( 'phone_1', 'option' ) );

/**
 * Дополнительный телефон.
 *
 * @var string
 */
$phone_2 = esc_attr( get_field( 'phone_2', 'option' ) );

/**
 * Адрес.
 *
 * @var string
 */
$address = esc_html( get_field( 'address', 'option' ) );

/**
 * Ссылки на социальные сети.
 *
 * @var array
 */
$social = get_field( 'social_links', 'option' );
?>

<section class="section-min contacts-b" id="contacts-b">
    <div class="container">
        <h2 class="title contacts-b__title">Контакты</h2>
        <div class="contacts-b__wrapper">
            <div class="contacts-b__left">
                <div class="contacts-b__info contacts-b__info--address">
                    <a href="#" target="_blank"><?php echo $address; ?></a>
                </div>
                <div class="contacts-b__info contacts-b__info--tel">
                    <a href="tel:<?php echo str_replace( ' ', '', $phone_1 ); ?>"><?php echo $phone_1; ?></a>
                    <br>
                    <a href="tel:<?php echo str_replace( ' ', '', $phone_2 ); ?>"><?php echo $phone_2; ?></a>
                </div>
            </div>
            <div class="contacts-b__right">
                <div class="contacts-b__info contacts-b__info--email">
                    <a href="email:<?php echo $email; ?>"><?php echo $email; ?></a>
                </div>
                <div class="contacts-b__info contacts-b__info--social">
					<?php if ( $social['vk'] ): ?>
                        <a href="<?php echo esc_url( $social['vk'] ); ?>" target="_blank">
                            vk - /akademia.geroev
                        </a>
                        <br>
					<?php endif; ?>

					<?php if ( $social['facebook'] ): ?>
                        <a href="<?php echo esc_url( $social['facebook'] ); ?>" target="_blank">
                            facebook - /AKADEMIAGER0EV/
                        </a>
					<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>