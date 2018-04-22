<?php
/**
 * Блок блок с большим изображением в шапке сайта.
 */

/**
 * Массив с данными метаполей для этого блока.
 *
 * @var array
 */
$data = [
	'bg_img' => get_field( 'main-bg_img' ),
	'season' => get_field( 'main-bg_season' ),
	'theme'  => get_field( 'main-bg_season_theme' ),
	'date'   => get_field( 'main-bg_season_date' ),
];
?>

<style>
    .main-bg-header__title {
        color: <?php echo esc_attr($data['season']['color']); ?>;
    }

    .main-bg-header__sub-title {
        color: <?php echo esc_attr($data['theme']['color']); ?>;
    }

    .main-bg-sub-header__number {
        color: <?php echo esc_attr($data['season']['color']); ?>;
    }
</style>



<section class="main-bg">
    <div class="main-bg__img__wrapper">
        <img class="main-bg__img" src="<?php echo esc_url( $data['bg_img'] ); ?>">
    </div>
    <div class="container">
        <div class="main-bg-header">
			
			<?php


/**
 <h1 class="main-bg-header__title">
				<?php echo get_the_category()[0]->name; ?>
            </h1>
 */

?>
			
			
			
           
            <h1 class="title main-bg-header__sub-title">
                <?php echo esc_html( $data['theme']['text'] ); ?>
            </h1>
        </div>
        <div class="main-bg-sub-header">
            <div class="main-bg-sub-header__number">
				<?php echo esc_html( $data['date']['text'] ); ?>
            </div>
        </div>
        <button class="pop-up-btn btn camp__btn">связаться</button>
    </div>
</section>