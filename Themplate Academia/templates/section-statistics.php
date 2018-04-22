<?php
/**
 * Блок со статистикой.
 */

/**
 * Массив с данными метаполей для этого блока.
 *
 * @var array
 */
$data = get_field( 'statistics' );
?>

<section class="section statistics" id="statistics"
         style="background: url(<?php echo esc_url( $data['bg_img'] ); ?>) 50% 0 no-repeat fixed;     background-size: cover;">
    <div class="container">
        <div class="statistics-block">
            <div class="statistics-block__title">90%</div>
            <p class="statistics-block__txt">детей приезжают к нам снова</p>
        </div>
        <div class="statistics-block">
            <div class="statistics-block__title">>15</div>
            <p class="statistics-block__txt">смен проведено за 2 года</p>
        </div>
        <div class="statistics-block">
            <div class="statistics-block__title">>200</div>
            <p class="statistics-block__txt">родителей доверяют нам своих детей</p>
        </div>
        <div class="statistics-block">
            <div class="statistics-block__title">230</div>
            <p class="statistics-block__txt">детей побывало у нас в лагерях</p>
        </div>
        <div class="statistics-block">
            <div class="statistics-block__title">9-17</div>
            <p class="statistics-block__txt">лет возраст участников</p>
        </div>
    </div>
</section>
