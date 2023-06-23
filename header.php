<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>

    <header id="header" class="header">
        <div class="header__container container">
            <div class="header__container__logo">
                <a href="<?= get_home_url(); ?>">
                    <img src="<?= get_template_directory_uri() . '/assets/img/logo/logo-coliveIn.png' ?>" alt="">
                </a>
            </div>
            <nav class="header__container__menu">
                <?php 
                    wp_nav_menu([
                        'theme_location' => 'main',
                        'container' => 'ul',
                        
                    ]); 
                ?>
                <div class="header__container__button">
                    <a href="">
                        <button>Demande de </br> brochure</button>
                    </a>
                </div>
            </nav>
        </div>
    </header>