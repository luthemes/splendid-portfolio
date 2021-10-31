<?php
/**
 * Layouts
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
namespace Benlumia007\SplendidPortfolio\Customize\Layouts;
use Benlumia007\SplendidPortfolio\Customize\Layouts\Control\ImageRadio;
use Benlumia007\Backdrop\Customize\Component as Customize;

class Component extends Customize {
    public function panels( $manager ) {
		$manager->add_panel( 'theme_options', [
            'title' => esc_html( 'Theme Options', 'splendid-portoflio' ),
			'priority' => 5,
        ] );
    }

    public function sections( $manager ) {
        $manager->add_section( 'global_layout', [
            'title'    => esc_html__( 'Global Layout', 'splendid-portoflio' ),
			'panel'    => 'theme_options',
			'priority' => 5,
        ] );
    }

    public function settings( $manager ) {
        $manager->add_setting( 'global_layout', [
            'default'           => 'left-sidebar',
            'sanitize_callback' => 'Benlumia007\Backdrop\Customize\Helpers\Sanitize::layouts',
        ] );
    }

    public function controls( $manager ) {
        $manager->add_control(
			new ImageRadio(
				$manager,
				'global_layout', [
					'description' => esc_html__( 'General Layout applies to all layouts that supports in this theme.', 'splendid-portoflio' ),
					'section'     => 'global_layout',
					'settings'    => 'global_layout',
					'type'        => 'radio-image',
					'choices'     => [
                            'left-sidebar'  => get_theme_file_uri( '/public/images/2cl.png' ),
                            'right-sidebar' => get_theme_file_uri( '/public/images/2cr.png' ),
                            'no-sidebar'    => get_theme_file_uri( '/public/images/1col.png' ),
						],
				]
			)
		);
    }
}