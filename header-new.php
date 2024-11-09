<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Keywords" content="就労継続支援A型事業所,就労継続支援B型事業所,障がい者グループホーム,障害福祉事業,神奈川県二宮町" />
    <!-- ======================= [FB OGP] ======================= -->
    <meta property="og:image" content="https://asulead2019.com/asulead_ogp.jpg">
    <!-- //======================= [FB OGP] ======================= -->
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/icomoon.css')); ?>">
	<!-- swiper -->
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<!-- Font Awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link href="<?php echo esc_url(get_theme_file_uri('/css/animate-custom.css')); ?>" rel="stylesheet">
	<!-- wow -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<script src="<?php echo esc_url(get_theme_file_uri('/js/imgover.js')); ?>" id="imgover-js"></script>
	<script type="text/javascript" src="<?php echo esc_url(get_theme_file_uri('/js/modernizr.custom.js')); ?>"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <script>
    (function(d) {
        var config = {
        kitId: 'jlo2gbh',
        scriptTimeout: 3000,
        async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
    </script>
	<link href="<?php echo esc_url(get_theme_file_uri('/css/main.css')); ?>" rel="stylesheet">
	<?php if(is_page('landmark')): ?>
    <link href="<?php echo esc_url(get_theme_file_uri('/css/landmark.css')); ?>" rel="stylesheet">
    <?php else: ?>
    <link href="<?php echo esc_url(get_theme_file_uri('/css/lp.css')); ?>" rel="stylesheet">
    <?php endif; ?>
	
	
    <?php wp_head(); ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16689597519"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-16689597519');
    </script>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?> data-spy="scroll" data-offset="0" data-target="#navbar-main">
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

    <div class="bodywrap">
        <!-- ==== HEADER ==== -->
        <header>
            <div class="logoArea PCshow">
                <div class="header_menu_left">
                    <p class="logoimg">
                        <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/asulead-header-logo.svg" alt="アスリード"></a>
                    </p>
                </div>
                <div class="header_menu_right">
                    <ul>
                        <li><a href="<?php echo home_url('/about'); ?>">ABOUT</a></li>
                        <li class="menu__mega">
                            <a class="" tabindex="-1">SUPPORT&#9662;</a>
                            <ul class="menu__second-level menu__second-level50">
                                <li><a href="<?php echo home_url('/infacilitywork'); ?>">就労継続支援A型<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu__second-level01A.png" alt="" class=""></a></li>
                                <li><a href="<?php echo home_url('/offsitework'); ?>">就労継続支援B型<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu__second-level02B.png" alt="" class=""></a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo home_url('/group'); ?>">GROUP</a></li>
                        <li><a href="<?php echo home_url('/company'); ?>">COMPANY</a></li>
                        <li><a href="<?php echo home_url('/news'); ?>">NEWS</a></li>
                        <li class="navi-score"><a href="<?php echo home_url('/company'); ?>/#score" class=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/navi-score.png" alt="スコア表" class="imgover"></a></li>
                        <li class="navi-tel"><a href="#contact" class="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/navi-contact.png" alt="CONTACT" class="imgover">
                        </a></li>
                    </ul>
                </div>
            </div>
            <!-- /PC -->
            <!-- スマホはハンバーガーメニュー -->
            <div class="menu-wrapper PChide">
                <div class="menu-wrapper-logoarea">
                    <p class="logoimg"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/asulead-header-logo.svg" alt="アスリード"></a></p>
                </div>
                <div class="btn">
                    <span class="bar bar-top"></span>
                    <span class="bar bar-middle"></span>
                    <span class="bar bar-bottom"></span>
                </div>
                <nav class="menu-lists">
                    <div class="menu-wrapper-logoarea">
                        <p class="logoimg"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/asulead-header-logo.svg" alt="アスリード"></a></p>
                    </div>
                    <ul>
                        <li><a href="<?php echo home_url('/about'); ?>"><b>A</b>BOUT</a></li>
                        <li><a href="#"><b>S</b>UPPORT</a>
                            <ul class="navi-support">
                                <li class="navi-support-sp"><a href="<?php echo home_url('/infacilitywork'); ?>">>就労継続支援A型</a></li>
                                <li class="navi-support-sp"><a href="<?php echo home_url('/offsitework'); ?>">>就労継続支援B型</a></li>
                            </ul>                  
                        </li>
                        <li><a href="<?php echo home_url('/group'); ?>"><b>G</b>ROUP</a></li>
                        <li><a href="<?php echo home_url('/company'); ?>"><b>C</b>OMPANY</a></li>
                        <li><a href="<?php echo home_url('/news'); ?>"><b>N</b>EWS</a></li>
                        <li class="li-score"><a href="<?php echo home_url('/company'); ?>/#score"><b>ス</b>コア表</a></li>
                        <li class="navi-tel-sp"><a href="<?php echo home_url('/#contact'); ?>"><b>C</b>ONTACT</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div id="lowMenuwrap" class="">
            <!-- ==== PCフロートメニュー ==== -->
            <div class="logoArea PCshow">
                <div class="header_menu_left">
                    <p class="logoimg">
                        <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/asulead-header-logo.svg" alt="アスリード"></a>
                    </p>
                </div>
                <div class="header_menu_right">
                    <ul>
                        <li><a href="<?php echo home_url('/about'); ?>">ABOUT</a></li>
                        <li class="menu__mega">
                            <a class="" tabindex="-1">SUPPORT&#9662;</a>
                            <ul class="menu__second-level menu__second-level50">
                                <li><a href="<?php echo home_url('/infacilitywork'); ?>">就労継続支援A型<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu__second-level01A.png" alt="" class=""></a></li>
                                <li><a href="<?php echo home_url('/offsitework'); ?>">就労継続支援B型<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/menu__second-level02B.png" alt="" class=""></a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo home_url('/group'); ?>">GROUP</a></li>
                        <li><a href="<?php echo home_url('/company'); ?>">COMPANY</a></li>
                        <li><a href="<?php echo home_url('/news'); ?>">NEWS</a></li>
                        <li class="navi-score"><a href="<?php echo home_url('/company'); ?>/#score" class=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/navi-score.png" alt="スコア表" class="imgover"></a></li>
                        <li class="navi-tel"><a href="#contact" class="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/navi-contact.png" alt="CONTACT" class="imgover">
                        </a></li>
                    </ul>
                </div>
            </div>
            <!-- /PC -->
            <!-- スマホはハンバーガーメニュー -->
            <div class="menu-wrapper PChide">
                <div class="menu-wrapper-logoarea">
                    <p class="logoimg"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/asulead-header-logo.svg" alt="アスリード"></a></p>
                </div>
                <div class="btn">
                    <span class="bar bar-top"></span>
                    <span class="bar bar-middle"></span>
                    <span class="bar bar-bottom"></span>
                </div>
                <nav class="menu-lists">
                    <div class="menu-wrapper-logoarea">
                        <p class="logoimg"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/asulead-header-logo.svg" alt="アスリード"></a></p>
                    </div>
                    <ul>
                        <li><a href="<?php echo home_url('/about'); ?>"><b>A</b>BOUT</a></li>
                        <li><a href="#"><b>S</b>UPPORT</a>
                            <ul class="navi-support">
                                <li class="navi-support-sp"><a href="<?php echo home_url('/infacilitywork'); ?>">>就労継続支援A型</a></li>
                                <li class="navi-support-sp"><a href="<?php echo home_url('/offsitework'); ?>">>就労継続支援B型</a></li>
                            </ul>                  
                        </li>
                        <li><a href="<?php echo home_url('/group'); ?>"><b>G</b>ROUP</a></li>
                        <li><a href="<?php echo home_url('/company'); ?>"><b>C</b>OMPANY</a></li>
                        <li><a href="<?php echo home_url('/news'); ?>"><b>N</b>EWS</a></li>
                        <li class="li-score"><a href="<?php echo home_url('/company'); ?>/#score"><b>ス</b>コア表</a></li>
                        <li class="navi-tel-sp"><a href="<?php echo home_url('/#contact'); ?>"><b>C</b>ONTACT</a></li>
                    </ul>
                </nav>
            </div>
        </div>
