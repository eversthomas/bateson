<?php
/**
 * Datei: comments.php
 * Beschreibung: Darstellung von Kommentaren und Kommentar-Formular
 */
defined( 'ABSPATH' ) || exit;

// Schutz bei Password-geschützten Beiträgen
if ( post_password_required() ) {
  return;
}
?>
<div id="comments" class="comments-area">
  <?php if ( have_comments() ) : ?>
    <h2 class="comments-title">
      <?php
      printf(
        /* translators: %1$d = Anzahl Kommentare */
        esc_html( _n( 'Ein Kommentar', '%1$s Kommentare', get_comments_number(), 'bateson' ) ),
        number_format_i18n( get_comments_number() )
      );
      ?>
    </h2>
    <ol class="comment-list">
      <?php
      wp_list_comments( [
        'style'       => 'ol',
        'short_ping'  => true,
        'avatar_size' => 48,
      ] );
      ?>
    </ol>
  <?php endif; ?>

  <?php
  comment_form( [
    'class_submit' => 'comment-submit',
    'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
    'title_reply_after'  => '</h3>',
  ] );
  ?>
</div>