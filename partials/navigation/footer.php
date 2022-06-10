<?php
/**
 * Primary Nav
 * 
 * @author Andrea Musso
 * 
 * @package Foundry
 */

if ( has_nav_menu( 'footermenu' ) ) :
    wp_nav_menu([
        'theme_location'    => 'footermenu',
        'menu_class'        => 'footer-menu',
        'menu_id'           => 'menu_footer',
        'container'         => 'nav',
        'walker' => new Site_Nav_Walker(),
        'container_class'   => 'footer-menu',
        'depth'             => 1
    ]);
endif;
