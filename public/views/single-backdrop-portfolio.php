<?php
/**
 * Default single portfolio template
 *
 * @package   Splendid Portfolio
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2017-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/splendid-portfolio
 */
?>
<?php $engine = Benlumia007\Backdrop\App::resolve( 'view/engine' ); ?>
<?php $engine->display( 'header' ); ?>
    <section id="content" class="site-content">
        <div id="layout" class="<?php echo esc_attr( get_theme_mod( 'global_layout', 'left-sidebar' ) ); ?>">
            <main id="main" class="content-area">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php $engine->display( 'content/single/portfolio'  ); ?>
                <?php endwhile; ?>
                <?php comments_template(); ?>
            </main>
            <?php Benlumia007\Backdrop\Theme\Sidebar\display( 'sidebar', [ 'portfolio' ] ); ?>
        </div>
    </section>
<?php $engine->display( 'footer' ); ?>