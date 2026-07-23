<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo('charset'); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="site-header">

    <div class="container">

        <!-- Logo -->
        <div class="logo">

            <a href="<?php echo esc_url(home_url('/')); ?>">

                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                    alt="<?php bloginfo('name'); ?>">

            </a>

        </div>

        <!-- Mobile Menu Button -->
        <button class="menu-toggle">☰</button>

        <!-- Navigation -->
        <nav class="main-navigation">

            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-menu',
            ));
            ?>

        </nav>

    </div>

</header>