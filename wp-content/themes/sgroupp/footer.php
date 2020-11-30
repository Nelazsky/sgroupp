<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sgroupp
 */

?>
<footer>

    <div class="container">
        <div class="header-wrapper">
            <div class="logo">
                <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Секвойя групп">
            </div>
            <div class="header-menu">
                <ul class="header-menu_wrapper">
                    <li><a class="header-menu_item" href="#">Календарь занятий</a></li>
                    <li><a class="header-menu_item" href="#">Спикеры</a></li>
                    <li><a class="header-menu_item" href="#">Преимущества</a></li>
                    <li><a class="header-menu_item" href="#">ПВК</a></li>
                </ul>
            </div>
            <div class="header-contact">
                <div class="header-contact_phone">
                    <a href="tel:+79178506006" class="phone-number">+7-9178-506-006</a>
                    <img width="30px" src="<?php bloginfo('template_url'); ?>/img/svg/whatsapp.svg" alt="whatsapp">
                </div>
                <div class="header-contact_email">sgroupp@yandex.ru</div>
                <button class="button">Отправить заявку </button>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
