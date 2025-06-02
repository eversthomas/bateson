<?php
/**
 * Datei: 404.php
 * Beschreibung: Template für “Seite nicht gefunden” mit Suchformular
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="site-content" class="site-content" role="main" aria-label="<?php esc_attr_e( 'Fehlerseite', 'bateson' ); ?>">
  <section class="error-404 not-found">
    <header class="page-header">
      <h1 class="page-title"><?php esc_html_e( '404 – Seite nicht gefunden', 'bateson' ); ?></h1>
    </header>
    <div class="page-content">
      <p><?php esc_html_e( 'Die gesuchte Seite konnte leider nicht gefunden werden. Versuch es doch mal mit einer Suche:', 'bateson' ); ?></p>
      <?php get_search_form(); ?>
      <p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          &larr; <?php esc_html_e( 'Zur Startseite zurückkehren', 'bateson' ); ?>
        </a>
      </p>
    </div>
  </section>
</main>
<?php
get_footer();