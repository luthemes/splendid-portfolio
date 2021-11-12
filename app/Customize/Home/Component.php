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
namespace Benlumia007\SplendidPortfolio\Customize\Home;
use Benlumia007\Backdrop\Customize\Component as Customize;

class Component extends Customize {
    public function panels( $manager ) {
        $manager->add_panel( 'home_panel', [
            'title'    => esc_html__( 'Home Section', 'splendid-portfolio' ),
            'priority' => 5,
        ] );
    }

    public function sections( $manager ) {
        $manager->add_section( 'custom_portfolio', [
            'title'    => esc_html__( 'Custom Portfolio', 'splendid-portfolio' ),
            'panel'    => 'home_panel',
            'priority' => 5
        ] );
    }

    public function settings( $manager ) {
		$manager->add_setting( 'custom_portfolio_display', [
            'sanitize_callback' => 'Benlumia007\Backdrop\Customize\Helpers\Sanitize::checkbox',
        ] );

        $manager->add_setting( 'custom_portfolio_title', [
            'default'           => esc_html__( 'Portfolio', 'splendid-portfolio' ),
            'sanitize_callback' => 'sanitize_text_field'
        ] );

        $manager->add_setting( 'custom_portfolio_description', [
            'default'           => esc_html__( 'Some of my recent works.', 'splendid-portfolio' ),
            'sanitize_callback' => 'sanitize_textarea_field'
        ] );
    }

    public function controls( $manager ) {
		$manager->add_control( 'custom_portfolio_display', [
            'label' => esc_html__( 'Enable Portfolio', 'splendid-portfolio' ),
			'type' => 'checkbox',
			'section' => 'custom_portfolio',
			'settings' => 'custom_portfolio_display',
        ] );

        $manager->add_control( 'custom_portfolio_title', [
            'label' => esc_html__( 'Title', 'splendid-portfolio' ),
            'type' => 'text',
            'section' => 'custom_portfolio',
            'settings' => 'custom_portfolio_title'
        ] );

        $manager->add_control( 'custom_portfolio_description', [
            'label' => esc_html__( 'Description', 'splendid-portfolio' ),
            'type' => 'textarea',
            'section' => 'custom_portfolio',
            'settings' => 'custom_portfolio_description'
        ] );
    }
}