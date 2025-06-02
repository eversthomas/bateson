<?php
/**
 * Datei: inc/seo.php
 * Beschreibung: Fügt grundlegende SEO-Meta-Tags (Canonical & Description) hinzu
 */
namespace Bateson\Inc\SEO;
defined( 'ABSPATH' ) || exit;

/**
 * Canonical-URL für Einzelseiten
 */
function canonical(): void {
    if ( is_singular() ) {
        printf(
            '<link rel="canonical" href="%s" />' . "\n",
            esc_url( get_permalink() )
        );
    }
}

/**
 * Meta-Description für verschiedene Seitentypen
 */
function meta_description(): void {
    // 1) Einzel-Beiträge/Seiten mit manuellem Excerpt
    if ( is_singular() && has_excerpt() ) {
        printf(
            '<meta name="description" content="%s" />' . "\n",
            esc_attr( get_the_excerpt() )
        );
        return;
    }

    // 2) Startseite / Blog-Übersicht: Site-Tagline nutzen
    if ( is_front_page() || is_home() ) {
        printf(
            '<meta name="description" content="%s" />' . "\n",
            esc_attr( get_bloginfo( 'description' ) )
        );
        return;
    }

    // 3) Archive / Suchergebnisse / andere Index-Seiten: ggf. Standard-Tagline
    if ( is_archive() || is_search() ) {
        printf(
            '<meta name="description" content="%s" />' . "\n",
            esc_attr( get_bloginfo( 'description' ) )
        );
    }
}

add_action( 'wp_head', __NAMESPACE__ . '\\canonical',         1 );
add_action( 'wp_head', __NAMESPACE__ . '\\meta_description', 2 );