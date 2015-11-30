<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main, .grid and #page div elements.
 *
 * @since 1.0.0
 */
$bavotasan_theme_options = bavotasan_theme_options();

		/* Do not display sidebar on home page if 'home_posts' turned
			off */
		if ( $bavotasan_theme_options['home_posts'] )
			get_sidebar();
		?>
	</div> <!-- #main.row -->
</div> <!-- #page.grid -->

<footer id="footer" role="contentinfo">
	<div id="footer-content" class="grid <?php echo $bavotasan_theme_options['width']; ?>">
		<div class="row">
			<div class="copyright c12">
				<?php printf( __( 'Creative Commons: Namensnennung Deutschland 3.0; %s %s. Einige Rechte vorbehalten.', 'tonic' ), date( 'Y' ), ' <a href="' . home_url() . '">' . get_bloginfo( 'name' ) .'</a>' ); ?>
				<a href="/?page_id=1679">Impressum</a>, <a href="/?page_id=1723">Datenschutz</a>
				<p>Mit freundlicher Unterstützung der:</p>
				<img src="/logo-stadtwerke-bochum.png" />
			</div><!-- copyright .c12 -->
		</div><!-- .row -->
	</div><!-- #footer-content.grid -->
</footer><!-- #footer -->

<?php wp_footer(); ?>
</body>
</html>
