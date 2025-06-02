<?php
/**
 * Datei: functions.php
 * Beschreibung: Lädt alle modularen Funktionen in genau definierter Reihenfolge
 */
defined( 'ABSPATH' ) || exit;

$inc_files = [
    // Zuerst Grund-Setup (Theme-Supports, Menüs, Textdomain)
    'inc/setup.php',

    // Dann Customizer-Einstellungen (nutzt das Setup)
    'inc/customizer.php',

    // Assets (CSS/JS)
    'inc/assets.php',

    // Cleanup (Entfernen von Emojis, WP-Generator usw.)
    'inc/cleanup.php',

    // SEO-Meta-Tags
    'inc/seo.php',

    // Editor-Einschränkungen (Gutenberg-Blöcke)
    'inc/editor.php',
    
    // compile scss
    'inc/style.php',
];

foreach ( $inc_files as $file ) {
    $path = __DIR__ . '/' . $file;
    if ( file_exists( $path ) ) {
        require_once $path;
    }
}