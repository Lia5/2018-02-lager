<?php
/**
 *  Блок "О лагере".
 */

/**
 * Массив с данными метаполей для этого блока.
 *
 * @var array
 */
$data = get_field( 'camp' );
?>

<style>
	.bg-color-camp {
		background-color: <?php echo esc_attr($data['bg_color']); ?>
	}
</style>

<section class="section camp bg-color-camp" id="camp">
    <div class="container">
        <div class="camp__desc">
            <h2 class="title camp__title">О Лагере</h2>
            <div class="mobail-slider mobail-slider--hidden camp__slider">
				<?php foreach ( $data['slides'] as $slide ): ?>
                    <div class="camp__slide">
                        <p><?php echo $slide['slide_text']; ?></p>
                    </div>
				<?php endforeach; ?>
            </div>
            <div class="camp__txt">
                <p><?php echo $data['pc_text']; ?></p>
            </div>
        </div>
        <div class="camp__contact">
            <button class="pop-up-btn btn camp__btn">связаться</button>
            <p class="camp__txt"><?php echo $data['contact_txt']; ?></p>
        </div>
    </div>
</section>