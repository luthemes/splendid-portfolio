<?php
/**
 * Boot the framework
 * 
 * This file is used to create a new framework and bind items to the container.
 * This is the where all the features will be added as part of the theme.
 *
 * @package   Splendid Portfolio
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2017-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/splendid-portfolio
 */

/**
 * Create a new framework instance
 *
 * This will create an instance of the framework allowing you to initialize the theme.
 */
$splendid_portfolio = new Benlumia007\Backdrop\Framework();

/**
 * Register default providers
 */
$splendid_portfolio->provider( Benlumia007\Backdrop\FontAwesome\Provider::class );
$splendid_portfolio->provider( Benlumia007\Backdrop\GoogleFonts\Provider::class );
$splendid_portfolio->provider( Benlumia007\Backdrop\Template\Hierarchy\Provider::class );
$splendid_portfolio->provider( Benlumia007\Backdrop\Template\Manager\Provider::class );
$splendid_portfolio->provider( Benlumia007\Backdrop\Template\View\Provider::class );

/**
 * Register custom providers for the theme.
 */
$splendid_portfolio->provider( Benlumia007\SplendidPortfolio\Admin\Provider::class );
$splendid_portfolio->provider( Benlumia007\SplendidPortfolio\Customize\Layouts\Provider::class );
$splendid_portfolio->provider( Benlumia007\SplendidPortfolio\Menu\Provider::class );
$splendid_portfolio->provider( Benlumia007\SplendidPortfolio\Sidebar\Provider::class );

/**
 * Boot the Framework
 */
$splendid_portfolio->boot();