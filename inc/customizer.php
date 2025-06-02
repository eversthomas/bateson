<?php
/**
 * Datei: inc/customizer.php
 * Beschreibung: Customizer-Einstellungen (Logo & Live-Preview von Site Title und Tagline)
 */
namespace Bateson\Inc\Customizer;
defined( 'ABSPATH' ) || exit;

function register( \WP_Customize_Manager $wp_customize ): void {
    // Live-Preview für Site Title
    $wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
    // Live-Preview für Tagline
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

    // Hinweis: Das Custom-Logo-Control wird durch add_theme_support('custom-logo') schon bereitgestellt.
}

add_action( 'customize_register', __NAMESPACE__ . '\\register' );