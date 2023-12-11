<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"> 

    
   

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <ul>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/Hibiscus.png'; ?> " class="fleurNav loop1 fleur1Nav" alt="hibiscus">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/Sunflower.png'; ?> " class="fleurNav loop fleur2Nav" alt="Paquerette">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/Random_flower.png'; ?> " class="fleurNav loop3 fleur3Nav" alt="Fleur">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/flower.png'; ?> " class="fleurNav loop fleur4Nav" alt="Une fleur">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/Orchid.png'; ?> " class="fleurNav loop5 fleur5Nav" alt="Une orchidée">
            <img src="<?php echo get_stylesheet_directory_uri() . './medias/OrangeCat.png' ; ?>" class="float chat1Nav" alt="Un chat orange">
            <img src="<?php echo get_stylesheet_directory_uri() . './medias/GreyCat.png' ; ?>" class="float1 chat2Nav" alt="Un chat gris">
            <img src="<?php echo get_stylesheet_directory_uri() . './medias/Cat.png' ; ?>" class="float2 chat3Nav" alt="Un chat bleu">
            <img src="<?php echo get_stylesheet_directory_uri() . './medias/LOGOf.png' ; ?>" class="logoNav" alt="logo fleur d oranger et chats errants">
                <li><a href="#story">Histoire</a></li>
                <li><a href="#characters">Personnages</a></li>

                <li><a href="#place">Lieu</a></li>
                <li><a href="#studio">Studio Koukaki</a></li>
                <img src="<?php echo get_stylesheet_directory_uri() . './medias/koukaki.png' ; ?>" class="koukakiNav"  alt="Studio Koukaki">
            </ul>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
