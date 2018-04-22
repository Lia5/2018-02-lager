<?php
/**
 * Блок "Ближайшая смена".
 */

/**
 * Массив с данными метаполей для этого блока.
 *
 * @var array
 */
$data = get_field( 'next-shift' );

/**
 * Ссылки на социальные сети.
 *
 * @var array
 */
$social = get_field( 'social_links', 'option' );
/**
 * Список сезонов.
 *
 * @var array
 */
$season_ids = get_field( 'season-choose', 'option' );

/**
 *
 */
$seasons = array_map( function ( $id ) {
	$cat = get_the_category( $id );
	$cat = $cat[0];

	$cat->post_id = $id;

	return $cat;
}, $season_ids );

?>

<section class="section next-shift" id="next-shift"
         style="background-image: url(<?php echo esc_url( $data['bg_img'] ); ?>); background-size: cover;">
    <div class="container">
        <h2 class="title next-shift__title">Ближайшие смены</h2>
        <div class="next-shift__slider">
			<?php foreach ( $data['seasons'] as $season ): ?>
                <div class="next-shift-block">
                    <div class="next-shift-block__top-title">
						<?php //echo esc_html( $season['title'] ); ?>
                    </div>

                    <img class="next-shift-block__img" src="<?php echo esc_url( $season['img'] ); ?>">

                    <div class="next-shift-block__wrapper">
                        <div class="next-shift-block__title">
							<?php echo esc_html( $season['theme'] ); ?>
                        </div>
                        <div class="next-shift-block__date">
							<?php echo esc_html( $season['date'] ); ?>
                        </div>
                        <p class="next-shift-block__txt">
							<?php echo esc_html( $season['text'] ); ?>
                        </p>
                        <div class="next-shift-block__old-price">
							<?php echo esc_html( $season['price_old'] ); ?>
                        </div>
                        <div class="next-shift-block__price">
							<?php echo esc_html( $season['price'] ); ?>
                        </div>
                        <button class="pop-up-btn btn next-shift-block__btn">Забронировать</button>
                        <div class="next-shift-block__discount">Скидка до конца месяца!</div>
                        <div class="next-shift-block__social">
                            <div class="next-shift-block__social-txt">Или свяжитесь с нами через социальные
                                сети:
                            </div>

                            <ul class="social__list">

								<?php if ( $social['vk'] ): ?>
                                    <li class="social__item">
                                        <a class="social__link"
                                           href="<?php echo esc_url( $social['vk'] ); ?>"
                                           target="_blank">
                                            <img
                                                    class="social__icon"
                                                    src="<?php aht_img_url(); ?>/general/Socialmedia_vk.svg">
                                        </a>
                                    </li>
								<?php endif; ?>

								<?php if ( $social['instagram'] ): ?>
                                    <li class="social__item">
                                        <a class="social__link"
                                           href="<?php echo esc_url( $social['instagram'] ); ?>"
                                           target="_blank">
                                            <img
                                                    class="social__icon"
                                                    src="<?php aht_img_url(); ?>/general/Socialmedia_instagram.svg">
                                        </a>
                                    </li>
								<?php endif; ?>

								<?php if ( $social['facebook'] ): ?>
                                    <li class="social__item">
                                        <a class="social__link"
                                           href="<?php echo esc_url( $social['facebook'] ); ?>"
                                           target="_blank">
                                            <img
                                                    class="social__icon"
                                                    src="<?php aht_img_url(); ?>/general/Socialmedia_facebook.svg">
                                        </a>
                                    </li>
								<?php endif; ?>

                            </ul>
                        </div>
						
                    </div>
					
                </div>
			<?php endforeach; ?>
		
        </div>
		
		
		
		<div style="display:  flex;">
			<?php foreach ( $seasons as $season ): ?>
		<a href="<?php echo get_the_permalink( $season->post_id ); ?>"
                           title="<?php echo $season->name . ' / ' . get_the_title( $season->post_id ); ?>" style="line-height: 2.4; margin: 0 5px;" class=" btn next-shift-block__btn"> <?php echo get_the_title( $season->post_id ); ?></a>
                  
                        
                    
				<?php endforeach; ?>
		</div>
			
    </div>
</section>