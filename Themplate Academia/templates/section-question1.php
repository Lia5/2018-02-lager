<?php
/**
 * Блок "Появились вопросы?".
 */

/**
 * Ссылки на социальные сети.
 *
 * @var array
 */
$social = get_field( 'social_links', 'option' );
?>

<section class="section-min question" id="question1">
    <div class="container">
        <h2 class="title question__title">Остались вопросы?</h2>
        <form class="question-form">
            <div class="question-form__wrapper">
                <input class="question-form__input question-form__input--name" type="text"
                       placeholder="Введите Имя">
                <input class="tel question-form__input question-form__input--tel" type="tel"
                       placeholder="Номер телефона">
            </div>
            <button class="btn question-form__btn" type="submit">Заказать звонок</button>
        </form>

        <!-- Блок благодарности за заявку (Поставил всей обертке класс hidden, этому классу заднно display: none;)-->
        <div class="hidden question-thanks">
            <h2 class="title question-thanks__title">Спасибо за заявку!</h2>
            <ul class="social__list">

				<?php if ( $social['vk'] ): ?>
                    <li class="social__item">
                        <a class="social__link" href="<?php echo esc_url( $social['vk'] ); ?>" target="_blank">
                            <img class="social__icon" src="<?php aht_img_url(); ?>/general/Socialmedia_vk.svg">
                        </a>
                    </li>
				<?php endif; ?>

				<?php if ( $social['instagram'] ): ?>
                    <li class="social__item">
                        <a class="social__link" href="<?php echo esc_url( $social['instagram'] ); ?>" target="_blank">
                            <img class="social__icon" src="<?php aht_img_url(); ?>/general/Socialmedia_instagram.svg">
                        </a>
                    </li>
				<?php endif; ?>

				<?php if ( $social['facebook'] ): ?>
                    <li class="social__item">
                        <a class="social__link" href="<?php echo esc_url( $social['facebook'] ); ?>" target="_blank">
                            <img class="social__icon" src="<?php aht_img_url(); ?>/general/Socialmedia_facebook.svg">
                        </a>
                    </li>
				<?php endif; ?>

            </ul>

            <p class="question-thanks__txt">
                С вами скоро свяжутся, а пока вы можете посмотреть наши социальные сети.
            </p>
        </div>
    </div>
</section>