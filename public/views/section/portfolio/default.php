<?php
/**
 * Theme setup functions.
 * 
 * This file holds the basic theme functions on appropriate hooks.
 *
 * @package   Splendid Portfolio
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2017-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/splendid-portfolio
 */
?>
<section id="portfolio" class="site-portfolio">
    <div class="portfolio-container">
        <header class="portfolio-header">
            <h1 class="portfolio-title"><?php Benlumia007\SplendidPortfolio\Customize\Home\display_portfolio_title(); ?></h1>
            <span><?php Benlumia007\SplendidPortfolio\Customize\Home\display_portfolio_description(); ?></span>
        </header>
        <div class="portfolio-content">
            <?php $query = new WP_Query( [ 'post_type' => 'backdrop-portfolio' ] ); ?>

            <?php if ( $query->have_posts() ) { ?>
                <div class="loop">
                    <ul class="grid has-3-columns">
                        <?php while ($query->have_posts()) { ?>
                        <?php $query->the_post(); ?>
                        <?php if ( has_post_thumbnail() ) { ?>
                            <li>
                                <?php the_post_thumbnail('splendid-portfolio-large-thumbnails'); ?>
                                <div class="wp-caption">
                                    <div class="wp-caption-text">
                                        <h3 class="portfolio-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail_caption(); ?></a></h3>
                                        <span><?php echo wptexturize( wp_strip_all_tags( get_post( get_post_thumbnail_id() )->post_content ) ); ?></span>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    <?php } ?> 
                    </ul>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php } ?>

        </div>
    </div>
</section>