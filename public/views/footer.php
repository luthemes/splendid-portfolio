<?php
/**
 * Default footer template
 *
 * @package   Splendid Portfolio
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2017-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/splendid-portfolio
 */
?>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php
			printf(
				// Translators: 1 = Date, 2 = Site Link.
				esc_html__( 'Copyright &#169; %1$s. %2$s', 'splendid-portfolio' ),
				absint( date_i18n( 'Y' ) ),
				Benlumia007\Backdrop\Theme\Site\render_site_link() // phpcs:ignore
			);
			?>
			<br />
			<?php
			printf(
				// Translators: 1 = WordPress Link, 2 = Theme Link.
				esc_html__( 'Powered By %1$s and %2$s', 'splendid-portfolio' ),
				Benlumia007\Backdrop\Theme\Site\render_wp_link(), // phpcs:ignore
				Benlumia007\Backdrop\Theme\Site\render_theme_link() // phpcs:ignore
			);
			?>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>