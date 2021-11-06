<?php
/**
 * Theme - filters and actions
 * 
 * Adds custom filters and actions to the theme.
 *
 * @package   Splendid Portfolio
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2017-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/splendid-portfolio
 */

/**
 * Define namespace
 */
namespace Splendid\Portfolio;

/**
 * Change the theme template path to the `public/views` folder.
 * 
 * @since  1.0.0
 * @access public
 * @return string
 */
add_filter( 'backdrop/template/path', function() {
	return 'public/views';
} );

/**
 * Registers custom templates for WordPress.
 *
 * @since  1.0.0
 * @access public
 * @param  object  $templates
 * @return void
 */
add_action( 'backdrop/templates/register', function( $templates ) {
	$templates->add( 'template-left-sidebar.php', [
		'label' => esc_html__( 'Left Sidebar', 'splendid-portfolio' )
	] );

	$templates->add( 'template-right-sidebar.php', [
		'label' => esc_html__( 'Right Sidebar', 'splendid-portfolio' )
	] );
} );