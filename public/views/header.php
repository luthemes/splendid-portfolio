
<?php
/**
 * Default header template
 *
 * @package   Splendid Portfolio
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2017-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/splendid-portfolio
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="container" class="site-container">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'splendid-portfolio' ) ?></a>
	<div id="social" class="social-navigation">
		<?php Benlumia007\Backdrop\Theme\Menu\display( 'menu', [ 'social' ] ); ?>
	</div>
	<header id="masthead" class="site-header">
		<div class="logo-navigation">
			<div class="site-logo">
				<?php $site_title = get_bloginfo( 'name' ); ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <div class="screen-reader-text">
                        <?php printf( esc_html__( 'Go to the home page of %1$s', 'splendid-portfolio' ), $site_title ); ?>	
                    </div>
                    <?php
                    if ( has_site_icon() ) {
                        $site_icon = get_site_icon_url( 270 ); ?>
                        <img class="site-icon" src="<?php echo esc_url( $site_icon ); ?>">
                    <?php } else { ?>
                        <h2 class="site-firstletter" aria-hidden="true"><?php echo substr( $site_title, 0, 1 ); ?></h2>
                    <?php } ?>
                </a>
			</div>
			<?php Benlumia007\Backdrop\Theme\Menu\display( 'menu', [ 'primary' ] ); ?>
		</div>
	</header>
	<header class="header-image">
		<div class="site-branding">
			<?php Benlumia007\Backdrop\Theme\Site\display_site_title(); ?>
			<?php Benlumia007\Backdrop\Theme\Site\display_site_description(); ?>
		</div>
	</header>