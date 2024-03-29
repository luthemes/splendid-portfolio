<?php
/**
 * Default archive content template
 *
 * @package   Splendid Portfolio
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2017-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/splendid-portfolio
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<picture class="post-thumbnail">
			<?php the_post_thumbnail( 'splendid-portfolio-medium-thumbnails' ); ?>
		</picture>
	<?php endif ?>
	<header class="entry-header">
		<?php Benlumia007\Backdrop\Theme\Entry\display_title(); ?>
		<div class="entry-metadata">
			<?php Benlumia007\Backdrop\Theme\Entry\display_author(); ?>
			<?php Benlumia007\Backdrop\Theme\Entry\display_date(); ?>
			<?php Benlumia007\Backdrop\Theme\Entry\display_comments_link(); ?>
		</div>
	</header>
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
</article>
