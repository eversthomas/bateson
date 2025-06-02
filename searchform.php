<?php
/**
 * Datei: searchform.php
 * Beschreibung: Teil-Template für das Suchformular
 */
defined( 'ABSPATH' ) || exit;
?>
<form role="search"
      method="get"
      class="search-form"
      action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label for="bateson-search-field" class="screen-reader-text">
    <?php esc_html_e( 'Suche nach:', 'bateson' ); ?>
  </label>
  <input type="search"
         id="bateson-search-field"
         class="search-field"
         placeholder="<?php esc_attr_e( 'Suchbegriff …', 'bateson' ); ?>"
         value="<?php echo get_search_query(); ?>"
         name="s"
         required
         aria-required="true" />
  <button type="submit" class="search-submit">
    <?php esc_html_e( 'Suchen', 'bateson' ); ?>
  </button>
</form>