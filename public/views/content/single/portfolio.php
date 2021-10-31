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
	</header>
    <?php if ( has_post_thumbnail() ) : ?>
		<picture class="post-thumbnail">
			<?php the_post_thumbnail( 'splendid-portfolio-large-thumbnails' ); ?>
		</picture>
    <?php endif ?>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</article>
