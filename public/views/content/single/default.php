<?php
/**
 * Initiator ( content-single.php )
 *
 * @package   Initiator
 * @copyright Copyright (C) 2019-2021. Benjamin Lu
 * @license   GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author    Benjamin Lu ( https://benjlu.com )
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
