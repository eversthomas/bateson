<?php
/**
 * Datei: inc/editor.php
 * Beschreibung: Beschränkt erlaubte Gutenberg-Core-Blocks
 */
namespace Bateson\Inc\Editor;
defined( 'ABSPATH' ) || exit;

function allowed_block_types_all( $allowed, $context ): array {
    return [
        'core/paragraph',
        'core/heading',
        'core/image',
        'core/list',
        'core/cover',      // Hero-Bereich via Cover-Block
        'core/buttons',    // CTA-Buttons im Hero
        'core/group',      // Wrapper zur Layout-Gruppierung
    ];
}

add_filter( 'allowed_block_types_all', __NAMESPACE__ . '\\allowed_block_types_all', 10, 2 );