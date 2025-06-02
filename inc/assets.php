<?php
/**
 * Datei: inc/assets.php
 * Beschreibung: Enqueue von Styles und Scripts
 */
namespace Bateson\Inc\Assets;
defined( 'ABSPATH' ) || exit;

function enqueue(): void {
    // Haupt-Stylesheet (Dateiänderungen über filemtime erkennen)
    wp_enqueue_style(
        'bateson-style',
        get_stylesheet_uri(),
        [],
        filemtime( get_stylesheet_directory() . '/style.css' )
    );
    // 2. Zusätzliche CSS-Datei aus dem Unterordner 'styles'
    wp_enqueue_style(
        'bateson-custom-styles',                          // Neuer Handle
        get_stylesheet_directory_uri() . '/styles/style.css', // URL zum Unterordner
        [ 'bateson-style' ],                              // Style-Dependency (wird nach style.css geladen)
        filemtime( get_stylesheet_directory() . '/styles/style.css' ) // Version per filemtime
    );
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue' );