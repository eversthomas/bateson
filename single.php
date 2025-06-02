<?php
/**
 * Datei: single.php
 * Beschreibung: Template für Blog-Beiträge
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="site-content" class="site-content" role="main" aria-label="<?php esc_attr_e( 'Hauptinhalt', 'bateson' ); ?>">
    <?php
    if ( have_posts() ):
        while ( have_posts() ): the_post();
            get_template_part( 'template-parts/content', 'single' );
        endwhile;
    endif;
    ?>
</main>
<?php get_footer(); ?>