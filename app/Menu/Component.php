<?php
/**
 * Menus
 * 
 * This file registers nav menus.
 *
 * @package   Splendid Portfolio
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2017-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/splendid-portfolio
 */

namespace Benlumia007\SplendidPortfolio\Menu;
use Benlumia007\Backdrop\Theme\Menu\Component as MenuContract;

class Component extends MenuContract {
    public function menus() {
        return [
            'primary'   => esc_html__( 'Primary Sidebar', 'splendid-portfolio' ),
            'secondary' => esc_html__( 'Secondary Sidebar', 'splendid-portfolio' ),
            'social'    => esc_html__( 'Social Navigation', 'splendid-portfolio' )
        ];
    }

	public function enqueue() {
		wp_enqueue_script( 'splendid-portfolio-navigation', get_theme_file_uri( 'public/assets/js/app.js' ), ['jquery'], '1.0.0', true );
		wp_localize_script( 'splendid-portfolio-navigation', 'splendidPortfolioScreenReaderText', [
            'expand'   => '<span class="screen-reader-text">' . esc_html__( 'expand child menu', 'splendid-portfolio' ) . '</span>',
			'collapse' => '<span class="screen-reader-text">' . esc_html__( 'collapse child menu', 'splendid-portfolio' ) . '</span>',
        ] );
	}
}   