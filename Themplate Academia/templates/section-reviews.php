<?php
/**
 * Блок "Отзывы".
 */

/**
 * Массив с данными метаполей для этого блока.
 *
 * @var array
 */
$data = get_field( 'reviews' );

/**
 * Ссылка на текстовую версию отзывов.
 *
 * @var string
 */
$link_text_vk = esc_url( get_field( 'reviews_link_text_vk', 'option' ) );

/**
 * Ссылка на видео версию отзывов.
 *
 * @var string
 */
$link_video = esc_url( get_field( 'reviews_link_video', 'option' ) );
?>

<section class="section reviews" id="reviews"
         style="background-image: url(<?php echo esc_url( $data['bg_img'] ); ?>);">

    <div class="container">

        <div class="title-line">
            <h2 class="title reviews__title">Отзывы</h2>

			<?php if ( $link_video ): ?>
                <div class="video-reviews">
                    <span class="arrow-right"></span>
                    <a href="<?php echo $link_video; ?>" target="_blank">Видеоотзывы</a>
                </div>
			<?php endif; ?>
        </div>

        <div class="discussions-vk">
            <!-- Сюда будут загружаться отзывы с помощью JavaScript по шаблону, что ниже. -->
        </div>

        <template id="comment-template" style="display: none">
            <div class="comment">
                <div class="comment__column-1">
                    <a class="comment__logo" href target="_blank">
                        <img class="comment__logo-image" src="https://vk.com/images/camera_100.png" alt="logo-group">
                    </a>

                    <p class="comment__online"></p>
                </div>

                <div class="comment__column-2">
                    <div class="comment__header">
                        <a class="comment__group-title" href target="_blank"></a>
                        <a class="comment__comment-date" href target="_blank"></a>
                    </div>

                    <p class="comment__text-title"></p>

                    <a class="comment__original-link" href></a>

                    <div class="comment__image-box">
                        <img class="comment__image" src alt>
                    </div>

                    <div class="comment__like">
                        <img class="comment__like-icon"
                             src="<?php aht_img_url(); ?>/general/like.svg"
                             width="12"
                             height="10"
                             alt="Количество лайков:">
                        <p class="comment__like-number"></p>
                    </div>
                </div>
            </div>
        </template>

		<?php if ( $link_text_vk ): ?>
            <a class="btn-vk-reviews" href="<?php echo $link_text_vk; ?>" target="_blank">
                <img src="<?php aht_img_url(); ?>/general/btn-vk-reviews.png" alt="">
            </a>

            <a class="vk-reviews-all" href="<?php echo $link_text_vk; ?>" target="_blank">
                Просмотреть все отзывы
            </a>
		<?php endif; ?>

    </div>

</section>