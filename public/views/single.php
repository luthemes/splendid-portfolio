<?php
/**
 * Default single template
 *
 * @package   Splendid Portfolio
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2017-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/splendid-portfolio
 */
?>
<?php $engine = Benlumia007\Backdrop\App::resolve( 'view/engine' ); ?>
<?php $engine->display( 'header' ); ?>
	<section id="content" class="site-content">
		<div id="layout" class="<?php echo esc_attr( get_theme_mod( 'global_layout', 'left-sidebar' ) ); ?>">
			<main id="main" class="content-area">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php $engine->display( 'content/single'  ); ?>
				<?php endwhile; ?>
				<?php 
					the_post_navigation( [
						'next_text' => '<span class="post-next" aria-hidden="true">' . esc_html__( 'Next', 'splendid-portfolio' ) . '</span><span class="post-title">%title</span>',
						'prev_text' => '<span class="post-previous" aria-hidden="true">' . esc_html__( 'Previous', 'splendid-portfolio' ) . '</span><span class="post-title">%title</span>',
					] );
				?>
				<?php comments_template(); ?>
			</main>
			<?php Benlumia007\Backdrop\Theme\Sidebar\display( 'sidebar', [ 'primary' ] ); ?>
		</div>
	</section>
<?php $engine->display( 'footer' ); ?>