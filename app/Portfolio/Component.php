<?php

namespace Benlumia007\SplendidPortfolio\Portfolio;
use Benlumia007\Backdrop\PostTypes\Contracts\Types\Type as Portfolio;

class Component extends Portfolio {
    public function __construct() {
        $this->create_post_type( 'portfolios', 'Portfolio', 'Portfolios' );
    }
}