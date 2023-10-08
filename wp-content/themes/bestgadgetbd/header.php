<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Newspaper X
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php
body_class(); ?>
<div id="page" class="site">
	<?php
	wp_body_open(); ?>
	<?php
	//	$top_bar = get_theme_mod( 'newspaper_x_enable_top_bar', true );
	//	if ( $top_bar ) :
	//		get_template_part( 'template-parts/top-header' );
	//	endif;
	?>

    <header id="masthead" class="siheader" role="banner">
        <div class="site-branding container">
            <div class="row bgbd-top-menu">
                <div class="col-md-3 bgbd-header-logo">
                    <a href="<?= site_url(); ?>"> <img src="<?= get_stylesheet_directory_uri() . '/images/logo.svg'; ?>" alt="Main Logo"></a>
                </div>
                <div class="col-md-5 bgbd-product-search-bar">
                    <input type="text" class="bgbd-search-bar-input" placeholder="Search For Product">
                    <button type="submit" class="bgbd-search-icon">
                        <img src="<?= get_stylesheet_directory_uri() . '/images/search-icon.svg'; ?>" alt="Product Search Icon">
                    </button>
                </div>
                <div class="col-md-4 bgbd-header-side-logo">
                    <div class="compare">
                        <img src="<?= get_stylesheet_directory_uri() . '/images/compare-icon.svg'; ?>" alt="Compare Icon"> <span>Compare</span>
                    </div>
                    <div class="wishlist">
                        <img src="<?= get_stylesheet_directory_uri() . '/images/compare-icon.svg'; ?>" alt="Wishlist Icon"> <span>Wishlist</span>
                    </div>
                </div>
            </div>
        </div>

        <nav id="site-navigation" class=" bgbd-main-menu" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
						<?php
						if ( has_nav_menu( 'primary' ) ) {
							wp_nav_menu( array(
								'theme_location' => 'main-menu',
								'menu_class'        => 'primary-menu'
							) );

						} ?>
                    </div>
                </div>
            </div>
        </nav>


    </header>

    <div id="content" class="site-content">
		
