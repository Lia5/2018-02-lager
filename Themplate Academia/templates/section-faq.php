<?php
/**
 * Блок "Нас спрашивают".
 */

/**
 * Массив с данными метаполей для этого блока.
 *
 * @var array
 * <?php echo $class; ?>
 */
$data = get_field( 'faq' );

/**
 * Основной телефон.
 *
 * @var string
 */
$phone_1 = str_replace( ' ', '', esc_attr( get_field( 'phone_1', 'option' ) ) );

/**
 * Почта.
 *
 * @var string
 */
$email = antispambot( get_field( 'email', 'option' ) );

/**
 * Ссылки на социальные сети.
 *
 * @var array
 */
$social = get_field( 'social_links', 'option' );
?>

<section class="section faq" id="faq"
         style="background-image: url(<?php echo esc_url( $data['bg_img'] ); ?>); background-size: 20%;">
    <div class="container">

        <h2 class="title faq__title">
			<?php echo esc_html( $data['title'] ); ?>
        </h2>

        <div class="mobail-slider">

			<?php foreach ( $data['items'] as $key => $item ):
				$class = in_array( $key + 1, [ 3, 5, 7, 11, 15 ], true ) ? '--color2' : '--color1';
				?>
                <div class="faq-block">
                    <div class="faq-block__inner">
                        <div class="faq-block__question-icon faq-block__question-icon faq-block__question-icon--color1">
                            <span>?</span>
                        </div>
                        <div class="faq-block__question-txt">
                            <p><?php echo esc_html( $item['question'] ); ?></p>
                        </div>
                    </div>
                    <div class="faq-block__answer">
                        <p><?php echo $item['answer']; ?></p>
                        <button class="hidden btn faq-block__btn faq-block__btn--roll-up">свернуть</button>
                    </div>
                    <button class="btn faq-block__btn faq-block__btn--answer">ответ</button>
                </div>
			<?php endforeach; ?>
        </div>

        <button class="pop-up-btn btn faq__btn">задать вопрос</button>
    </div>
</section>

<style>
    .faq__title {
        color: <?php echo $data['title_color']; ?>;
    }

    .faq__btn {
        color: <?php echo $data['btn_color_text']; ?>;;
        background-color: <?php echo $data['title_color_bg']; ?>;;
    }
</style>

<div class="pop-up-contact">
    <div class="pop-up-contact__wrapper">
        <span class="pop-up-contact__close"></span>
        <ul class="pop-up-contact__list">
            <li class="pop-up-contact__item">
                <a class="pop-up-contact__link" href="tel:<?php echo $phone_1; ?>">
                    <img class="pop-up-contact__img" src="<?php aht_img_url(); ?>/general/Contact_us_phone.svg">
                </a>
            </li>
            <li class="pop-up-contact__item">
                <a class="pop-up-contact__link" href="mailto:<?php echo $email; ?>">
                    <img class="pop-up-contact__img" src="<?php aht_img_url(); ?>/general/Contact_us_mail.svg">
                </a>
            </li>

			<?php if ( $social['vk'] ): ?>
                <li class="pop-up-contact__item">
                    <a class="pop-up-contact__link" href="<?php echo esc_url( $social['vk'] ); ?>" target="__blank">
                        <img class="pop-up-contact__img" src="<?php aht_img_url(); ?>/general/Contact_us_vk.svg">
                    </a>
                </li>
			<?php endif; ?>

			<?php if ( $phone_1 ): ?>
                <li class="pop-up-contact__item">
                    <a class="pop-up-contact__link"
                       href="whatsapp://send?phone=<?php echo $phone_1; ?>"
                       target="__blank">
                        <img class="pop-up-contact__img" src="<?php aht_img_url(); ?>/general/Contact_us_whatsapp.svg">
                    </a>
                </li>
			<?php endif; ?>

			<?php if ( $social['telegram'] ): ?>
                <li class="pop-up-contact__item">
                    <a class="pop-up-contact__link"
                       href="<?php echo esc_url( $social['telegram'] ); ?>"
                       target="__blank">
                        <img class="pop-up-contact__img" src="<?php aht_img_url(); ?>/general/Contact_us_telegram.svg">
                    </a>
                </li>
			<?php endif; ?>

        </ul>
    </div>
</div>