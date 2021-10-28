<?php
/**
 * Backdrop Core ( src/Tools/ServiceProvider.php )
 *
 * @package   Backdrop Core
 * @copyright Copyright (C) 2019-2021. Benjamin Lu
 * @license   GNU General PUblic License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author    Benjamin Lu ( https://getbenonit.com )
 */

/**
 * Define namespace
 */
namespace Splendid\Portfolio\Menu;
use Benlumia007\Backdrop\Tools\ServiceProvider;
use Splendid\Portfolio\Menu\Component;

/**
 * Menu Provider
 *
 * @since  1.0.0
 * @access public
 */
class Provider extends ServiceProvider {

	/**
	 * Binds the implementation of the attributes contract to the container.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return void
	 */
	public function register() {
		$this->app->singleton( 'menu/provider', Component::class );
    }
    
    public function boot() {
        $this->app->resolve( 'menu/provider' )->boot();
    }
}