<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title><?php if (is_home () ) { bloginfo('name'); } elseif ( is_category() ) { single_cat_title(); echo ' - ' ; bloginfo('name'); }
 elseif (is_single() ) { single_post_title(); }
 elseif (is_page() ) { bloginfo('name'); echo ': '; single_post_title(); }
 else { wp_title('',true); } ?></title>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!--[if IE 6]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.ie6.css" type="text/css" media="screen" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.ie7.css" type="text/css" media="screen" /><![endif]-->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/checked.css">
<link rel="alternate" type="application/rss+xml" title="<?php printf(__('%s RSS Feed', 'kubrick'), get_bloginfo('name')); ?>" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php printf(__('%s Atom Feed', 'kubrick'), get_bloginfo('name')); ?>" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body>


    <header>
        <div class="container">
            <!--    navigation-->
            <div class="nav-menu clearfix">
                <?php
                    if (function_exists('wp_nav_menu'))
                        wp_nav_menu(
                            array(
                                'theme_location' => 'custom-menu',
                                'fallback_cb' => 'custom_menu',
                                'container' => 'ul',
                                'menu_id' => 'nav',
                                'menu_class' => 'nav')
                        );
                    else custom_menu();
                ?>
            </div>

            <div class="logo_and_text_cont clearfix">
                <div class="logo"><h1><a href="http://zazanik.esy.es/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a></h1></div>
                <h2 id="name-text" class="art-Logo-name">
                    <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
                </h2>
                <div id="slogan-text" class="art-Logo-text">
                    <?php bloginfo('description'); ?>
                </div>
            </div>
        </div>
    </header>

    <div class="wrapper">
        <div class="art-Sheet">
            <div class="art-Sheet-body">

