<?php
/**
 * Блок "Команда".
 */

/**
 * Массив с данными метаполей для этого блока.
 *
 * @var array
 */
$data = get_field( 'command' );
?>

<section class="section command" id="command"
         style="background-image: url(<?php echo esc_url( $data['bg_pattern'] ); ?>); background-size: 20%;">
    <div class="container" id="wr-tabs">
        <h2 class="title command__title">Команда</h2>

        <div class="content-tab command-full-card-wrapper">
			<?php foreach ( $data['team'] as $persona ):
				$sex = $persona['sex'] === 'men' ? 1 : 2;
				?>
                <div class="hidden tab-cont command-full-card">
                    <div class="command-full-card__img-wrapper">
                        <img class="command-full-card__img" src="<?php echo esc_url( $persona['photo'] ); ?>">
                    </div>
                    <div class="command-full-card__wrapper">
                        <div class="command-full-card__name command-full-card__name--color<?php echo $sex; ?>">
							<?php echo esc_html( $persona['fio'] ); ?>
                        </div>
                        <div class="command-full-card__position">
							<?php echo esc_html( $persona['position'] ); ?>
                        </div>
                        <ul class="command-full-card__list">
                            <li class="command-full-card__item">
								<?php echo esc_html( $persona['info']['property_1'] ); ?>
                            </li>
                            <li class="command-full-card__item">
								<?php echo esc_html( $persona['info']['property_2'] ); ?>
                            </li>
                            <li class="command-full-card__item">
								<?php echo esc_html( $persona['info']['property_3'] ); ?>
                            </li>
                        </ul>
                        <ul class="social__list">
							<?php
							$icons     = [
								'vk.com'            => 'Socialmedia_vk.svg',
								'www.facebook.com'  => 'Socialmedia_facebook.svg',
								'www.instagram.com' => 'Socialmedia_instagram.svg',
							];
							$main_url  = aht_get_img_url() . '/general/';

							foreach ( $persona['social'] as $item ):
								$link = esc_url( $item['link'] );
								$domen = parse_url( $link, PHP_URL_HOST );
								$icon  = isset( $icons[ $domen ] ) ? $main_url . $icons[ $domen ] : false;
								if ( $icon ):
									?>
                                    <li class="social__item">
                                        <a class="social__link" href="<?php echo $link; ?>" target="_blank">
                                            <img class="social__icon" src="<?php echo $icon; ?>">
                                        </a>
                                    </li>
								<?php endif; unset($link, $domen, $icon); ?>
							<?php endforeach; ?>
                        </ul>
                    </div>
                </div>
			<?php endforeach; ?>
        </div>

        <div class="tabs command__wrapper">
			<?php foreach ( $data['team'] as $persona ):
				$sex = $persona['sex'] === 'men' ? 1 : 2;
				?>
                <div class="tab command-card">
                    <div class="command-card__inner">
                        <div class="command-card__img-wrapper">
                            <div class="command-card__txt-hover">узнать больше</div>
                            <img class="command-card__img" src="<?php echo esc_url( $persona['photo'] ); ?>">
                        </div>
                        <div class="command-card__name command-card__name--color<?php echo $sex; ?>">
							<?php echo esc_html( $persona['fio'] ); ?>
                        </div>
                        <div class="command-card__position">
							<?php echo esc_html( $persona['position'] ); ?>
                        </div>
                    </div>
                </div>
			<?php endforeach; ?>
        </div>

    </div>
</section>