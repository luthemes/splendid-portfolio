<?php
/**
 * Main function file.
 *
 * @package   Splendid Portfolio
 * @author    Benjamin Lu ( benlumia007@gmail.com )
 * @copyright Copyright (C) 2017-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/silver-quantum
 */

/**
 * Table of Content
 *
 * 1.0 - Compatibility Check
 * 2.0 - Backdrop Core
 */

/**
 * 1.0 - Compatibility Check
 */
function splendid_portfolio_compatibility_check() {
	if ( version_compare( $GLOBALS['wp_version'], '4.9', '<' ) ) {
		return sprintf(
			// translators: 1 =  a version string, 2 = current wp version string.
			__( 'Initiator requires at least WordPress version %1$s. You are currently running %2$s. Please upgrade and try again.', 'splendid-portfolio' ),
			'4.9',
			$GLOBALS['wp_version']
		);
	} elseif ( version_compare( PHP_VERSION, '5.6', '<' ) ) {
		return sprintf(
			// translators: 1 =  a version string, 2 = current wp version string.
			__( 'Initiator requires at least PHP version %1$s. You are currently running %2$s. Please upgrade and try again.', 'splendid-portfolio' ),
			'5.6',
			PHP_VERSION
		);
	}
	return '';
}

/**
 * Triggered after switch themes and check if it meets the requirements.
 */
function splendid_portfolio_switch_theme() {
	if ( version_compare( $GLOBALS['wp_version'], '4.9', '<' ) || version_compare( PHP_VERSION, '5.6', '<' ) ) {
		switch_theme( get_option( 'theme_switched' ) );
		add_action( 'admin_notices', 'splendid_portfolio_upgrade_notice' );
	}
	return false;
}
add_action( 'after_switch_theme', 'splendid_portfolio_switch_theme' );

/**
 * Displays an error if it doesn't meet the requirements.
 */
function splendid_portfolio_upgrade_notice() {
	printf( '<div class="error"><p>%s</p></div>', esc_html( splendid_portfolio_compatibility_check() ) );
}

/**
 * 2.0 - Backdrop Core
 */
if ( file_exists( get_parent_theme_file_path( '/vendor/autoload.php' ) ) ) {
	require_once get_parent_theme_file_path( '/vendor/autoload.php' );
}
