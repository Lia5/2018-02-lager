<?php
/**
 * Блок "Скидки и Акции".
 */

/**
 * Массив с данными метаполей для этого блока.
 *
 * @var array
 */
$data   = get_field( 'shares' );
$styles = '';
?>

<section class="section-min shares" id="shares">
    <div class="container">
        <h2 class="title shares__title">
			<?php echo esc_html( $data['block_title'] ); ?>
        </h2>

        <div class="mobail-slider">
			<?php foreach ( $data['slides'] as $key => $slide ): ?>
                <div class="shares-block">
                    <div class="shares-block__title shares-block__title-<?php echo $key; ?>">
						<?php echo $slide['title']; ?>
                    </div>

                    <p class="shares-block__txt">
						<?php echo $slide['text']; ?>
                    </p>
                </div>
				<?php
				$styles .= ".shares-block__title-$key{color:{$slide['title_color']};} \n\t";
				?>

			<?php endforeach; ?>
        </div>
    </div>
</section>

<style>
    <?php echo $styles; ?>
    .shares__title {
        color: <?php echo $data['block_title_color']; ?>;
    }
</style>