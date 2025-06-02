<?php
/**
 * Datei: inc/setup.php
 * Beschreibung: Registriert Theme-Supports, Menüs und Textdomain
 */
namespace Bateson\Inc\Setup;
defined( 'ABSPATH' ) || exit;

function init(): void {
    // HTML5-Markup
    add_theme_support( 'html5', [ 'search-form', 'comment-list', 'gallery', 'caption' ] );
    // <title> von WP steuern lassen
    add_theme_support( 'title-tag' );
    // Beitragsbilder
    add_theme_support( 'post-thumbnails' );
    // Gutenberg-Breiten-Support
    add_theme_support( 'align-wide' );
    // Custom Logo (wichtig für header.php)
    add_theme_support( 'custom-logo', [
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ] );
    // Navigation registrieren
    register_nav_menus( [
        'primary' => __( 'Hauptmenü', 'bateson' ),
    ] );
    // Internationalisierung
    load_theme_textdomain( 'bateson', get_template_directory() . '/languages' );
}

add_action( 'after_setup_theme', __NAMESPACE__ . '\\init' );