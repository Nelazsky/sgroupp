
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
    <title>SGROUPP</title>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <div class="container">
        <div class="header-wrapper">
            <div class="logo">
                <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Секвойя групп">
            </div>
            <div class="header-menu">
                <ul class="header-menu_wrapper">
                    <li><a class="header-menu_item" href="#calendar">Календарь занятий</a></li>
                    <li><a class="header-menu_item" href="#speakers">Спикеры</a></li>
                    <li><a class="header-menu_item" href="#features">Преимущества</a></li>
                    <li><a class="header-menu_item" href="#pvk">ПВК</a></li>
                </ul>
            </div>
            <div class="header-contact">
                <div class="header-contact_phone">
                    <a href="tel:+79178506006" class="phone-number">+7-9178-506-006</a>
                    <img class="icon whatsapp" width="30px" src="<?php bloginfo('template_url'); ?>/img/svg/whatsapp.svg" alt="whatsapp">
                </div>
                <div class="header-contact_email">sgroupp@yandex.ru</div>
                <button class="button popmake-13"><a href="#">Отправить заявку </a></button>
            </div>
        </div>
    </div>
</header>