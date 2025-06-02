<?php
/**
 * Datei: template-parts/content-page.php
 * Beschreibung: Template-Part für Seiten-Inhalt
 */
defined( 'ABSPATH' ) || exit;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>
    <div class="entry-content">
        <?php
        the_content();
        wp_link_pages( [
            'before'           => '<nav class="page-links" aria-label="' . esc_attr__( 'Seiten:', 'bateson' ) . '">',
            'after'            => '</nav>',
            'link_before'      => '<span class="screen-reader-text">',
            'link_after'       => '</span>',
        ] );
        ?>
    </div>
</article>