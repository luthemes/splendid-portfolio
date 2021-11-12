<?php
/**
 * Default page template
 *
 * @package   Splendid Portfolio
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2017-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/splendid-portfolio
 */
$portfolio_display = get_theme_mod( 'custom_portfolio_display' );
?>
<?php $engine = Benlumia007\Backdrop\App::resolve( 'view/engine' ); ?>
<?php $engine->display( 'header' ); ?>
    <?php if ( 0 != $portfolio_display && isset( $portfolio_display ) ) : ?>
        <?php $engine->display( 'section/portfolio' ); ?>
    <?php endif; ?>
<?php $engine->display( 'footer' ); ?>