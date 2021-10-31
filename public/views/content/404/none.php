<?php
/**
 * Default 404 content template
 *
 * @package   Splendid Portfolio
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2017-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/splendid-portfolio
 */
?>
<article id="post-0" <?php post_class( 'post' ); ?>>
	<header class="entry-header">
		<h1 class="entry-title">
			<?php esc_html_e( 'Nothing Found', 'splendid-portfolio' ); ?>
		</h1>
	</header>
	<div class="entry-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p>
				<?php
					// Translators: 1 = admin url.
					printf( esc_html__( 'Ready to publish your first post? %s', 'splendid-portfolio' ), '<a href="' . esc_url( admin_url( 'post-new.php' ) ) . '">' . esc_html__( 'Get Started', 'splendid-portfolio' ) . '</a>' );
				?>
			</p>
		<?php else : ?>
			<p><?php esc_html_e( 'It seems we cannot find what you are looking for. Perhaps searching can help.', 'splendid-portfolio' ); ?></p>
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div>
</article>
