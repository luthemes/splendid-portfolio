<?php
/**
 * Default single content template
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
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages(
				array(
					'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'splendid-portfolio' ),
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'splendid-portfolio' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">,</span> ',
				)
			);
			?>
	</div>
	<div class="entry-taxonomies">
		<?php Benlumia007\Backdrop\Theme\Entry\display_categories(); ?>
		<?php Benlumia007\Backdrop\Theme\Entry\display_tags(); ?>
	</div>
</article>
