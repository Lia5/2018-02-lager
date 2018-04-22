<?php
/**
 * Блок "Распорядок дня".
 */

/**
 * Массив с данными метаполей для этого блока.
 *
 * @var array
 */
$data = get_field( 'schedule' );


// Список дел
$list = explode( "\n", $data['list'] );


?>

<style>
	.bg-color {
		background-color: <?php echo esc_attr($data['bg_color']); ?>
	}
</style>



<section class="section-min schedule bg-color " id="schedule" >
    <div class="container">
        <h2 class="title schedule__title">Распорядок дня</h2>
        <button class="btn schedule__btn">один день из жизни лагеря</button>
        <p class="schedule__txt">Узнайте как будет проходить день вашего ребёнка в лагере!</p>
    </div>
</section>

<div class="pop-up-schedule">
    <div class="pop-up-schedule__wrapper">
        <span class="pop-up-schedule__close"></span>
        <div class="title pop-up-schedule__title">Распорядок дня</div>
        <div class="pop-up-schedule__inner">
            <div class="pop-up-schedule__left">
                <ul class="pop-up-schedule__list">
					<?php foreach ( $list as $row ): ?>
                        <li class="pop-up-schedule__item">
                            <span><?php echo esc_html( $row ); ?></span>
                        </li>
					<?php endforeach; ?>
                </ul>
            </div>
            <div class="pop-up-schedule__right">
                <img class="pop-up-schedule__img" src="<?php echo esc_url( $data['photos']['item_1'] ); ?>">
                <img class="pop-up-schedule__img" src="<?php echo esc_url( $data['photos']['item_2'] ); ?>">
            </div>
        </div>
    </div>
</div>