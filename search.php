<?php
/**
 * Datei: search.php
 * Beschreibung: Ausgabe der Suchergebnisse
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="site-content" class="site-content" role="main" aria-label="<?php esc_attr_e( 'Suchergebnisse', 'bateson' ); ?>">
  <header class="page-header">
    <h1 class="page-title">
      <?php
      /* translators: %s = Suchbegriff */
      printf(
        esc_html__( 'Suchergebnisse für: %s', 'bateson' ),
        '<span>' . esc_html( get_search_query() ) . '</span>'
      );
      ?>
    </h1>
  </header>
  <div class="page-content">
    <?php if ( have_posts() ) : ?>
      <ul class="search-results-list">
        <?php
        while ( have_posts() ) {
          the_post();
          ?>
          <li <?php post_class( 'search-result-item' ); ?>>
            <a href="<?php the_permalink(); ?>">
              <?php the_title( '<h2 class="result-title">', '</h2>' ); ?>
            </a>
            <?php if ( has_excerpt() ) : ?>
              <p class="result-excerpt"><?php echo wp_kses_post( wp_trim_words( get_the_excerpt(), 20, ' …' ) ); ?></p>
            <?php endif; ?>
          </li>
        <?php } ?>
      </ul>
      <?php
      the_posts_pagination( [
        'prev_text' => esc_html__( '&larr; Zurück', 'bateson' ),
        'next_text' => esc_html__( 'Weiter &rarr;', 'bateson' ),
        'before_page_number' => '<span class="screen-reader-text">' . esc_html__( 'Seite ', 'bateson' ) . '</span>',
      ] );
      ?>
    <?php else : ?>
      <p><?php esc_html_e( 'Leider keine Ergebnisse gefunden. Versuch es mit einem anderen Begriff:', 'bateson' ); ?></p>
      <?php get_search_form(); ?>
    <?php endif; ?>
  </div>
</main>
<?php
get_footer();