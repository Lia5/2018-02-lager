<?php
/**
 * Блок "{Сезон} мастер-классы".
 */

/**esc_html
 * Массив с данными метаполей для этого блока.
 *
 * @var array
 */
$data = get_field( 'master-classes' );
?>

<section class="section master-classes" id="master-classes"
         style="background-image: url(<?php echo esc_url( $data['bg_img'] ); ?>);">

    <h2 class="title master-classes__title">
		<?php echo esc_html( $data['title'] ); ?>
    </h2>

    <div class="container">
        <div class="mobail-slider">
			<?php foreach ( $data['slides'] as $key => $slide ):
				$class = in_array( $key, [ 0, 3, 6, 9 ], true ) ? 'one' : 'one';
				?>
                <div class="master-classes-block master-classes-block--<?php echo $key; ?>"
					 style="background-image: url(<?php echo esc_url( $data['bg_img_flag'] ); ?>); background-size: cover;">>
                    <div class="master-classes-block__title master-classes-block__title-<?php echo $class; ?>">
						<?php echo ( $slide['slide_title'] ); ?>
                    </div>
                    <div class="master-classes-block__txt">
						<?php echo ( $slide['slide_text'] ); ?>
						
                    </div>
                </div>
			<?php endforeach; ?>
        </div>
    </div>

    <style>
        <?php foreach ( $data['slides'] as $key => $slide ): ?>
        .master-classes-block--<?php echo "$key::after"; ?> {
            width: 50px;
            height: 50px;
            background-image: url(<?php echo esc_url( $slide['slide_icon'] ); ?>);
        }
        <?php endforeach; ?>
    </style>
</section>