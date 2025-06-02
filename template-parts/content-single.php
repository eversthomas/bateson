<?php
/**
 * Datei: template-parts/content-single.php
 * Beschreibung: Template-Part für Beitrags-Inhalt mit Meta-Daten
 */
defined( 'ABSPATH' ) || exit;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <div class="entry-meta">
            <time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
                <?php echo esc_html( get_the_date() ); ?>
            </time>
            <span class="byline">
              <?php
              /* translators: von Autor */
              $author_id    = get_post_field( 'post_author', get_the_ID() );
              $display_name = get_the_author_meta( 'display_name', $author_id );

              if ( empty( $display_name ) ) {
                  // Fallback, falls Display Name wirklich leer
                  $display_name = get_the_author_meta( 'user_login', $author_id );
              }

              printf(
                  '%s %s',
                  esc_html_x( 'von', 'Autor Preposition', 'bateson' ),
                  esc_html( $display_name )
              );
              ?>
            </span>
        </div>
    </header>
    <div class="entry-content">
        <?php
        the_content();
        wp_link_pages( [
            'before'      => '<nav class="page-links" aria-label="' . esc_attr__( 'Seiten:', 'bateson' ) . '">',
            'after'       => '</nav>',
            'link_before' => '<span class="screen-reader-text">',
            'link_after'  => '</span>',
        ] );
        ?>
    </div>
    <?php
    the_post_navigation( [
      'prev_text' => '<span class="screen-reader-text">' . __( 'Vorheriger Beitrag:', 'bateson' ) . '</span> %title',
      'next_text' => '<span class="screen-reader-text">' . __( 'Nächster Beitrag:',   'bateson' ) . '</span> %title',
    ] );
    ?>
</article>