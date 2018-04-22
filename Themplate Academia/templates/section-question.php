<?php
/**
 * Блок "Появились вопросы?".
 */

/**
 * Массив с данными метаполей для этого блока.
 *
 * @var array
 */
$data = get_field( 'question' );

/**
 * Ссылки на социальные сети.
 *
 * @var array
 */
$social = get_field( 'social_links', 'option' );
?>

<section class="section-min question" id="question">

    <div class="container">
        <h2 class="title question__title">Появились вопросы?</h2>
        <form class="question-form">
            <div class="question-form__wrapper">
                <input class="question-form__input question-form__input--name" type="text"
                       placeholder="Введите Имя">
                <input class="tel question-form__input question-form__input--tel" type="tel"
                       placeholder="Номер телефона">
            </div>
            <button class="btn question-form__btn" type="submit">Заказать звонок</button>
        </form>

        <!-- Блок благодарности за заявку (Поставил всей обертке класс hidden, этому классу задано display: none;)-->
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

            <div class="question-thanks__txt">
                С вами скоро свяжутся, а пока вы можете посмотреть наши социальные сети.
            </div>
        </div>
    </div>
</section>

<?php
/**
 * Данные стили оформления относят к текущему блоку и блоку "Появились вопросы?".
 */
?>
<style>
    .question__title {
        color: <?php echo esc_attr($data['main_color']); ?>;
    }

    .question-form__btn {
        background-color: <?php echo esc_attr($data['main_color']); ?>;
    }

    .question-form__input {
        border-color: <?php echo esc_attr($data['main_color']); ?>;
    }

    .question-form__btn:hover {
        border-color: <?php echo esc_attr($data['main_color']); ?>;
        color: <?php echo esc_attr($data['main_color']); ?>;
    }

    .question-thanks {
        padding-top: 45px;
    }

    .question-thanks__title {
        color: <?php echo esc_attr($data['main_color']); ?>;
    }
</style>
