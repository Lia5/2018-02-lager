<?php
/**
 * Добавляем стили в админку для ACF
 * Добавляем функцию создание быстрых ссылок для вкладок на странице редактирования групп полей
 */

add_action( 'current_screen', function ( $current_screen ) {
	if ( 'acf-field-group' == $current_screen->post_type && 'post' == $current_screen->base ) {
		add_action( 'admin_head', 'acf_add_quick_tabs' );
	}
} );

function acf_add_quick_tabs() {
	?>

    <!-- Стили -->
    <style type="text/css">
        .acf-field-object-tab {
            background: aliceblue;
            box-sizing: border-box;
            border: 3px solid transparent;
        }

        .acf-tab-wrap.-left .acf-tab-group,
        .acf-fields.-sidebar:before {
            width: 200px;
        }

        .acf-fields.-sidebar {
            padding-left: 200px !important;
        }

        .acf-tab-wrap.-left .acf-tab-group li a {
            background: #f9f9f9;
        }

        #titlediv .inside span {
            display: inline-block;
            margin: 5px;
            padding: 5px;
            background: #dbdbdb;
            cursor: pointer;
        }
    </style>

    <!-- Срипты -->
    <script type="text/javascript">

        jQuery(document).ready(function ($) {

            var $boxQuickLinks = $('#titlediv .inside');
            var boxTabs = $('.acf-field-object-tab');

            // Создаем меню из табов
            $(boxTabs).each(function () {

                var key = $(this).data('key');
                var span = '<span>' + $('.li-field-label strong', this).text() + '</span>';

                $boxQuickLinks.append($(span).attr('key', key));

            });


            // Создаем скролл по клику span->tab
            $boxQuickLinks.on('click', 'span', function () {

                var key = $(this).attr('key');
                var goTab = $('div[data-key=' + key + ']');

                console.log(goTab);

                $("html,body").animate({
                        scrollTop: goTab.offset().top - 200
                    },
                    300,
                    null,
                    function () {

                        goTab
                            .animate({
                                borderColor: "#bfe1ff"
                            }, 500)
                            .animate({
                                borderColor: "transparent"
                            }, 500, 'linear')
                            .stop();

                    });

            });

        });

    </script>

	<?php
}
