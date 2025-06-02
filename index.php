<?php
/**
 * Datei: index.php
 * Beschreibung: Haupt-Template; lädt Header, Loop und Footer
 * Anpassung: für Blog-Übersicht Excerpt-Template nutzen
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="site-content" class="site-content" role="main" aria-label="<?php esc_attr_e( 'Hauptinhalt', 'bateson' ); ?>">
    <?php
    if ( have_posts() ):
        while ( have_posts() ): the_post();

            if ( is_singular() ) {
                // Einzelansicht: vollständiger Inhalt
                get_template_part( 'template-parts/content', 'single' );

            } elseif ( is_home() || is_archive() ) {
                // Blog- und Archiv-Listen: nur Excerpt + Read More
                get_template_part( 'template-parts/content', 'excerpt' );

            } else {
                // statische Seiten etc.
                get_template_part( 'template-parts/content', 'page' );
            }

        endwhile;
    endif;
    ?>
</main>
<?php
get_footer();