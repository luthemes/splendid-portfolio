<?php
/**
 * Default content template
 *
 * @package   Splendid Portfolio
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2017-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/splendid-portfolio
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) { ?>
			<?php printf( '<span class="sticky-post">%1$s</span>', esc_html__( 'Featured', 'splendid-portfolio' ) ); ?>
		<?php } ?>
		<?php Benlumia007\Backdrop\Theme\Entry\display_title(); ?>
		<div class="entry-metadata">
			<?php Benlumia007\Backdrop\Theme\Entry\display_author(); ?>
			<?php Benlumia007\Backdrop\Theme\Entry\display_date(); ?>
			<?php Benlumia007\Backdrop\Theme\Entry\display_comments_link(); ?>
		</div>
	</header>
    <?php if ( has_post_thumbnail() ) : ?>
		<?php $alignwide = 'no-sidebar' === get_theme_mod( 'global_layout', 'no-sidebar' ) ? 'alignwide' : ''; ?>
		<?php $size = 'no-sidebar' === get_theme_mod( 'global_layout', 'no-sidebar' ) ? 'large' : 'medium'; ?>
		<picture class="post-thumbnail <?php echo esc_attr( $alignwide ); ?>">
			<?php the_post_thumbnail( "splendid-portfolio-{$size}-thumbnails" ); ?>
		</picture>
    <?php endif ?>
	<div class="entry-excerpt">
		<?php the_excerpt(); ?>
	</div>
</article>
