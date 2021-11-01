<?php
/**
 * Sidebar Service Provider
 *
 * @package   Splendid Portfolio
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2017-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luPortfolios.com/portfolio/splendid-portfolio
 */

/**
 * Define namespace
 */
namespace Benlumia007\SplendidPortfolio\Portfolio;
use Benlumia007\Backdrop\Tools\ServiceProvider;
use Benlumia007\SplendidPortfolio\Portfolio\Component;

/**
 * Sidebar Provider.
 *
 * @since  1.0.0
 * @access public
 */
class Provider extends ServiceProvider {

	/**
	 * Binds the implementation of the attributes contract to the container.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function register() {
		$this->app->singleton( 'portfolio/provider', Component::class );

    }
    
    public function boot() {
        $this->app->resolve( 'portfolio/provider' )->boot();
    }
}