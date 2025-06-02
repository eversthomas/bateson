<?php
/**
 * Datei: inc/cleanup.php
 * Beschreibung: Entfernt unnötige Header-Metadaten und Emojis
 */
namespace Bateson\Inc\Cleanup;
defined( 'ABSPATH' ) || exit;

function clean(): void {
    // Emojis entfernen
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles',   'print_emoji_styles' );
    // WordPress-Version verbergen
    add_filter( 'the_generator', '__return_empty_string' );
    // oEmbed-Links entfernen
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
    remove_action( 'wp_head', 'wp_oembed_add_host_js' );
}

add_action( 'init', __NAMESPACE__ . '\\clean' );