<?php
/**
 * Datei: template-parts/content-excerpt.php
 * Beschreibung: Template-Part für Blog-Listen mit Excerpt und Read-More-Link
 */
defined( 'ABSPATH' ) || exit;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <h2 class="entry-title">
      <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
        <?php the_title(); ?>
      </a>
    </h2>
  </header>

  <div class="entry-summary">
    <?php the_excerpt(); ?>
    <a class="read-more" href="<?php echo esc_url( get_permalink() ); ?>">
      <?php esc_html_e( 'Weiterlesen', 'bateson' ); ?>
    </a>
  </div>
</article>