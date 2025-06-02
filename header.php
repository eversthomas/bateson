<?php
/**
 * Datei: header.php
 * Beschreibung: Dokumentbeginn inkl. <head>, Skip-Link, Logo und Navigation
 */
defined( 'ABSPATH' ) || exit;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <a class="skip-link screen-reader-text" href="#site-content">
        <?php esc_html_e( 'Zum Inhalt springen', 'bateson' ); ?>
    </a>
    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">
            <?php
            if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                the_custom_logo();
            } else { ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <span class="site-title"><?php bloginfo( 'name' ); ?></span>
                </a>
            <?php } ?>
        </div>
        <?php if ( has_nav_menu( 'primary' ) ) : ?>
        <nav
            id="site-navigation"
            class="main-navigation"
            role="navigation"
            aria-label="<?php esc_attr_e( 'Hauptmenü', 'bateson' ); ?>"
        >
            <?php
            wp_nav_menu( [
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'container'      => false,
                'fallback_cb'    => false,
                'depth'          => 2,
            ] );
            ?>
        </nav>
        <?php endif; ?>
    </header>