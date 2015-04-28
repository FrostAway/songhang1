<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]> <html <?php language_attributes(); ?>> <![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo get_stylesheet_directory_uri() ?>/images/favicon.ico" rel="shortcut icon">
    <link rel="profile" href="http://gmgp.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css' type='text/css' />
    <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>/js/bxslider/jquery.bxslider.css' type='text/css' />
    <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>/style.css' type='text/css' />
    <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.11.2.min.js'></script>



    <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.cycle2.min.js'></script>
    <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.cycle2.carousel.min.js'></script>
    <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/js/songhang.js'></script>


    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

    <div class="sh-banner sh-banner-left">
        <div>
            <a href="#" target="_blank">
                <img src="<?php echo ot_get_option('iz_banner_tl', 'banner') ?>">
            </a>
        </div>
        <div>
            <a href="#" target="_blank">
                <img src="<?php echo ot_get_option('iz_banner_bl', 'banner') ?>">
            </a>
        </div>
    </div>

    <div class="sh-banner sh-banner-right">
        <div>
            <a href="#" target="_blank">
                <img src="<?php echo ot_get_option('iz_banner_br', 'banner') ?>">
            </a>
        </div>
        <div>
            <a href="#" target="_blank">
                <img src="<?php echo ot_get_option('iz_banner_tr', 'banner') ?>">
            </a>
        </div>

    </div>

    <div class="container sh-container sh-container-header">
        <div class="sh-header">
            <div class="sh-header-hotline header-sologan">
                <div class="sh-sologan">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/vemaybay-sloganheader_03.png" title="Đường bay tốt - Giá lại nét" />
                </div>
            </div>
            <div class="sh-header-hotline">
                <div class="sh-header-hotline-content">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header/hotline-1.png">
                </div>
                <div  class="sh-header-hotline-content">
                    <div>HOTLINE HÀ NỘI</div>
                    <div><?php echo ot_get_option('iz_hotline_hn'); ?></div>
                </div>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header/header-02.png" class="sh-header-bg">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo ot_get_option('logo', 'LOGO'); ?>" class="sh-header-logo">
            </a>

        </div>

        <nav class="navbar navbar-collapse sh-navbar" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed sh-navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        MENU
                    </button>
                </div>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'menu' => '',
                    'container' => 'div',
                    'container_class' => 'navbar-collapse collapse sh-collapse',
                    'container_id' => 'navbar',
                    'menu_class' => 'nav navbar-nav navbar-right',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'depth' => 0,
                    'walker' => ''
                ));
                ?>

            </div>
        </nav>
        <div class="sh-header-text">
            <span><?php echo ot_get_option('head_title', 'Title'); ?></span>
        </div>
    </div>
    <div class="container sh-container">



