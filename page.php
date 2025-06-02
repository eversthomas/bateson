<?php
/**
 * Datei: page.php
 * Beschreibung: Template für statische Seiten
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="site-content" class="site-content" role="main" aria-label="<?php esc_attr_e( 'Hauptinhalt', 'bateson' ); ?>">
    <?php
    if ( have_posts() ):
        while ( have_posts() ): the_post();
            get_template_part( 'template-parts/content', 'page' );
        endwhile;
    endif;
    ?>
</main>
<?php get_footer(); ?>