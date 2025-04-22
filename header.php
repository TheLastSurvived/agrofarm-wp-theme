<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Шапка -->
    <header class="<?php if ( is_front_page() ){echo "header-home";}else{echo "header";}?>">
        <div class="container">
            <nav>
                <a class="logo" href="<?php echo home_url(); ?>">Агро<span>Ферм</span></a>
                
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'primary-menu',
                    'container'      => false,
                ));
                ?>
            </nav>
            
            <?php if ( is_front_page() ) : ?>
                <div class="header-content">
                    <h1>Современные решения для сельского хозяйства</h1>
                    <p>Мы предлагаем инновационные технологии и качественную продукцию для вашего успешного агробизнеса</p>
                    <a href="#contacts" class="btn">Связаться с нами</a>
                </div>

            <?php endif; ?>
        </div>
    </header>