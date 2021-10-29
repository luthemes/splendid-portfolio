<?php
/**
 * Default comments template
 *
 * @package   Initiator
 * @author    Benjamin Lu ( benlumia007@gmail.com )
 * @copyright Copyright (C) 2019-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/initiator
 */
?>

<?php
if ( post_password_required() ) {
	return;
}
?>

<?php if ( comments_open() ) { ?>
	<section id="comments-area" class="comments-area">
		<?php if ( have_comments() ) { ?>
			<h2 class="comments-title">
				<?php $count = get_comments_number(); ?>
				<?php
				if ( '1' === $count ) {
					printf( esc_html_x( 'One Comment', 'comments title', 'splendid-portfolio' ) );
				} else {
					// Translators: 1 = counts.
					printf( _nx( '%1$s Comment', '%1$s Comments', absint( $count ), 'comments title', 'splendid-portfolio' ), absint( number_format_i18n( $count ) ) ); // phpcs:ignore
				}
				?>
			</h2>
		<?php } ?>
		<ul class="comment-list">
			<?php
				wp_list_comments( [
					'style'       => 'ul',
					'avatar_size' => 50,
					'callback' => 'Benlumia007\Backdrop\Theme\Comments\Component::display_comments_list'
				] );
			?>
		</ul>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { ?>
			<nav id="comment-nav-below" class="comment-navigation" role="navigation">
				<div class="comment-previous"><?php previous_comments_link( '<i class="fa fa-arrow-circle-o-left"></i> ' . esc_html__( 'Older Comments', 'splendid-portfolio' ) ); ?></div>
				<div class="comment-next"><?php next_comments_link( '<i class="fa fa-arrow-circle-o-right"></i> ' . esc_html__( 'Newer Comments', 'splendid-portfolio' ) ); ?></div>
			</nav>
		<?php } ?>
		<?php comment_form(); ?>
	</section>
<?php } ?>
