<?php
/**
 * Sidebars
 * 
 * This file registers sidebars.
 *
 * @package   Splendid Portfolio
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2017-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/splendid-portfolio
 */


namespace Benlumia007\SplendidPortfolio\Sidebar;
use Benlumia007\Backdrop\Theme\Sidebar\Component as SidebarContract;

class Component extends SidebarContract {
    public function sidebars() {
        return [
            'primary' => [
                'name' => esc_html__( 'Primary Sidebar', 'splendid-portfolio' ),
                'desc' => esc_html__( 'test', 'splendid-portfolio' ),
            ],
            'secondary' => [
                'name' => esc_html__( 'Secondary Sidebar', 'splendid-portfolio' ),
                'desc' => esc_html__( 'test', 'splendid-portfolio' ),
            ]
        ];
    }
}   