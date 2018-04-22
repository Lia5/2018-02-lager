<?php
/**
 * Блок "Условия".
 */

/**
 * Массив с данными метаполей для этого блока.
 *    style="background-image: url(<?php aht_img_url(); ?>/content/pattern.png); background-size: 20%;">
 * @var array
 */
$data = get_field( 'conditions' );
?>

<section class="section conditions" id="conditions"
      
	style="background-image: url(<?php echo esc_url( $data['bg_pattern'] ); ?>); background-size: 20%;">
	
    <div class="conditions__carusel">
		<?php foreach ( $data['slides'] as $slide ): ?>

			<?php if ( 'main_slide' === $slide['acf_fc_layout'] ): ?>
                <div class="conditions-block conditions-block--conditions">
                    <div class="conditions-block__img-wrapper">
                        <img
                                class="conditions-block__img conditions-block__img--conditions"
                                src="<?php echo esc_url( $slide['photo'] ); ?>">
                    </div>
                    <div class="conditions-block__wrapper conditions-block__wrapper--conditions">
                        <div class="conditions-block__title conditions-block__title--conditions">
							<?php echo esc_html( $slide['info']['title'] ); ?>
                        </div>
                        <ul class="conditions-block__list">
                            <li class="conditions-block__item">
                                Проживание <br>
								<?php echo esc_html( $slide['info']['residence'] ); ?>
                            </li>
                            <li class="conditions-block__item">
                                Качественное <br>
								<?php echo esc_html( $slide['info']['food'] ); ?>
                            </li>
                            <li class="conditions-block__item">
                                Подробнее <br>
								<?php echo ( $slide['info']['details'] ); ?>
                            </li>
                        </ul>
                    </div>
                </div>
			<?php else: ?>
                <div class="conditions-block">
                    <img class="conditions-block__img" src="<?php echo esc_url( $slide['photo'] ); ?>">
                    <div class="conditions-block__wrapper">
                        <div class="conditions-block__title">
							<?php echo esc_html( $slide['info']['title'] ); ?>
                        </div>
                        <p class="conditions-block__txt">
							<?php echo esc_html( $slide['info']['text'] ); ?>
                        </p>
                    </div>
                </div>
			<?php endif; ?>

		<?php endforeach; ?>
    </div>

    <div class="conditions__dots">
		<?php foreach ( $data['slides'] as $slide ): ?>
            <button class="btn conditions__dot">
				<?php echo esc_html( $slide['info']['title'] ); ?>
            </button>
		<?php endforeach; ?>
    </div>

</section>


