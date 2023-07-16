<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title><?php bloginfo('name'); ?></title>
    <!-- CSS -->
    <?php wp_head(); ?>
</head>

<body>
    <div class="main">
        <header class="header_area">
            <div class="navbar-area">
                <div class="container">
                    <nav class="site-navbar">
                        <div class="site-logo">
                            <a href="<?php echo site_url(); ?>"><img src="<?php echo get_field('site_logo', 'option')['url']; ?>" /></a>
                        </div>
                        <?php wp_nav_menu(array('theme_location' => 'primary-manu', 'manu_class' => 'nav', 'container' => false)); ?>
                        <ul class="account-with-search">
                            <li><a href="<?php the_field('consultation_text_url', 'option'); ?>" class="btn"><?php the_field('consultation_text', 'option'); ?></a></li>
                        </ul>
                        <button class="nav-toggler">
                            <span></span>
                        </button>
                    </nav>
                </div>
            </div>
        </header>