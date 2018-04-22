<?php
/**
 *  Блок "Как проходит?".
 */

/**
 * Массив с данными метаполей для этого блока.
 *
 * @var array
 */
$data = get_field( 'how-is' );
?>

<section class="section how-is" id="how-is"
         style="background-image: url(<?php echo esc_url( $data['bg_img'] ); ?>); background-size: 20%;">
    <div class="container">
        <div class="title how-is__main-title">Как проходит?</div>

        <div class="mobail-slider mobail-slider--hidden how-is__slider">
			<?php foreach ( $data['slides'] as $slide ): ?>
                <div class="how-is__block">
                    <div class="how-is__img-wrapper">
						
                        <img class="how-is__img" src="<?php echo esc_url( $slide['slide_img'] ); ?>">
                    </div>
                    <div class="how-is__desc">
                        <div class="how-is__txt">
                            <p><?php echo $slide['slide_text']; ?></p>
                        </div>
                    </div>
                </div>
			<?php endforeach; ?>
        </div>

        <div class="how-is__block how-is__block--hidden">
            <div class="how-is__img-wrapper">
                <img class="how-is__img" src="<?php echo esc_url( $data['main_img'] ); ?>">
            </div>
            <div class="how-is__desc">
                <h2 class="title how-is__title">Как проходит?</h2>
                <div class="how-is__txt">
					<?php echo $data['pc_text']; ?>
                </div>
            </div>
        </div>
    </div>
</section>

