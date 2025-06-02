<?php
/**
 * Datei: footer.php
 * Beschreibung: Schließt Footer-Bereich und </body>, </html>
 */
defined( 'ABSPATH' ) || exit;
?>
    <footer id="colophon" class="site-footer" role="contentinfo">
        <p>
            &copy;
            <?php echo esc_html( date_i18n( _x( 'Y', 'Jahreszahl', 'bateson' ) ) ); ?>
            <?php bloginfo( 'name' ); ?>
        </p>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>