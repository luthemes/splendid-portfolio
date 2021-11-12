<?php

namespace Benlumia007\SplendidPortfolio\Customize\Home;

function display_portfolio_title() {
    $portfolio_title = get_theme_mod( 'custom_portfolio_title', esc_html__( 'Portfolio', 'splendid-portfolio' ) );

    if ( isset( $portfolio_title ) && $portfolio_title != '' ) {
        $title = esc_html( $portfolio_title );
    }

    echo $title;
}

function display_portfolio_description() {
    $portfolio_description = get_theme_mod( 'custom_portfolio_description', esc_html__( 'Portfolio', 'splendid-portfolio' ) );

    if ( isset( $portfolio_description ) && $portfolio_description != '' ) {
        $title = esc_html( $portfolio_description );
    }

    echo $title;
}