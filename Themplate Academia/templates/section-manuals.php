<?php
/**
 * Блок "Методичка".
 */

/**
 * Массив с данными метаполей для этого блока.
 *
 * @var array
 */
$data = get_field( 'manuals' );

/**
 * Ссылки на социальные сети.
 *   style="background: url(<?php aht_img_url(); ?>/content/8-fon.png) no-repeat; background-size: cover;">
 * @var array
 */
$social = get_field( 'social_links', 'option' );
?>

<section class="section manuals" id="manuals"
	 style="background-image: url(<?php echo esc_url( $data['bg_img'] ); ?>); background-size: cover;">
    <div class="container">

        <form class="manuals-form">
            <div class="manuals-form__title">
				<?php echo esc_html( $data['title_text'] ); ?>
            </div>
            <p class="manuals-form__txt">
				<?php echo esc_html( $data['main_text'] ); ?>
            </p>
            <input class="manuals-form__input manuals-form__input--name" type="text" placeholder="Имя">
            <input class="manuals-form__input manuals-form__input--name tel" type="tel"
                   placeholder="Номер телефона">
            <input class="manuals-form__input manuals-form__input--name" type="email" placeholder="Почта">
            <button class="btn manuals-form__btn">Получить методичку</button>
        </form>

        <style>
            .manuals-form__title {
                color: <?php echo $data['title_color']; ?>;
            }

            .manuals-form__btn {
                color: <?php echo $data['btn_color_text']; ?>;
                background-color: <?php echo $data['btn_color_bg']; ?>;
            }
        </style>

        <!-- Рады Помочь ответ при отпраке формы-->
        <div class="hidden manuals-answer">
            <div class="manuals-answer__title">Рады помочь!</div>
            <p class="manuals-answer__txt">Мы отправили методичку Вам на почту. Если вы
                хотите больше узнать о жизни лагеря, посетите наши социальные сети</p>
            <ul class="social__list">

				<?php if ( $social['vk'] ): ?>
                    <li class="social__item">
                        <a class="social__link" href="<?php echo esc_url( $social['vk'] ); ?>" target="_blank">
                            <img
                                    class="social__icon"
                                    src="<?php aht_img_url(); ?>/general/Socialmedia_vk.svg">
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

				<?php if ( $social['facebook'] ): ?>
                    <li class="social__item">
                        <a class="social__link" href="<?php echo esc_url( $social['facebook'] ); ?>" target="_blank">
                            <img
                                    class="social__icon"
                                    src="<?php aht_img_url(); ?>/general/Socialmedia_facebook.svg">
                        </a>
                    </li>
				<?php endif; ?>

            </ul>
        </div><!-- /.manuals-answer -->

    </div>
</section>